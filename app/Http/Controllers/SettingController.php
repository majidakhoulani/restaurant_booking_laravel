<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function AllSetting(){
        $setting = Setting::latest()->get();
        return view('backend.admin.setting.all_setting',compact('setting'));
    }//End Method
    public function AddSetting(){
        return view('backend.admin.setting.add_setting');
    }//End Method
    public function StoreSetting(Request $request){
        Setting::insert([
           'name' => $request->website_name,
           'phone_no' => $request->phone,
           'email' => $request->email,
           'day' => $request->day,
           'opening_time' => $request->open,
           'closing_time' => $request->close,
           ]

        );
        return view('backend.admin.setting.all_setting');
    }//End Method
}
