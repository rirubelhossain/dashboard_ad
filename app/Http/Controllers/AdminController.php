<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Support\Facades\DB;
use DB ;
class AdminController extends Controller
{
    public function adm()
    {
        return (view('layouts.base'));
    }
    public function form()
    {
        return (view('layouts.forms'));
    }
    //customer data post
    public function customer_data_post(Request $request)
    {
        DB::table('customers')->insert([
            'name' =>$request->name ,
            'title' =>$request->title ,
            'brandname' =>$request->brandname,
            'brandtype' =>$request->brandtype,
            'email' =>$request->email,
            'mobile' =>$request->mobile,
            'address' =>$request->address,
            'description' =>$request->description,
            'filename' =>$request->filename,
            'filename2' =>$request->filename2
        ]);

        echo "Data has been inserted!";

    }
    public function customer_insert(Request $request)
    {
        DB::table('customer_info')->insert([
            'name' =>$request->name ,
            'title' =>$request->title ,
            'email' =>$request->email ,
            'address' =>$request->address,
            'description' =>$request->description
        ]);
    }
    public function subcate(Request $request)
    {
        DB::table('subcates')->insert([
            'name' =>$request->name ,
            'position' =>$request->position ,
            'image' =>$request->image
        ]);
        echo "Data has been inserted!";
    }

}
