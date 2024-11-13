<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{
    //
    public function addmessage(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
            ]);

        $contact= new contact();
        $contact->name=Input::get('name');
        $contact->email= Input::get('email');
        $contact->subject=Input::get('subject');
        $contact->message=Input::get('message');
        $contact->save();
        $request->session()->flash('Success','Message send successfully');
        return redirect('/contact');
    }

    public function contactdetail(Request $request)
    {
      $data=DB::table('contacts')->get();
        return view('contactdetail', ['contact' => $data]);
    }


    public function deletecontact(Request $request,$mid)
    {
        DB::table('contacts')->where ('mid',$mid)->delete();
        $request->session()->flash('Success','Deleted successfully');
        return redirect('/contactdetail');
    }

    public function viewcontactdetail($mid)
    {
        $data=DB::table('contacts')
            ->where('mid',$mid)
            ->get();
        return view('viewcontactdetail', ['contact' => $data]);
    }

    public function testselect()
    {
        $data =   $data=DB::table('contacts')
            ->where('mid',1)
            ->get();
        foreach ($data as $p)
        {
            $result= $p->name;
        }
        return $result;
    }
}




