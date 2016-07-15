<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\NewPlanRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\Route;
use App\Models\Join;
use App\Models\Follow;
use App\Models\Comment;
use Auth;
use Image;
use DateTime;


class PlanController extends Controller
{
    public function getHome() {
        $newplan = Plan::select('id', 'name_plan', 'cover_plan', 'max_user', 'date_start', 'created_at')->orderBy('created_at', 'desc')->get()->toArray();
    	return view('home', compact('newplan'));
    }

    public function getProfile($name) {
        return view('mypage');
    }

    public function postNewPlan(NewPlanRequest $request) {
    	// dd($request);
        $plan = new Plan;
        $plan->user_id = Auth::user()->id;
        $plan->name_plan = $request->nameplan;
        $plan->date_start = $request->datestart;
        $plan->max_user = $request->member;
        if($request->hasFile('coverphoto')) {
            $coverphoto = $request->file('coverphoto');
            $fileplan = time() . '.' . $coverphoto->getClientOriginalExtension();
            Image::make($coverphoto)->resize(1600, 1200)->save(public_path('/uploads/plans/' . $fileplan));
            $plan->cover_plan = $fileplan;
        }
        $plan->status = 0;
        $plan->created_at = new DateTime();
        $plan->save();

        $getid = Plan::select('id')->where('created_at','=', $plan->created_at)->get()->toArray();
        $id = $getid[0]["id"];
        $total = count($request->toArray());
        $n = ($total-6)/7;
        
            for ($j=0; $j<$n; $j++){
                $i=$j+1;
                $comeplace = "comeplace".$i;
                $comedate = "comedate".$i;
                $staytime = "staytime".$i;
                $stayplace = "stayplace".$i;
                $activity = "activity".$i;
                $vehicles= "vehicle".$i;
                $traveltime = "traveltime".$i;
                $date = new DateTime();

                $array = array('plan_id'=>$id, 'come_place'=>$request->$comeplace, 'come_date'=>$request->$comedate, 'stay_time'=>$request->$staytime, 'stay_place'=>$request->$stayplace, 'activity'=>$request->$activity, 'vehicle'=>$request->$vehicles, 'travel_time'=>$request->$traveltime, 'created_at'=>$date);
                $route[$j] = $array;
            }
        Route::insert($route);
        return redirect()->route('getHome');

    }

    public function getPlan($id) {
        $plan = Plan::find($id);
    	return view('plan.plan');
    }
}
