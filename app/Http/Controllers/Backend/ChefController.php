<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chef;
use Intervention\Image\Facades\Image;


class ChefController extends Controller
{
    public function AllChef(){
        $chefs = Chef::latest()->get();
        return view('backend.admin.chef.all_chef',compact('chefs'));
    }//End Method
    public function AddChef(){
        return view('backend.admin.chef.add_chef');
    }//End Method
    public function StoreChef(Request $request){

            $image = $request->file('chef_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,246)->save('upload/chef/'.$name_gen);
            $save_url = 'upload/chef/'.$name_gen;

            Chef::insert([
                'chef_name'=>$request->chef_name,
                'chef_position' =>$request->chef_position,
                'chef_info'=>$request->chef_info,
                'chef_image' => $save_url,

            ]);
            return redirect()->route('admin.all.chef');
    }//End Method
    public function EditChef(Request $request,$id){
        $chef = Chef::find($id);
        return view('backend.admin.chef.edit_chef',compact('chef'));
    }//End Method
    public function UpdateChef(Request $request){
        $chef_id = $request->chef_id;
        if ($request->file('chef_image')) {

            $image = $request->file('chef_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,246)->save('upload/chef/'.$name_gen);
            $save_url = 'upload/chef/'.$name_gen;

            Chef::find($chef_id)->update([
                'chef_name'=>$request->chef_name,
                // 'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
                'chef_position' =>$request->chef_position,
                'chef_info'=>$request->chef_info,
                'chef_image' => $save_url,

            ]);

            return redirect()->route('admin.all.chef');

        } else {

            Chef::find($chef_id)->update([
                'chef_name'=>$request->chef_name,
                // 'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
                'chef_position' =>$request->chef_position,
                'chef_info'=>$request->chef_info,

            ]);

            return redirect()->route('admin.all.chef');

        } // end else
    }//End Method
    public function DeleteChef(Request $request,$id){
       Chef::find($id)->delete();
        return view('backend.admin.chef.all_chef');
    }//End Method

}
