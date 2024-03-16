<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\BlogCtegory;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Testimonial;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;


class UserController extends Controller
{
    public function HomePage(){
        $blogcategories = BlogCtegory::latest()->get();
        $testimonials = Testimonial::latest()->get();
        return view('frontend.index',compact('blogcategories'));
    }
    public function AllBlog(){
        $blogcategories = BlogCtegory::latest()->get();
        $post = Post::latest()->get();
        return view('frontend.pages.blog',compact('blogcategories','post'));
    }
    public function BlogDetails($id){
// dd($id);
        $post= Post::where('id',$id)->first();
        $tags =  $post->post_tag;
        $tags_all = explode(',',$tags);
        $blogcategories = BlogCtegory::latest()->get();
       // $post = Post::get();
        return view('frontend.pages.blog_details',compact('blogcategories','post','tags_all','tags'));
    }
    public function StoreReservation(Request $request)
    {
         $resevation = Reservation::create($request->all());
        // return redirect()->back();
        // Reservation::insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'date' => $request->date,
        //     'time' => $request->time,
        //     'guest' => $request->guest,
        //      ]

        //  );
        return redirect()->back();
    }
    public function AddComment( Reqruest $request){
        $post_id= $request->post_id;
        Comment::create([
            'post_id' => $post_id,
            'publicher_name'=>$request->publicher_name,
            'publicher_email' =>$request->publicher_email ,
            'comment_content'=>$request->comment_content,
            'created_at'=>Carbon::now()

        ]);
        // return redirect()->back();
        return redirect()->route('blog.details');

    }
}

