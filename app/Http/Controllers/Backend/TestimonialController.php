<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    public function AllTestimonial(){
        $testimonials = Testimonial::latest()->get();
        return view('backend.admin.testimonial.all_testimonial',compact('testimonials'));
    }//End Method
    public function AddTestimonial(){
        return view('backend.admin.testimonial.add_testimonial');
    }//End Method
    public function StoreTestimonial(Request $request){

            $image = $request->file('testimonial_tweeter_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,246)->save('upload/testimonial/'.$name_gen);
            $save_url = 'upload/testimonial/'.$name_gen;

            Testimonial::insert([
                'testimonial_tweet'=>$request->testimonial_tweet,
                'testimonial_tweeter_name' =>$request->testimonial_tweeter_name,
                'testimonial_tweeter_position'=>$request->testimonial_tweeter_position,
                'testimonial_tweeter_image' => $save_url,

            ]);
            return redirect()->route('admin.all.testimonial');
    }//End Method
    public function EditTestimonial(Request $request,$id){
        $testimonial= Testimonial::find($id);
        return view('backend.admin.testimonial.edit_testimonial',compact('testimonial'));
    }//End Method
    public function UpdateTestimonial(Request $request){
        $testimonial_id = $request->testimonial_id;
        if ($request->file('testimonial_tweeter_image')) {

            $image = $request->file('testimonial_tweeter_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,246)->save('upload/testimonial/'.$name_gen);
            $save_url = 'upload/testimonial/'.$name_gen;

            Testimonial::insert([
                'testimonial_tweet'=>$request->testimonial_tweet,
                'testimonial_tweeter_name' =>$request->testimonial_tweeter_name,
                'testimonial_tweeter_position'=>$request->testimonial_tweeter_position,
                'testimonial_tweeter_image' => $save_url,

            ]);
            return redirect()->route('admin.all.testimonial');

        } else {

            Testimonial::insert([
                'testimonial_tweet'=>$request->testimonial_tweet,
                'testimonial_tweeter_name' =>$request->testimonial_tweeter_name,
                'testimonial_tweeter_position'=>$request->testimonial_tweeter_position,
            ]);
            return redirect()->route('admin.all.testimonial');

        } // end else
    }//End Method
    public function DeleteTestimonial(Request $request,$id){
        Testimonial::find($id)->delete();
        return view('backend.admin.testimonial.all_testimonial');
    }//End Method

}
