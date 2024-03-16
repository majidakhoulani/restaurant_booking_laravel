<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Food;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('backend.admin.category.all_category',compact('categories'));
    }//End Method
    public function AddCategory(){
        return view('backend.admin.category.add_category');
    }//End Method
    public function StoreCategory(Request $request){
        Category::insert([
           'category_name' => $request->category_name,
           'category_slug_name' => strtolower(str_replace('','-',$request->category_name))
            ]

        );
        return view('backend.admin.category.all_category');
    }//End Method
    public function EditCategory(Request $request,$id){
        $category = Category::find($id);
        return view('backend.admin.category.edit_category',compact('category'));
    }//End Method
    public function UpdateCategory(Request $request){
        $category_id = $request->category_id;
        Category::find( $category_id)->update([
           'category_name' => $request->category_name,
           'category_slug_name' => strtolower(str_replace('','-',$request->category_name))
            ]

        );
        return view('backend.admin.category.all_category');
    }//End Method
    public function DeleteCategory(Request $request,$id){
       Category::find($id)->delete();
        return view('backend.admin.category.all_category');
    }//End Method

    //******************Food Methods************************/
    public function AllFood(){
        $foods = Food::latest()->get();
        $categories = Category::latest()->get();
        return view('backend.admin.food.all_food',compact('categories','foods'));
    }//End Method
    public function AddFood(){
        $categories = Category::latest()->get();
        return view('backend.admin.food.add_food',compact('categories'));
    }//End Method
    public function StoreFood(Request $request)
    {

            $image = $request->file('food_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,246)->save('upload/food/'.$name_gen);
            $save_url = 'upload/food/'.$name_gen;

            Food::insert([
                'cat_id' => $request->category_id,
                'food_name'=>$request->food_name,
                'food_description' =>$request->food_description,
                'price'=>$request->food_price,
                'food_image' => $save_url,

            ]);
            return redirect()->route('admin.all.food');
        }
        public function EditFood(Request $request,$id){
            $categories = Category::latest()->get();
            $food =Food::find($id);
            return view('backend.admin.food.edit_food',compact('categories','food'));
        }//End Method
        public function UpdateFood(Request $request){

            $food_id = $request->food_id;

            if ($request->file('food_image')) {

                $image = $request->file('food_image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(370,246)->save('upload/food/'.$name_gen);
                $save_url = 'upload/food/'.$name_gen;

                Food::find($food_id)->update([
                    'cat_id' => $request->category_id,
                    'food_name' => $request->food_name,
                    'food_description' => $request->food_description,
                    'price' => $request->food_price,
                    'food_image' => $save_url,

                ]);

                return redirect()->route('admin.all.food');

            } else {

                Food::find($food_id)->update([
                    'cat_id' => $request->category_id,
                    'food_name' => $request->food_name,
                    // 'post_slug' => strtolower(str_replace(' ','-',$request->post_title)),
                    'food_description' => $request->food_description,
                    'price' => $request->food_price,

                ]);

                return redirect()->route('admin.all.food');

            } // end else

        }// End Method
        public function DeleteFood(Request $request,$id){
            $food =Food::find($id);
            $image = $food->food_image;
            unlink($image);
            Food::find($id)->delete();
            return redirect()->route('admin.all.food');
        }//End Method
}

