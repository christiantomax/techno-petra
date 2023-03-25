<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Period;
use App\Models\Team;
use App\Models\Vote;
use App\Models\TeamCategory;
use App\Models\Category;
use App\Models\TeamDocument;
use App\Models\TeamRequireDocument;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function publicEndpoint(Request $request){
        $category = $request->input('category');
        $period = $request->input('period');
        $search = $request->input('search');
        $orderby = $request->input('orderby');
        $collections = Team::select('teams.*', 'periods.year', 'periods.semester')
        ->join('periods', 'teams.id_period', '=', 'periods.id')
        ->where('teams.is_active', 1)
        ->whereNotNull('teams.name');

        if (isset($category)) {
            $collections = TeamCategory::select('teams.*', 'periods.year', 'periods.semester')
            ->join('teams', 'teams.id', '=', 'team_categories.id_team')
            ->join('periods', 'teams.id_period', '=', 'periods.id')
            ->where('team_categories.id_category', $category)
            ->where('teams.is_active', 1)
            ->whereNotNull('teams.name');
        }
        if (isset($period)) {
            $collections = $collections->where('periods.id', $period);
        }
        if (isset($search)) {
            $collections = $collections->where('teams.name', 'like', '%'.$search.'%');
        }
        if (isset($orderby)) {
            if($orderby == "-created"){
                $collections = $collections->orderBy('created_at', 'DESC');
            } else if ($orderby == "created") {
                $collections = $collections->orderBy('created_at', 'ASC');
            } else if ($orderby == "most_voted"){
                $collections = Team::select('teams.id', 'teams.name', 'periods.year', 'periods.semester', DB::raw('count(*) as total_vote'))
                ->join('periods', 'teams.id_period', '=', 'periods.id')
                ->join('votes', 'teams.id', '=', 'votes.id_team')
                ->where('teams.is_active', 1)
                ->whereNotNull('teams.name')
                ->groupBy('teams.id')
                ->groupBy('teams.name')
                ->groupBy('periods.year')
                ->groupBy('periods.semester');
            }
        }

        $collections =  $collections->get();
        $dictionary_key = array();
        for ($i=0; $i < count($collections) ; $i++) {
            $dictionary_key[$collections[$i]->id] = $i;
        };

        $categories = TeamCategory::select('team_categories.id_team', DB::raw("GROUP_CONCAT(categories.name SEPARATOR ', ') as category_names"),
        DB::raw("GROUP_CONCAT(categories.id SEPARATOR ', ') as category_ids"))
        ->leftJoin('categories', 'categories.id', '=', 'team_categories.id_category')
        ->groupBy('team_categories.id_team')
        ->get();

        foreach ($collections as &$collection) {
            foreach ($categories as $category) {
                if ($category['id_team'] == $collection['id']) {
                    $collection['categories'] = $category->category_names;
                }
            }
        }

        $collectionsDocument = TeamDocument::join('teams', 'teams.id', '=', 'team_documents.id_team')
        ->where('teams.is_active', 1)
        ->whereNotNull('teams.name')
        ->where('team_documents.deleted_at', null)
        ->orderBy('team_documents.id_team', 'ASC')
        ->orderBy('team_documents.id_team_require_documents', 'ASC')
        ->orderBy('team_documents.sort', 'ASC')
        ->get();

        for ($i=0; $i < count($collectionsDocument) ; $i++) {
            if($collectionsDocument[$i]->id_team_require_documents == 1){
                $collections[$dictionary_key[$collectionsDocument[$i]->id_team]]->youtube = $collectionsDocument[$i]->url_document;
            }else if($collectionsDocument[$i]->id_team_require_documents == 2){
                $collections[$dictionary_key[$collectionsDocument[$i]->id_team]]->thumbnail = $collectionsDocument[$i]->url_document;
            }else if($collectionsDocument[$i]->id_team_require_documents == 3){
                $collections[$dictionary_key[$collectionsDocument[$i]->id_team]]->proposal = $collectionsDocument[$i]->url_document;
            }else if($collectionsDocument[$i]->id_team_require_documents == 4){
                $collections[$dictionary_key[$collectionsDocument[$i]->id_team]]->imageGallery .= $collectionsDocument[$i]->url_document.", ";
            }
        }
        $categories = Category::where('is_active', 1)
        ->orderBy('name', 'ASC')
        ->get();
        $period = Period::where('is_active', 1)
        ->orderBy('year', 'DESC')
        ->orderBy('semester', 'DESC')
        ->get();
        $data = [
            'collections' => $collections,
            'categories' => $categories,
            'period' => $period,
        ];
        return $data;
    }
}
