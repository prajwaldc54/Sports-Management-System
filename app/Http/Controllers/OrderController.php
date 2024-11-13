<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function addorder(Request $request)
    {
        $order= new order();

        $order->product_id=Input::get('productid');
        $order->user_id=Input::get('userid');
        $order->Size=Input::get('size');
        $order->Quantity=Input::get('quantity');
        $order->Delivery_address=Input::get('address');
        $order->save();
        $request->session()->flash('Success','ordered send successfully');
        return redirect('viewproductdetail');
    }

    public function userproductorder(Request $request)
    {
        $order= new order();

        $order->userproduct_id=Input::get('productid');
        $order->user_id=Input::get('userid');
        $order->Size=Input::get('size');
        $order->Quantity=Input::get('quantity');
        $order->Delivery_address=Input::get('address');
        $order->save();
        $request->session()->flash('Success','Ordered successfully');
        return redirect('userproductview');
    }

    public function selectorder(Request $request,$userid)
    {
        $data = DB::table('orders')
            ->join('users','users.id','=','orders.user_id')
            ->join('products','products.proid','=','orders.product_id')
            ->where ('orders.user_id','=',$userid)
            ->get();

        return view('User/orderdetail', ['order' => $data]);
    }

    public function testselect()
    {
        $data = DB::table('orders')
        ->join('products','products.proid','=','orders.product_id')
        ->where ('orders.order_id','=','2')->get();
        foreach ($data as $p)
        {
            $result= $p->item_name;
        }
        return $result;
    }

//    public function selectorder(Request $request)
//    {
//        $data = DB::table('orders')
//            ->join('registers','registers.regid','=','orders.user_id')
//            ->join('products','products.proid','=','orders.product_id')
////            ->join('user_products','user_products.productid','=','orders.userproduct_id')
//            ->where ('orders.user_id','=','2')
//            ->select('registers.first_name','products.item_name','products.item_price','products.color'
//                ,'products.sport','products.brand','products.accessories','products.supplier','products.gender'
//                ,'products.picture','orders.Quantity','orders.Size','orders.order_id','orders.user_id','orders.product_id',
//                'user_products.product_name','user_products.retail_price','user_products.color'
//                ,'user_products.sport','user_products.brand','user_products.accessories','user_products.Store_name'
//                ,'user_products.picture')
//            ->get();
//     print_r($data);
//        return view('User/orderdetail', ['order' => $data]);
//    }


   public function selectuserproductorder(Request $request,$userid)
   { $data = DB::table('orders')
       ->join('user_products','orders.userproduct_id','=','user_products.productid')
       ->join('users','users.id','=','orders.user_id')
       ->where ('orders.user_id','=',$userid)
       ->get();

       return view('User/userproductorderdetail', ['order' => $data]);
   }

    public function selectorderid($id)
    {
        $data = DB::table('orders')
            ->join('products','products.proid','=','orders.product_id')
            ->where('orders.order_id', $id)
            ->select('orders.Size','products.proid','orders.Quantity','products.item_name',
                'products.item_price','products.color'
                ,'products.sport','products.brand','products.accessories','products.supplier',
                'products.supplier','products.gender'
                ,'products.picture','orders.order_id','orders.Delivery_address')
            ->get();

            return view('User/updateorderproduct', ['updateproduct' => $data]);
    }

    public function deleteuserproductorder(Request $request)
    {
        $ordid=input::get('ordid');
        $userid=input::get('userid');
        DB::table('orders')->where ('order_id',$ordid)->delete();
        $request->session()->flash('Success','Deleted successfully');
        return redirect('/userproductorderdetail/'.$userid);
    }

    public function deleteorder(Request $request)
    {
        $ordid=input::get('ordid');
        $userid=input::get('userid');
        DB::table('orders')->where ('order_id',$ordid)->delete();
        $request->session()->flash('Success','Deleted successfully');
        return redirect('/orderdetail/'.$userid);
    }

    public function updateorder(Request $request)
    {
        $size=Input::get('size');
        $quantity=Input::get('quantity');
        $address=Input::get('address');
        $orderid=Input::get('orderid');

        DB::table('orders')->where('order_id',$orderid)->update(['Size'=>$size,'Quantity'=>$quantity,
            'Delivery_address'=>$address]);
        $request->session()->flash('Success','Updated successfully');
        return redirect('/selectorder/'.$orderid);
    }

    public function adminorderverify(Request $request)
    { $data = DB::table('orders')
        ->join('products','products.proid','=','orders.product_id')
        ->join('users','users.id','=','orders.user_id')
        ->get();
        return view('orderverify', ['order' => $data]);
    }

    public function userproductorderverify(Request $request)
    { $data = DB::table('orders')
        ->join('user_products','orders.userproduct_id','=','user_products.productid')
        ->join('users','users.id','=','orders.user_id')
        ->get();
        return view('userproductorderverify', ['order' => $data]);
    }

    public function orderverifyupdate(Request $request)
    {
        $orderid=Input::get('orderid');

        $deliver= Input::has('deliver')? true : false;

        DB::table('orders')->where('order_id',$orderid)->update(['Delivered'=>$deliver]);
        $request->session()->flash('Success','Delivered Product');
        return redirect('orderverify');
    }

    public function userproductorderupdate(Request $request)
    {
        $orderid=Input::get('orderid');

        $deliver= Input::has('deliver')? true : false;

        DB::table('orders')->where('order_id',$orderid)->update(['Delivered'=>$deliver]);
        $request->session()->flash('Success','Delivered successfully');
        return redirect('userproductorderverify');
    }
}
