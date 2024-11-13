<?php

namespace App\Http\Controllers;

use App\addtocart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    public function addtocart(Request $request)

    {
        $cart= new addtocart();

        $cart->product_id= Input::get('productid');
        $cart->user_id= Input::get('userid');
        $cart->save();
        $request->session()->flash('Success','Added to cart');
        return redirect('viewproductdetail');
    }

    public function selectcart(Request $request,$userid)
    {
        $data = DB::table('addtocarts')
            ->join('users','users.id','=','addtocarts.user_id')
            ->join('products','products.proid','=','addtocarts.product_id')
            ->where ('addtocarts.user_id','=',$userid)
            ->get();
//     print_r($data);
        return view('User/wishlist', ['cart' => $data]);
    }

    public function addtocartproductview(Request $request,$pid){
        $data = DB::table('products')
            ->get()->where ('proid',$pid);
        return view('/User/singleproductview', ['product' => $data]);
    }

    public function deletecart(Request $request)
    {
        $cid=Input::get('cartid');
        $userid=Input::get('userid');
        DB::table('addtocarts')->where ('cart_id',$cid)->delete();
        $request->session()->flash('Success','Deleted Successfully');
        return redirect('wishlist/'.$userid);
    }
}
