<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
public function adduser(Request $request)
{
    $this->validate($request,[
        'firstname'=>'required',
        'lastname'=>'required',
        'phone'=>'required',
        'email'=>'required|unique:users',
    ]);
        $user= new User();

        $user->name=Input::get('firstname');
        $user->last_name=Input::get('lastname');
        $user->phone=Input::get('phone');
        $user->address=Input::get('address');
         $user->gender=Input::get('gender');
        $user->email=Input::get('email');
        $user->password=Hash::make(Input::get('password'));
        $user->save();
        $request->session()->flash('Success','Account Created As '.$user->name=Input::get('firstname'));
         return redirect('/');
}

    public function myprofile($id)
    {
        $data = DB::table('users')->get()->where('id', $id);
        return view('/User/myprofile', ['userdetail' => $data]);
    }

    public function changeprofile($id)
    {
        $data = DB::table('users')->get()->where('id', $id);
        return view('/User/changeprofile', ['userdetail' => $data]);
    }

    public function updateprofile(Request $request)
    {
        $first_name=Input::get('firstname');
         $last_name=Input::get('lastname');
        $phone=Input::get('phone');
        $address=Input::get('address');
      $gender=Input::get('gender');
       $email=Input::get('email');
       $userid=Input::get('userid');
        $password=Hash::make(Input::get('password'));

        DB::table('users')->where('id',$userid)->update(['name'=>$first_name,'last_name'=>$last_name,
            'phone'=>$phone,'address'=>$address,'gender'=>$gender,'email'=>$email,'password'=>$password]);
        $request->session()->flash('Success','User profile changed by '.$first_name);
        return redirect('changeprofile/'.$userid);
    }
}
