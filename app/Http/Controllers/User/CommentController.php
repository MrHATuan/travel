<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\Comment;
use Auth;
use Image;
use DateTime;


class CommentController extends Controller
{
    public function getNewComment(Request $request, $id) {
    		// create new comment
    	$comment = new Comment;
    	$comment->plan_id = $id;
    	$comment->user_id = Auth::user()->id;
    	$comment->content = $request->content;
    	if($request->hasFile('file_data')) {
            $fileCm = $request->file('file_data');
            $filecomment = time() . '.' . $fileCm->getClientOriginalExtension();
            Image::make($fileCm)->resize(1600, 1200)->save(public_path('/uploads/plans/' . $filecomment));
            $comment->cm_image = $filecomment;
        }
        $comment->created_at = new DateTime;
        $comment->save();

        	// get data of comment just created
    	$idcm = Comment::where('created_at',$comment->created_at)->first()->toArray();
    	return response()->json($idcm);
    }

    public function getReplyCm(Request $request, $id) {
    	echo "day la reply comment";
    }
}
