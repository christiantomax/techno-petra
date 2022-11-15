<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Period;
use App\Models\Team;
use App\Models\TeamCategory;
use App\Models\Category;

class TeamController extends Controller
{
    public function index(){
        $collections = Team::select('teams.*', 'periods.year', 'periods.semester')
        ->join('periods', 'teams.id_period', '=', 'periods.id')
        ->orderBy('id_period', 'DESC')
        ->orderBy('name')
        ->get();
        $dictionary_key = array();
        for ($i=0; $i < count($collections) ; $i++) {
            $dictionary_key[$collections[$i]->id] = $i;
        }
        $collectionsTeamCategory = TeamCategory::select('team_categories.id_team', 'categories.name')
        ->join('categories', 'team_categories.id_category', '=', 'categories.id')
        ->orderBy('team_categories.id_team', 'DESC')
        ->orderBy('categories.name')
        ->get();
        for ($i=0; $i < count($collectionsTeamCategory) ; $i++) {
            $collections[$dictionary_key[$collectionsTeamCategory[$i]->id_team]]->categories .= $collectionsTeamCategory[$i]->name.", ";
        }
        return View::make('admin.setting-team-leader-list')->with('collections', $collections);
    }

    public function create(){
        $collections = Period::where('is_active', 1)
        ->orderBy('year')
        ->orderBy('semester')
        ->get();
        return View::make('admin.setting-team-leader-create')->with('collections', $collections);
    }

    public function createPost(Request $request){
        $response = [
            "status" => "200",
            "message" => ""
        ];
        $colections = json_decode($request->data_post["nrp"]);
        for($i = 0, $l = count($colections); $i < $l; ++$i) {
            $dataCount = Team::where('nrp_leader', $colections[$i]->value)
                    ->count();
            if ($dataCount == 0){
                try {
                    $period = Team::create(["id_period" => $request->data_post["period"], 'nrp_leader' => $colections[$i]->value]);
                } catch(\Illuminate\Database\QueryException $ex){
                    $response["message"] .= $ex->getMessage()."\n";
                }
                $response["message"] .= $colections[$i]->value." data  saved"."\n";
            }else{
                $response["status"] .= $colections[$i]->value."403";
                $response["message"] .= $colections[$i]->value." not saved, data already exist"."\n";
            }
        }
        return $response;
    }

    public function edit(Request $request){
        $collections = Team::find($request->id);
        $collectionsPeriod = Period::all();
        $data = [
            'collections'  => $collections,
            'periods'   => $collectionsPeriod,
        ];
        return View::make('admin.setting-team-leader-edit')->with('data', $data);
    }

    public function editPost(Request $request){
        $data = Team::where('nrp_leader', $request->data_post['nrp_leader'])
        ->where('id', '!=', $request->data_post['id'])
        ->count();
        if ($data == 0){
            try {
                $period = Team::find($request->data_post['id'])
                ->update(['nrp_leader' => $request->data_post['nrp_leader'], 'id_period' => $request->data_post['period']]);
            } catch(\Illuminate\Database\QueryException $ex){
                return [
                    "status" => "403",
                    "message" => $ex->getMessage()
                ];
            }
            return [
                "status" => "200",
                "message" => "success"
            ];
        }else{
            return [
                "status" => "403",
                "message" => "error duplicate data nrp"
            ];
        }
        return [
            "status" => "500",
            "message" => "internal server error"
        ];
    }

    public function studentTeamProfile(Request $request){
        $collections = Team::select('teams.*', 'periods.year', 'periods.semester')
        ->join('periods', 'teams.id_period', '=', 'periods.id')
        ->where('teams.id', $request->id)
        ->orderBy('id_period', 'DESC')
        ->orderBy('name')
        ->get();
        if( ! $collections){
            return [
                "status" => "403",
                "message" => "something went wrong, please contact admin"
            ];
        }
        $dictionary_key = array();
        for ($i=0; $i < count($collections) ; $i++) {
            $dictionary_key[$collections[$i]->id] = $i;
        }
        $collectionsTeamCategory = TeamCategory::select('team_categories.id_team', 'categories.name')
        ->join('categories', 'team_categories.id_category', '=', 'categories.id')
        ->where('team_categories.id_team', $request->id)
        ->orderBy('team_categories.id_team', 'DESC')
        ->orderBy('categories.name')
        ->get();
        for ($i=0; $i < count($collectionsTeamCategory) ; $i++) {
            $collections[$dictionary_key[$collectionsTeamCategory[$i]->id_team]]->categories .= $collectionsTeamCategory[$i]->name.", ";
        }
        $collections[0]->description = json_encode($collections[0]->description);
        $collections[0]->member = json_encode($collections[0]->member);
        return View::make('student.profile')->with('collection', $collections[0]);
    }

    public function studentEditTeamProfile(Request $request){
        $data = Team::where('id', '=', $request->data_post['id'])
        ->count();
        if ($data == 1){
            try {
                $period = Team::find($request->data_post['id'])
                ->update([
                    'name' => $request->data_post['name'],
                    'description' => $request->data_post['description'],
                    'member' => $request->data_post['member'],
                    'slug' => $request->data_post['slug'],
                ]);
            } catch(\Illuminate\Database\QueryException $ex){
                return [
                    "status" => "403",
                    "message" => $ex->getMessage()
                ];
            }
            return [
                "status" => "200",
                "message" => "success"
            ];
        }else{
            return [
                "status" => "403",
                "message" => "there something wrong, please contact admin"
            ];
        }
        return [
            "status" => "500",
            "message" => "internal server error"
        ];
    }

    public function studentCategoryList(Request $request){
        $collections = TeamCategory::select('team_categories.id', 'categories.name', 'team_categories.id_team')
        ->join('categories', 'team_categories.id_category', '=', 'categories.id')
        ->where('team_categories.id_team', $request->id)
        ->where('categories.is_active', 1)
        ->where('team_categories.deleted_at', NULL)
        ->orderBy('team_categories.id_team', 'DESC')
        ->orderBy('categories.name')
        ->get();

        $currentCategories = Category::select('categories.id')
        ->leftjoin('team_categories', function($join){
            $join->on('team_categories.id_category', '=', 'categories.id');
        })
        ->where('team_categories.id_team', '=', $request->id)
        ->where('categories.is_active', 1)
        ->orderBy('categories.name')
        ->distinct('categories.id')
        ->get();

        $categories = Category::select('categories.id', 'categories.name')
        ->whereNotIn('categories.id', $currentCategories)
        ->where('categories.is_active', 1)
        ->orderBy('categories.name')
        ->get();

        $data = [
            'collections' => $collections,
            'categories' => $categories,
            'id' => $request->id
        ];

        return View::make('student.setting-category-list')->with('collections', $data);
    }

    public function studentCategoryDelete(Request $request){
        try {
            $period = TeamCategory::find($request->data_post['id'])
            ->delete();
        } catch(\Illuminate\Database\QueryException $ex){
            return [
                "status" => "403",
                "message" => $ex->getMessage()
            ];
        }
        return [
            "status" => "200",
            "message" => "success"
        ];
    }

    public function studentCategoryAdd(Request $request){
        $response = [
            "status" => "200",
            "message" => "Data saved"
        ];
        $temp = json_decode($request->data_post['categories']);
        for ($i = 0; $i < count($temp); $i++)  {
            $countData = TeamCategory::select('team_categories.id')
            ->join('categories', 'team_categories.id_category', '=', 'categories.id')
            ->where('team_categories.id_team', $request->data_post['id'])
            ->where('categories.id', $temp[$i])
            ->count();
            if ($countData == 0){
                try {
                    $period = TeamCategory::create([
                        "id_team" => $request->data_post['id'],
                        'id_category' => $temp[$i]
                    ]);
                } catch(\Illuminate\Database\QueryException $ex){
                    $response = [
                        "status" => "403",
                        "message" => $ex->getMessage()
                    ];
                }
            }
        }
        return $response;
    }
}
