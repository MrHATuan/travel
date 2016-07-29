<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\NewPlanRequest;
use App\Http\Requests\EditPlanRequest;
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
// START //


    public function getHome() {
        $newplan = Plan::select('id', 'name_plan', 'cover_plan', 'max_user', 'date_start', 'created_at')->orderBy('created_at', 'desc')->get()->toArray();
        $hotplan = Plan::with('follows')->with('joins')->get()->sortByDesc(function($hotplan) 
        {
        $a=$hotplan->follows->count();
        $b=$hotplan->joins->count();
        return $a+$b;
        })->take(10);

    	return view('home')->with('newplan', $newplan)->with('hotplan', $hotplan);
        // return view('home')->with('newplan', $newplan);

    }


    public function getProfile($name) {
        $plan = Plan::where('user_id', Auth::id())->get();

        $follow = Follow::where('user_id', Auth::id())->get();
        $join = Join::where([
                ['user_id', Auth::id()],
                ['join', 1],
            ])->get();
        return view('mypage')->with('plan', $plan)->with('follow', $follow)->with('join', $join);
    }


// **************** add plan + route ********************

    public function postNewPlan(NewPlanRequest $request) {
    // insert new  plan
        $plan = new Plan;
        $plan->user_id = Auth::user()->id;
        $plan->name_plan = $request->nameplan;
        $plan->date_start = $request->datestart;
        $plan->max_user = $request->member;
        if($request->hasFile('coverphoto')) {
            $coverphoto = $request->file('coverphoto');
            $fileplan = time() . '.' . $coverphoto->getClientOriginalExtension();
            Image::make($coverphoto)->save(public_path('/uploads/plans/' . $fileplan));
            $plan->cover_plan = $fileplan;
        }
        $plan->status = 0;
        $plan->created_at = new DateTime();
        $plan->save();

    //insert database many route 
        $getid = Plan::select('id')->where('created_at','=', $plan->created_at)->first()->toArray();
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

                $array = array('plan_id'=>$getid["id"], 'come_place'=>$request->$comeplace, 'come_date'=>$request->$comedate, 'stay_time'=>$request->$staytime, 'stay_place'=>$request->$stayplace, 'activity'=>$request->$activity, 'vehicle'=>$request->$vehicles, 'travel_time'=>$request->$traveltime, 'created_at'=>$date);
                $route[$j] = $array;
            }
        Route::insert($route);

    // Mặc định người tạo join vào plan
        $join = new Join;
        $join->user_id = Auth::user()->id;
        $join->plan_id = $getid["id"];
        $join->join = 1;
        $join->created_at = new DateTime();
        $join->save(); 

        return redirect()->route('getHome');

    }


// ******************* hiển thị chi tiết plan ************************

    public function getPlan($id) {
        $plan = Plan::find($id);
        $users = User::where('id', '=', $plan->user_id)->first()->toArray();
        $join = Join::join('users', 'joins.user_id','=', 'users.id')->where('plan_id','=', $id)->get()->toArray();
        $count = Join::where([['plan_id','=', $id],['join','=',1],])->count();
        $route = Route::where('plan_id', '=', $id)->orderBy('id', 'asc')->get()->toArray();
        $comment = Comment::select('comments.id','user_id','plan_id','content','cm_image','comments.created_at','parent_id','name','avatar')->join('users', 'comments.user_id','=', 'users.id')->where('plan_id', '=', $id)->orderBy('comments.id', 'asc')->get()->toArray();
        if(Auth::check()){
            $countjoin = Join::where([['plan_id','=', $id],['user_id','=',Auth::user()->id]])->count();
            $userjoin = Join::join('users', 'joins.user_id','=', 'users.id')->where([['plan_id','=', $id],['user_id','=',Auth::user()->id]])->first();
            $follow = Follow::where([['plan_id','=', $id],['user_id','=',Auth::user()->id]])->count();

            return view('plan.plan', compact('plan', 'users', 'route', 'count', 'join','countjoin','userjoin','follow', 'comment'));
        } else {
    	   return view('plan.plan', compact('plan', 'users', 'route', 'count', 'join', 'comment'));
        }
        // print_r($users);
    }


// ****************** edit plan + add route sau khi xóa ******************

    public function postEditPlan(EditPlanRequest $request, $id) {

        $plan = Plan::find($id);
        $plan->name_plan = $request->nameplan;
        $plan->date_start = $request->datestart;
        $plan->max_user = $request->member;
        if($request->hasFile('coverphoto')) {
            $coverphoto = $request->file('coverphoto');
            $fileplan = time() . '.' . $coverphoto->getClientOriginalExtension();
            Image::make($coverphoto)->save(public_path('/uploads/plans/' . $fileplan));
            $plan->cover_plan = $fileplan;
        }
        $plan->updated_at = new DateTime();
        $plan->save();

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

        return redirect()->back();

    }


// ***************** delete route ***********************

    public function getDelRoute($id) {
        $route = Route::where('plan_id', '=', $id)->delete();
    }


// ******************* edit plan status *******************

    public function getStatus($id) {
        $status = Plan::find($id);

        if($status->status == 0) {
            // nếu chưa bắt đầu -> bắt đầu
            $status->status = 1;
            $status->save();
        } else {
            $status->status = 2;
            // Nếu bắt đầu chuyển thành kết thúc
            $status->save();
        }
    }


// ****************** get follow ********************

    public function getFollow($id) {
        $follow = new Follow;
        $follow->plan_id = $id;
        $follow->user_id = Auth::user()->id;
        $follow->created_at = new DateTime();
        $follow->save();
    }
    public function delFollow($id) {
        $follow = Follow::where([['plan_id', '=', $id],['user_id', '=', Auth::user()->id]])->delete();
    }


// *************** get join ********************

    public function getJoin($id) {
        // nhấn tham gia sẽ đặt status = 0 để ở chế độ request đợi accept
            $join = new Join;
            $join->plan_id = $id;
            $join->user_id = Auth::user()->id;
            $join->join = 0;
            $join->created_at = new DateTime();
            $join->save();
            $follow = Follow::where([['plan_id', '=', $id],['user_id', '=', Auth::user()->id]])->delete();
    }
    public function delJoin($id) {
        $join = Join::where([['plan_id', '=', $id],['user_id', '=', Auth::user()->id]])->delete();
            // khi bo tham gia thì chuyển thành theo dõi
        $follow = new Follow;
        $follow->plan_id = $id;
        $follow->user_id = Auth::user()->id;
        $follow->created_at = new DateTime();
        $follow->save();
    }
    // join accept
    public function acceptJoin(Request $request, $id) {
        $user = $request->id;
        $join = Join::where('plan_id', $id)->where('user_id', $user)->update(['join' => 1]);
    }
    public function rejectJoin(Request $request, $id) {
        $user = $request->id;
        $join = Join::where('plan_id', $id)->where('user_id', $user)->delete();
            // Khi reject thì chuyển status của ng yêu cầu thành follow
        $follow = new Follow;
        $follow->plan_id = $id;
        $follow->user_id = $user;
        $follow->created_at = new DateTime();
        $follow->save();
    }


// END //
}
