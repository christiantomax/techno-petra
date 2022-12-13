<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use File;
use App\Models\Period;
use App\Models\Team;
use App\Models\Vote;
use App\Models\TeamCategory;
use App\Models\Category;
use App\Models\TeamDocument;
use App\Models\TeamRequireDocument;
use DB;

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
        $collectionsTeamCategory = Vote::select(DB::raw('count(*) as total'), 'id_team')
        ->groupBy('id_team')
        ->get();
        for ($i=0; $i < count($collectionsTeamCategory) ; $i++) {
            $collections[$dictionary_key[$collectionsTeamCategory[$i]->id_team]]->total = $collectionsTeamCategory[$i]->total;
        }
        return View::make('admin.setting-team-leader-list')->with('collections', $collections);
    }

    public function teamVotesDetail(Request $request){
        $collections = Vote::select("email", \DB::raw('(CASE
            WHEN role = "1" THEN "Admin"
            WHEN role = "2" THEN "Team Leader"
            WHEN role = "3" THEN "Mahasiswa"
            WHEN role = "4" THEN "Public"
            ELSE "Unknown"
            END) AS role'))
        ->where('id_team', $request->id)
        ->get();
        return View::make('admin.team-votes-detail')->with('collections', $collections);
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
        ->where('teams.id', Session::get('id'))
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
        ->where('team_categories.id_team', Session::get('id'))
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
        $checkSlug = Team::where('slug', '=', $request->data_post['slug'])
        ->count();
        if ($data == 1 && $checkSlug == 0){
            try {
                $period = Team::find($request->data_post['id'])
                ->update([
                    'name' => $request->data_post['name'],
                    'description' => $request->data_post['description'],
                    'member' => $request->data_post['member'],
                    'slug' => str_replace(" ", "-", $request->data_post['slug']),
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
        }else if($checkSlug != 0){
            return [
                "status" => "403",
                "message" => "slug already taken with another team"
            ];
        }
        else{
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
        ->where('team_categories.id_team', Session::get('id'))
        ->where('categories.is_active', 1)
        ->where('team_categories.deleted_at', NULL)
        ->orderBy('team_categories.id_team', 'DESC')
        ->orderBy('categories.name')
        ->get();

        $currentCategories = Category::select('categories.id')
        ->leftjoin('team_categories', function($join){
            $join->on('team_categories.id_category', '=', 'categories.id');
        })
        ->where('team_categories.id_team', '=', Session::get('id'))
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
            'id' => Session::get('id')
        ];

        return View::make('student.setting-category-list')->with('collections', $data);
    }

    public function studentCategoryDelete(Request $request){
        try {
            $period = TeamCategory::find(Session::get('id'))
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
            ->where('team_categories.id_team', Session::get('id'))
            ->where('categories.id', $temp[$i])
            ->count();
            if ($countData == 0){
                try {
                    $period = TeamCategory::create([
                        "id_team" => Session::get('id'),
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

    public function studentDocument(){
        $collections = TeamDocument::where('id_team', Session::get('id'))
        ->where('deleted_at', null)
        ->where('is_active', 1)
        ->orderBy('id_team_require_documents', 'ASC')
        ->orderBy('sort', 'ASC')
        ->get();

        $youtube = "";
        $proposal = "";
        $thumbnail = "";
        $livePreview = "";
        $imageGallery = [];
        for ($x = 0; $x < count($collections); $x++) {
            if($collections[$x]->id_team_require_documents == 1){
                $youtube = $collections[$x];
            }else if($collections[$x]->id_team_require_documents == 2){
                $thumbnail = $collections[$x];
            }else if($collections[$x]->id_team_require_documents == 3){
                $proposal = $collections[$x];
            }else if($collections[$x]->id_team_require_documents == 4){
                array_push($imageGallery, $collections[$x]);
            }else if($collections[$x]->id_team_require_documents == 5){
                $livePreview = $collections[$x];
            }
        }
        $data = [
            'youtube' => $youtube,
            'proposal' => $proposal,
            'thumbnail' => $thumbnail,
            'livePreview' => $livePreview,
            'imageGallery' => $imageGallery,
        ];
        return View::make('student.mahasiswa-upload-documents')->with('data', $data);
    }

    public function studentDocumentUpload(Request $request){
        $validatePdf = ['application/pdf'];
        $validateImage = ['image/jpeg','image/jpg','image/png'];
        $teamId = Session::get('id');
        $documentYoutubeId = 1;
        $documentThumbnailId = 2;
        $documentPorposalId = 3;
        $documentImageGalleryId = 4;
        $documentLivePreviewId = 5;
        $response = [
            "status" => "200",
            "message" => "success"
        ];

        $data = TeamDocument::where('id_team', $teamId)
        ->where('id_team_require_documents', $documentYoutubeId)
        ->count();

        if ($data == 0 && $request->youtube != ""){
            try {
                $teamDocument = TeamDocument::create([
                    "id_team" => $teamId,
                    'id_team_require_documents' => $documentYoutubeId,
                    'name' => "youtube",
                    'type' => "text",
                    'sort' => 1,
                    'url_document' => $request->youtube
                ]);
            } catch(\Illuminate\Database\QueryException $ex){
                array_push($response, $ex->getMessage().' | ');
            }
        }else{
            try {
                $period = TeamDocument::where('id_team', $teamId)
                ->where('id_team_require_documents', $documentYoutubeId)
                ->where('name', 'youtube')
                ->update(['url_document' => $request->youtube]);
            } catch(\Illuminate\Database\QueryException $ex){
                array_push($response, $ex->getMessage().' | ');
            }
        }

        $data = TeamDocument::where('id_team', $teamId)
        ->where('id_team_require_documents', $documentLivePreviewId)
        ->count();
        if ($data == 0 && $request->livePreview != ""){
            try {
                $teamDocument = TeamDocument::create([
                    "id_team" => $teamId,
                    'id_team_require_documents' => $documentLivePreviewId,
                    'name' => "link preview",
                    'type' => "text",
                    'sort' => 1,
                    'url_document' => $request->livePreview
                ]);
            } catch(\Illuminate\Database\QueryException $ex){
                array_push($response, $ex->getMessage().' | ');
            }
        }else{
            try {
                $period = TeamDocument::where('id_team', $teamId)
                ->where('id_team_require_documents', $documentLivePreviewId)
                ->where('name', 'link preview')
                ->update(['url_document' => $request->livePreview]);
            } catch(\Illuminate\Database\QueryException $ex){
                array_push($response, $ex->getMessage().' | ');
            }
        }

        if($request->file('thumbnail') != NULL && $request->file('thumbnail')->getClientOriginalName() != "blob"){
            $dataCheckCount = TeamDocument::where('id_team', $teamId)
            ->where('id_team_require_documents', $documentThumbnailId)
            ->count();
            if($dataCheckCount != 0){
                $dataCheck = TeamDocument::where('id_team', $teamId)
                ->where('id_team_require_documents', $documentThumbnailId)
                ->get();
                $this->deleteFile($dataCheck[0]->name, $dataCheck[0]->id);
            }

            $check = $this->storeFile($request->file('thumbnail'), $validateImage, $teamId, $documentThumbnailId, "file", $documentThumbnailId,
            $request->file('thumbnail')->getSize());
            if($check["status"] == "403"){
                array_push($response, 'Proposal file is not uploaded | ');
            }
        }else if($request->file('thumbnail') == NULL){
            $dataCheckCount = TeamDocument::where('id_team', $teamId)
            ->where('id_team_require_documents', $documentThumbnailId)
            ->count();
            if($dataCheckCount != 0){
                $dataCheck = TeamDocument::where('id_team', $teamId)
                ->where('id_team_require_documents', $documentThumbnailId)
                ->get();
                $this->deleteFile($dataCheck[0]->name, $dataCheck[0]->id);
            }
        }

        if($request->file('proposal') != NULL && $request->file('proposal')->getClientOriginalName() != "blob"){
            $dataCheckCount = TeamDocument::where('id_team', $teamId)
            ->where('id_team_require_documents', $documentPorposalId)
            ->count();
            if($dataCheckCount != 0){
                $dataCheck = TeamDocument::where('id_team', $teamId)
                ->where('id_team_require_documents', $documentPorposalId)
                ->get();
                $this->deleteFile($dataCheck[0]->name, $dataCheck[0]->id);
            }

            $check = $this->storeFile($request->file('proposal'), $validatePdf, $teamId, $documentPorposalId, "file", $documentPorposalId,
            $request->file('proposal')->getSize());
            if($check["status"] == "403"){
                array_push($response, 'Proposal file is not uploaded | ');
            }
        }else if($request->file('proposal') == NULL){
            $dataCheckCount = TeamDocument::where('id_team', $teamId)
            ->where('id_team_require_documents', $documentPorposalId)
            ->count();
            if($dataCheckCount != 0){
                $dataCheck = TeamDocument::where('id_team', $teamId)
                ->where('id_team_require_documents', $documentPorposalId)
                ->get();
                $this->deleteFile($dataCheck[0]->name, $dataCheck[0]->id);
            }
        }

        $imageGalleryDelete = TeamDocument::where('id_team', $teamId)
        ->where('id_team_require_documents', $documentImageGalleryId)
        ->get();
        $listFileName = explode(',', $request->listFileName);

        $aaa = [];
        for ($x = 0; $x < $request->count; $x++) {
            $isBreak = FALSE;
            foreach ($imageGalleryDelete as $key => $value) {
                if($value->file_size == $request->file('imageGallery'.$x)->getSize()
                && $value->name == $listFileName[$x]){
                    unset($imageGalleryDelete[$key]);
                    $isBreak = TRUE;
                }
                array_push($aaa, $value->file_size." === ".$request->file('imageGallery'.$x)->getSize());
                array_push($aaa, $value->name ." === ". $listFileName[$x]);
                array_push($aaa, $value->file_size == $request->file('imageGallery'.$x)->getSize()
                && $value->name == $listFileName[$x]);
            }

            if($request->file('imageGallery'.$x)->getClientOriginalName() == "blob"){
                $period = TeamDocument::where('id_team', $teamId)
                ->where('id_team_require_documents', $documentImageGalleryId)
                ->where('file_size', $request->file('imageGallery'.$x)->getSize())
                ->where('name', $listFileName[$x])
                ->update([
                    'sort' => $documentImageGalleryId+$x,
                ]);
            }else{
                $check = $this->storeFile($request->file('imageGallery'.$x), $validateImage, $teamId, $documentImageGalleryId, "file", $documentImageGalleryId+$x,
                $request->file('imageGallery'.$x)->getSize());
                if($check["status"] == "403"){
                    array_push($response, 'Proposal file is not uploaded | ');
                }
            }
        }
        foreach ($imageGalleryDelete as $key => $value) {
            $this->deleteFile($imageGalleryDelete[$key]->name, $imageGalleryDelete[$key]->id);
        }
        return $response;
    }

    public function exhibition(){
        $collections = Team::select('teams.*', 'periods.year', 'periods.semester')
        ->join('periods', 'teams.id_period', '=', 'periods.id')
        ->where('teams.is_active', 1)
        ->orderBy('id_period', 'DESC')
        ->orderBy('id', 'DESC')
        ->orderBy('name')
        ->get();
        $dictionary_key = array();
        for ($i=0; $i < count($collections) ; $i++) {
            $dictionary_key[$collections[$i]->id] = $i;
        }
        $collectionsTeamCategory = TeamCategory::select('team_categories.id_team', 'categories.name')
        ->join('categories', 'team_categories.id_category', '=', 'categories.id')
        ->join('teams', 'teams.id', '=', 'team_categories.id_team')
        ->where('teams.is_active', '=', 1)
        ->orderBy('team_categories.id_team', 'DESC')
        ->orderBy('categories.name')
        ->get();
        for ($i=0; $i < count($collectionsTeamCategory) ; $i++) {
            $collections[$dictionary_key[$collectionsTeamCategory[$i]->id_team]]->categories .= $collectionsTeamCategory[$i]->name.", ";
        }
        $collectionsDocument = TeamDocument::join('teams', 'teams.id', '=', 'team_documents.id_team')
        ->where('teams.is_active', 1)
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
        Session::put('url', '/exhibition');
        return View::make('public.exhibition')->with('collections', $collections);
    }

    public function exhibitionDetail(Request $request){
        $checkBySlug = Team::where('slug', $request->slug)
        ->get();
        $checkById = Team::where('id', $request->slug)
        ->get();
        $collections = "";
        if(isset($checkBySlug[0])){
            $collections = Team::select('teams.*', 'periods.year', 'periods.semester')
            ->join('periods', 'teams.id_period', '=', 'periods.id')
            ->where('teams.slug', $request->slug)
            ->orderBy('id_period', 'DESC')
            ->orderBy('id', 'DESC')
            ->orderBy('name')
            ->get();
        }else if(isset($checkById[0])){
            $collections = Team::select('teams.*', 'periods.year', 'periods.semester')
            ->join('periods', 'teams.id_period', '=', 'periods.id')
            ->where('teams.id', $request->slug)
            ->orderBy('id_period', 'DESC')
            ->orderBy('id', 'DESC')
            ->orderBy('name')
            ->get();
        }else{
            return View::make('errors.404');
        }

        Session::put('url', '/exhibition/'.$request->slug);


        $dictionary_key = array();
        for ($i=0; $i < count($collections) ; $i++) {
            $dictionary_key[$collections[$i]->id] = $i;
        }
        $collectionsTeamCategory = TeamCategory::select('team_categories.id_team', 'categories.name')
        ->join('categories', 'team_categories.id_category', '=', 'categories.id')
        ->where('team_categories.id_team', $collections[0]->id)
        ->orderBy('categories.name')
        ->get();
        for ($i=0; $i < count($collectionsTeamCategory) ; $i++) {
            $collections[$dictionary_key[$collectionsTeamCategory[$i]->id_team]]->categories .= $collectionsTeamCategory[$i]->name.", ";
        }


        $collectionsDocument = TeamDocument::where('deleted_at', null)
        ->where('is_active', 1)
        ->where('id_team', $collections[0]->id)
        ->orderBy('id_team', 'ASC')
        ->orderBy('id_team_require_documents', 'ASC')
        ->orderBy('sort', 'ASC')
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
            }else if($collectionsDocument[$i]->id_team_require_documents == 5){
                $collections[$dictionary_key[$collectionsDocument[$i]->id_team]]->livePreview .= $collectionsDocument[$i]->url_document.", ";
            }
        }
        return View::make('public.exhibition-detail')->with('collections', $collections);
    }

    private function deleteFile($fileName, $id){
        if(File::exists(public_path('files/'.$fileName))){
            File::delete(public_path('files/'.$fileName));
        }

        $period = TeamDocument::find($id)
        ->delete();
    }

    private function storeFile($file, $documentExtension, $teamId,
    $documentId, $documentType, $documentSort, $size){
        if($file == null){
            return [
                "status" => "200",
                "message" => "success"
            ];
        }
        if (in_array($file->getClientMimeType(), $documentExtension)) {
            $filename = time().'_'.$this->generateRandomString().'_'.$teamId.'_'.$file->getClientOriginalName();
            // File extension
            $extension = $file->getClientOriginalExtension();
            // File upload location
            $location = 'files';
            $filepath = '';
            try {
                // Upload file
                $file->move($location,$filename);
                // File path
                $filepath = url('files/'.$filename);
            } catch(\Illuminate\Database\QueryException $ex){
                return [
                    "status" => "403",
                    "message" => $ex->getMessage()
                ];
            }
        }else{
            return [
                "status" => "403",
                "message" => "file not uploaded, wrong file extension"
            ];
        }

        try {
            $teamDocument = TeamDocument::create([
                "id_team" => $teamId,
                'id_team_require_documents' => $documentId,
                'name' => $filename,
                'type' => $documentType,
                'ext' => $extension,
                'sort' => $documentSort,
                'file_size' => $size,
                'url_document' => $filepath,
                ]
            );
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

    private function generateRandomString($length = 3) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function voteNow(Request $request){
        if(Session::get('id')){
            $dataCount = Vote::where('id_team', $request->id)
                ->where('email', Session::get('email'))
                ->count();
            if($dataCount == 0){
                $voteNow = Vote::create([
                    "id_team" => $request->id,
                    'email' => Session::get('email'),
                    'role' => Session::get('role'),
                    ]
                );
            }else{
                return [
                    "status" => "403",
                    "message" => 'You\'re already vote this team'
                ];
            }
        }else{
            return [
                "status" => "403",
                "message" => 'Please login first'
            ];
        }
        return [
            "status" => "200",
            "message" => "success"
        ];
    }
}
