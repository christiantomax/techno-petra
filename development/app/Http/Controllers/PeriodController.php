<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Period;

class PeriodController extends Controller
{
    public function index(){
        $periods = Period::all();
        return View::make('admin.setting-period-list')->with('periods', $periods);
    }

    public function edit(Request $request){
        $period = Period::find($request->id);
        return View::make('admin.setting-period-edit')->with('period', $period);
    }

    public function editPost(Request $request){
        $data = Period::where('year', $request->data_post['year'])
        ->where('semester', $request->data_post['semester'])
        ->where('id', '!=', $request->id)
        ->count();
        if ($data == 0){
            try {
                $period = Period::where('id', $request->id)
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
                "message" => "error duplicate data year and semester"
            ];
        }
        return [
            "status" => "500",
            "message" => "internal server error"
        ];
    }

    public function create(Request $request){
        $data = Period::where('year', $request->data_post['year'])
                ->where('semester', $request->data_post['semester'])
                ->count();
        if ($data == 0){
            try {
                $period = Period::create($request->data_post);
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
                "message" => "error duplicate data year and semester"
            ];
        }
        return "error";
    }
}
