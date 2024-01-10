<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\DB;

use Illuminate\Http\Request;

class Al_NOUR extends Controller
{


    public function index()
    {
      $show= DB::table('hero1')->get();
      return  view('show',compact('show'));

    }



    public function index1()
    {
      return  view('index');

    }




    public function edit($id)
    {
       $user_u=DB::table('hero1')->where('id',$id)->first();

          return view('edit',compact('user_u'));


    }



    public function delete($id)
    {
       $user_u=DB::table('hero1')->where('id',$id)->delete();
       return redirect()->route('show');

    }





 public function update(Request $request,$id)
 {

    DB::table('hero1')->where('id',$id)->update([
        'name'=>$request-> name,
        'age'=>$request->age,
        'addres'=>$request->addres,
        'day'=>$request->day,
        'hour'=>$request->hour,
        'date_time'=>$request->date_time

    ]);

        return redirect()->route('ADMIN');


 }


    public function create()
        {
            return view ('it');
        }

        public function admin()
        {
            return view ('admin');
        }

        public function insert(Request $request)
    {
        DB::table('hero1')->insert([
         'name'=>$request-> name,
         'age'=>$request->age,
         'addres'=>$request->addres,
         'day'=>$request->day,
         'hour'=>$request->hour,
         'date_time'=>$request->date_time
        ]);


           return response("تمت اضافة البيانات بنجاح");
    }

}
