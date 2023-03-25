<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\News;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index(){
        $collections = News::all();
        return view('admin.setting-news-leader-list')->with('collections', $collections);
    }

    public function showPublic(){
        $current_date_time = date(time());
        $news = '';
        if(Session::get('role') == 2){
            $news = News::where('is_active', '=', 1)
                    ->where('start_date', '<=', $current_date_time)
                    ->where('end_date', '>=', $current_date_time)
                    ->orwhere('news_for', '=', Session::get('role'))
                    ->orWhere('news_for', '=', 1)
                    ->orderBy('start_date', 'DESC')
                    ->get();
        }else{
            $news = News::where('is_active', '=', 1)
                    ->where('start_date', '<=', $current_date_time)
                    ->where('end_date', '>=', $current_date_time)
                    ->Where('news_for', '=', 1)
                    ->orderBy('start_date', 'DESC')
                    ->get();
        }
        Session::put('url', '/');
        return view('public.index')->with('news', $news);
    }

    public function showMahasiwa(){
        $news = News::all()
                ->where('is_active', '=', 1)
                ->where([
                    ['news_for', '=', 1],
                    ['news_for', '=', 3]
                ]);
        return view('public.index')->with('news', $news);
    }

    public function create(){
        return view('admin.setting-news-create');
    }

    public function createPost(Request $request){
        $response = [
            "status" => "200",
            "message" => ""
        ];
        $dataCount = News::where('title', $request->data_post['title'])
        ->where('news_for', $request->data_post['for'])
        ->count();
        if ($dataCount == 0){
            try {
                $period = News::create([
                    'title' => $request->data_post['title'],
                    'content' => $request->data_post['content'],
                    'start_date' => $request->data_post['start_date_news'],
                    'end_date' => $request->data_post['end_date_news'],
                    'is_active' => $request->data_post['is_active'],
                    'news_for' => $request->data_post['for']
                ]);
            } catch(\Illuminate\Database\QueryException $ex){
                $response["message"] .= $ex->getMessage()."\n";
            }
            $response["message"] .= " data  saved"."\n";
        }else{
            $response["status"] .= "403";
            $response["message"] .= " not saved, data already exist title and message designation"."\n";
        }
        return $response;
    }

    public function edit(Request $request){
        $collections = News::find($request->id);
        // $collections->content = nl2br($collections->content);
        $collections->content = json_encode($collections->content);

        // return $collections;
        return View::make('admin.setting-news-edit')->with('collections', $collections);
    }

    public function editPost(Request $request){
        $response = [
            "status" => "200",
            "message" => ""
        ];
        $dataCount = News::where('title', $request->data_post['title'])
        ->where('news_for', $request->data_post['for'])
        ->where('id', '!=', $request->id)
        ->count();
        if ($dataCount == 0){
            try {
                $period = News::find($request->id)
                ->update([
                    'title' => $request->data_post['title'],
                    'content' => $request->data_post['content'],
                    'start_date' => $request->data_post['start_date_news'],
                    'end_date' => $request->data_post['end_date_news'],
                    'is_active' => $request->data_post['is_active'],
                    'news_for' => $request->data_post['for']
                ]);
            } catch(\Illuminate\Database\QueryException $ex){
                $response["message"] .= $ex->getMessage()."\n";
            }
            $response["message"] .= " data  saved"."\n";
        }else{
            $response["status"] .= "403";
            $response["message"] .= " not saved, data already exist title and message designation"."\n";
        }
        return $response;
    }
}

