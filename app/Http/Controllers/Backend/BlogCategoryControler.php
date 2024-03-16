<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCtegory;
use App\Models\Post;
use App\Models\Comment;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class BlogCategoryControler extends Controller
{
    public function AllBlog(){
        $blogcategories = BlogCtegory::latest()->get();
        return view('backend.admin.blog_category.all_blog_category',compact('blogcategories'));
    }//End Method
    public function AddBlog(){
        return view('backend.admin.blog_category.add_blog_category');
    }//End Method
    public function StoreBlog(Request $request){

        BlogCtegory::insert([
           'blog_category_name' => $request->blog_category_name,
           'blog_categor_slug_name' => strtolower(str_replace('','-',$request->blog_category_name))
            ]

        );
        return view('backend.admin.blog_category.all_blog_category');
    }//End Method
    public function EditBlog(Request $request,$id){
        $blogcategory = BlogCtegory::find($id);
        return view('backend.admin.blog_category.edit_blog_category',compact('blogcategory'));
    }//End Method
    public function UpdateBlog(Request $request){
        $category_id = $request->category_id;
        BlogCtegory::find( $category_id)->update([
           'blog_category_name' => $request->blog_category_name,
           'blog_categor_slug_name' => strtolower(str_replace('','-',$request->blog_category_name))
            ]

        );
        return view('backend.admin.blog_category.all_blog_category');
    }//End Method
    public function DeleteBlog(Request $request,$id){
        BlogCtegory::find($id)->delete();
        return view('backend.admin.blog_category.all_blog_category');
    }//End Method

        //******************Post Methods************************//
        public function AllPost(){
            $posts = Post::latest()->get();
            $blogcategories = BlogCtegory::latest()->get();
            return view('backend.admin.post.all_post',compact('blogcategories','posts'));
        }//End Method
        public function AddPost(){
            $blogcategories = BlogCtegory::latest()->get();
            return view('backend.admin.post.add_post',compact('blogcategories'));
        }//End Method
        public function StorePost(Request $request)
        {

                $image = $request->file('post_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(370,246)->save('upload/post/'.$name_gen);
                $save_url = 'upload/post/'.$name_gen;

                Post::insert([
                    'blogcat_id' =>$request->blogcat_id,
                    'post_title'=>$request->post_title,
                    'post_slug' =>strtolower(str_replace('','-',$request->post_title)),
                    'post_description'=>$request->post_description,
                    'post_auther'=>$request->post_auther,
                    'post_tag'=>$request->post_tag,
                    'post_image' => $save_url,
                    'created_at' => Carbon::now(),

                ]);
                return redirect()->route('admin.all.post');
            }
            public function EditPost(Request $request,$id){
                $blogcategories = BlogCtegory::latest()->get();
                $post =Post::find($id);
                return view('backend.admin.post.edit_post',compact('blogcategories','post'));
            }//End Method
            public function UpdatePost(Request $request){

                $post_id = $request->post_id;

                if ($request->file('post_image')) {

                    $image = $request->file('post_image');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(370,246)->save('upload/post/'.$name_gen);
                    $save_url = 'upload/post/'.$name_gen;

                    Post::find($post_id)->update([
                        'blogcat_id' =>$request->blogcat_id,
                        'post_title'=>$request->post_title,
                        'post_slug' =>strtolower(str_replace('','-',$request->post_title)),
                        'post_description'=>$request->post_description,
                        'post_auther'=>$request->post_auther,
                        'post_tag'=>$request->post_tag,
                        'post_image' => $save_url,

                    ]);
                    return redirect()->route('admin.all.post');

                } else {

                    Post::find($post_id)->update([
                        'blogcat_id' =>$request->blogcat_id,
                        'post_title'=>$request->post_title,
                        'post_slug' =>strtolower(str_replace('','-',$request->post_title)),
                        'post_description'=>$request->post_description,
                        'post_auther'=>$request->post_auther,
                        'post_tag'=>$request->post_tag,
                    ]);
                    return redirect()->route('admin.all.post');

                } // end else

            }// End Method
            public function DeletePost(Request $request,$id){
                $post =Post::find($id);
                $image = $post->post_image;
                unlink($image);
                Post::find($id)->delete();
                return redirect()->route('admin.all.post');
            }//End Method

               //******************Comment Methods************************//
        public function AllComment(){
            $posts = Post::latest()->get();
            $blogcategories = BlogCtegory::latest()->get();
            $comments = Comment::latest()->get();
            return view('backend.admin.comment.all_comment',compact('blogcategories','posts','comments' ));
        }//End Method
        public function AddComment(){
            $posts = Post::latest()->get();
            $blogcategories = BlogCtegory::latest()->get();
            return view('backend.admin.comment.add_comment',compact('blogcategories','posts'));
        }//End Method
        public function StoreComment(Request $request)
        {

            Comment::insert([
                    'post_id' =>$request->post_id,
                    'publicher_name'=>$request->publicher_name,
                    'publicher_email' =>$request->publicher_email ,
                    'comment_content'=>$request->comment_content,

                ]);
                return redirect()->route('admin.all.comment');
            }
            public function EditComment(Request $request,$id){
                $blogcategories = BlogCtegory::latest()->get();
                $posts = Post::latest()->get();
                $comment =Comment::find($id);
                return view('backend.admin.comment.edit_comment',compact('blogcategories','post','comment'));
            }//End Method
            public function UpdateComment(Request $request){

                $comment_id = $request->comment_id;

                Comment::find($comment_id)->update([
                    'post_id' => $request->post_id,
                    'publicher_name'=>$request->publicher_name,
                    'publicher_email' =>$request->publicher_email ,
                    'comment_content'=>$request->comment_content,

                ]);
                return redirect()->route('admin.all.comment');

            }// End Method
            public function DeleteComment(Request $request,$id){
                Comment::find($id)->delete();
                return redirect()->route('admin.all.comment');
            }//End Method
}
