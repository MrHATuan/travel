<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CommentRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\Comment;
use Auth;
use Image;
use DateTime;


class CommentController extends Controller
{
    public function postNewComment(CommentRequest $request, $id) {
    		// create new comment
    	$comment = new Comment;
    	$comment->plan_id = $id;
    	$comment->user_id = Auth::user()->id;
    	$comment->content = $request->commentText;

    	if($request->hasFile('btnCmImg')) {
            $fileCm = $request->file('btnCmImg');
            $filecomment = time() . '.' . $fileCm->getClientOriginalExtension();
            Image::make($fileCm)->save(public_path('/uploads/comments/' . $filecomment));
            $comment->cm_image = $filecomment;
        }
        $comment->created_at = new DateTime;
        $comment->save();
        
        	// get data of comment just created
    	$idcm = Comment::where('created_at',$comment->created_at)->first()->toArray();
    	return response()->json($idcm);
    }

    public function postReplyCm(CommentRequest $request, $id) {
    	$reply = new Comment;
        $reply->plan_id = $id;
        $reply->user_id = Auth::user()->id;
        $reply->content = $request->replyText;
        if($request->hasFile('btnReImg')) {
            $fileCm = $request->file('btnReImg');
            $filecomment = time() . '.' . $fileCm->getClientOriginalExtension();
            Image::make($fileCm)->save(public_path('/uploads/comments/' . $filecomment));
            $reply->cm_image = $filecomment;
        }
        $reply->parent_id = $request->parent;
        $request->created_at = new DateTime;
        $reply->save();

        $recm = Comment::where('created_at',$reply->created_at)->first()->toArray();
        return response()->json($recm);
    }
}
