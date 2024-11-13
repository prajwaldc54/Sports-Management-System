<?php

namespace App\Http\Controllers;

use App\user_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class UserproductController extends Controller
{



    public function adduserproduct(Request $request)
    {
        $product = new user_product();

        $filename = Input::file('proimage')->getClientOriginalName();//filename of the file
        $imagename = "sport_" . time() . "_" . date('y') . "_" . date('m') . "_" . date('d')
            . "_" . $filename;//remaining file name
        Input::file('proimage')->move('UserProductImage', $imagename);//will be upload into the uploads file under public
        $product->userid =  Input::get('user_id');
        $product->product_name = Input::get('itemname');
        $product->retail_price = Input::get('price');
        $product->color = Input::get('color');
        $product->sport = Input::get('sports');
        $product->brand = Input::get('brand');
        $product->accessories = Input::get('accessories');
        $product->Store_name = Input::get('store_name');
        $product->quantity = Input::get('quantity');
        $product->picture = $imagename;
        $product->save();
        $request->session()->flash('Success','Product added successfully');
        return view('User/addnewproduct');
    }

    public function testselect()
    {
        $data = DB::table('user_products')->get()->where('productid',2);
        foreach ($data as $p)
        {
            $result= $p->product_name;
        }
        return $result;
    }

    public function productstatus($userid)
    {
        $data = DB::table('user_products')->where('userid',$userid)->get();
        return view('User/productstatus', ['userproduct' => $data]);
    }

    public function adminproductverify()
    {
    $data = DB::table('user_products')->get();
    return view('adminuserproductverify', ['userproduct' => $data]);
    }

    public function edituserproduct(Request $request)
    {
        $proid=Input::get('productid');
//        dd(input::has('approve'));    to check whether check box is working

        $approve= Input::has('approve')? true : false;
            $recieve=Input::has('recieve')? true : false;
                $stock=Input::has('stock')? true : false;
//        dd($request->all());
        DB::table('user_products')->where('productid',$proid)->update(['approved'=>$approve,
    'recieved'=>$recieve,'stocked'=>$stock]);
        $request->session()->flash('Success','Updated successfully');
       return redirect('adminuserproductverify');
    }

    public function userproductview()
    {
        $data = DB::table('user_products')->get();

        return view('/User/userproductview', ['product' => $data]);
    }

    public function userproductid($id)
    {
        $data = DB::table('user_products')->get()->where('productid', $id);
        return view('/User/singleuserproductview', ['userproduct' => $data]);
    }

    public function deleteuserproduct(Request $request)
    {
        $pid=Input::get('productid');
        $userid=Input::get('userid');
        DB::table('user_products')->where ('productid',$pid)->delete();
        $request->session()->flash('Success','Deleted successfully');
        return redirect('/productstatus/'.$userid);
    }
}
