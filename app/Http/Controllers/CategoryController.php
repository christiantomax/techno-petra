<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $collections = Category::all();
        return View::make('admin.setting-category-list')->with('collections', $collections);
    }

    public function edit(Request $request){
        $collection = Category::find($request->id);
        return View::make('admin.setting-category-edit')->with('collection', $collection);
    }

    public function editPost(Request $request){
        $data = Category::where('name', $request->data_post['name'])
        ->where('id', '!=', $request->id)
        ->count();
        if ($data == 0){
            try {
                $period = Category::where('id', $request->id)
                ->update($request->data_post);
            } catch(\Illuminate\Database\QueryException $ex){
                return $ex->getMessage();
            }
            return [
                "status" => "200",
                "message" => "success"
            ];
        }else{
            return [
                "status" => "403",
                "message" => "error duplicate data name"
            ];
        }
        return [
            "status" => "500",
            "message" => "internal server error"
        ];
    }

    public function createPost(Request $request){
        $data = Category::where('name', $request->data_post['name'])
                ->count();
        if ($data == 0){
            try {
                $period = Category::create($request->data_post);
            } catch(\Illuminate\Database\QueryException $ex){
                return $ex->getMessage();
            }
            return [
                "status" => "200",
                "message" => "success"
            ];
        }else{
            return [
                "status" => "403",
                "message" => "error duplicate data name"
            ];
        }
        return [
            "status" => "500",
            "message" => "internal server error"
        ];
    }
}
