<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class demo extends Controller
{
    public function adminlogin(Request $request){
        $uname=$request->uname;
        $password=$request->pswd;
        if(($uname=="admin")&&($password=="123456")){
            return view('adminhome');
        }
        else{
          echo "incorrect username and pasword";
        }


    }
    public function studregdata(Request $req){
        $name=$req->tname;
        $contact=$req->tcont;
        $email=$req->tmail;
        $uname=$req->tuname;
        $paswrd=$req->tpass;
        DB::table('studtable')->insert([
            'name'=>$name,
            'contact'=>$contact,
            'email'=>$email,
            'username'=>$uname,
            'password'=>$paswrd
        ]);
        return redirect('stud')->with('message','Registration successfull');
    }
    public function studentlogin(Request $req){
        $uname=$req->uname;
        $pasword=$req->pswd;
        $data=DB::table('studtable')->where('username',$uname)->first();
        if(is_null($data)){
            return redirect('studlog')->with('errormessage','incorrect username');
        }
        elseif(($data->username==$uname)&&($data->password==$pasword)){
            $req->session()->put('sid',$data->id);
            return redirect('st');

        }
        else{
            return redirect('studlog')->with('errormessage','incorrect password');
        }

    }
    public function homeview(){
        if(session()->has('sid')){
            $logid=session()->get('sid');
            $var=DB::table('studtable')->where('id',$logid)->first();
            return view('studhome',['user'=>$var]);
        }
        else{
            echo "please login account";
        }
    }
    public function logout(){
        session()->forget('sid');
        session()->flush();
        return redirect('log');
    }
    public function adminlogout(){
        return redirect('log');
    }
    public function updatedata($x){
        $data=DB::table('studtable')->where('id',$x)->first();
        return view('update',['arey'=>$data]);

    }
    public function updateprofile(Request $req,$a){
        $name1=$req->tname;
        $contact1=$req->tcont;
        $email1=$req->tmail;
        $uname1=$req->tuname;
        $pswd1=$req->tpass;
        DB::table('studtable')->where('id',$a)->update([
            'name'=>$name1,
            'contact'=>$contact1,
            'email'=>$email1,
            'username'=>$uname1,
            'password'=>$pswd1
        ]);
        return redirect('st');
    }
    public function goback(){
        return redirect('admin');
    }
    public function activestu(){
        $arg=DB::table('studtable')->get();
        return view('active',['user'=>$arg]);
    }
    public function activego(){
        return redirect('admin');
    }
    public function inactstu(){
        $var=DB::table('studtable')->get();
        return view('inactive',['data'=>$var]);
    }
    public function inactgo(){
        return redirect('admin');
    }

    public function disable(){

    }
}
