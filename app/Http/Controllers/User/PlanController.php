<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\NewPlanRequest;
use App\Http\Controllers\Controller;


class PlanController extends Controller
{
    // public function getNewPlan($name) {
    // 	return view('newplan');
    // }

    public function postNewPlan(NewPlanRequest $request) {
    	$plan = $request->toArray();
    	$total = count($plan);
    	$n = ($total-6)/7;
    	for ($i=1; $i<=$n; $i++){
    	$comeplace = "come_place".$i;
    	$comedate = "come_date".$i;
    	$newplan = $request->$comeplace;
    	$newplan2 = $request->$comedate;
    	print_r($newplan);
    	print_r($newplan2);
    	}
    	// print_r($plan);
    }

    public function getPlan($id) {
    	return view('plan');
    }
}
