<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
class CommentsController extends Controller
{
    //
    public function index($id){
        return Comments::where("post_id",$id)->get();
    }
    public function store(Request $request){
        return Comments::create([
            "post_id"=>$request->post_id,
            "text"=>$request->text
        ]);
    }


}
