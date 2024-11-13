<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addproduct(Request $request)
    {
        $product = new product();

        $filename = Input::file('proimage')->getClientOriginalName();//filename of the file
        $imagename = "sport_" . time() . "_" . date('y') . "_" . date('m') . "_" . date('d') . "_" .
            $filename;//remaining file name
        Input::file('proimage')->move('Sport_Gallery', $imagename);//will be upload into the uploads file under public

        $product->item_name = Input::get('itemname');
        $product->item_price = Input::get('price');
        $product->color = Input::get('color');
        $product->sport = Input::get('sports');
        $product->brand = Input::get('brand');
        $product->accessories = Input::get('accessories');
        $product->supplier = Input::get('supplier');
        $product->gender = Input::get('gender');
        $product->description = Input::get('description');
        $product->picture = $imagename;
        $product->save();
        $request->session()->flash('Success','Product added successfully');
        return redirect('/product');

    }
//    public function updatestaff(Request $request, $id)
//    {
////        dd($request->all());
//        $data = [];
//        $data['row'] = $this->model->find($id);
//
//        if ($request->hasFile('image')) {
//            $file = $request->file('image');
//            $image = time() . '.' . $file->getClientOriginalName();
//            $file->move($this->folder_path , $image);
//
//            //removing old image
//            if ($data['row']->image)
//                unlink($this->folder_path. DIRECTORY_SEPARATOR. $data['row']->image);
//            //for new image name
//            $data['row']->image = $image;
//
//        }
//
//
//        $data['row']->update
//        ([
//            'fname' => $request->get('firstname'),
//            'lname' => $request->get('lastname'),
//            'mobile' => $request->get('mobile'),
//            'address' => $request->get('address'),
//            'image' => $data['row']->image
//
//        ]);
//        $request->session()->flash('success_message', 'Staff details updated successfully');
//        return redirect()->route('admin.viewstaff');
//    }
    public function testselect()
    {
        $data = DB::table('products')->get()->where('proid',1);
        foreach ($data as $p)
        {
            $result= $p->item_name;
        }
        return $result;
    }

    public function selectproduct()
    {
        $data = DB::table('products')->get();
        return view('viewproduct', ['product' => $data]);
    }



    public function viewproductdetail()
    {
        $data = DB::table('products')->get();
        return view('/User/viewproductdetail', ['product' => $data]);
    }

    public function selectid($id)
    {
        $data = DB::table('products')->get()->where('proid', $id);
        return view('updateproduct', ['updatepro' => $data]);
    }
//        $filename = Input::file('proimage')->getClientOriginalName();//filename of the file
//        $imagename = "sport_" . time() . "_" . date('y') . "_" . date('m') . "_" . date('d') . "_" .
//            $filename;//remaining file name ]
////        if ($data['row']->proimage)
////            unlink()
//        Input::file('proimage')->move('Sport_Gallery', $imagename);//will be upload into the uploads file under public
    public function productselect($id)
    {
        $data = DB::table('products')->get()->where('proid', $id);
        return view('/User/singleproductview', ['product' => $data]);
    }
    //        $data = [];
//        $data['row'] = product::find($id);
    public function editproduct(Request $request)
    {

        $pname = Input::get('itemname');
        $pprice = Input::get('price');
        $color = Input::get('color');
        $sports = Input::get('sports');
        $brand = Input::get('brand');
        $acce = Input::get('accessories');
        $supp=Input::get('supplier');
        $gender=Input::get('gender');
        $desc = Input::get('description');
        $productid=Input::get('productid');

        DB::table('products')->where('proid',$productid)->update(['item_name'=>$pname,
            'item_price'=>$pprice,
            'color'=>$color,'sport'=>$sports,'brand'=>$brand,'accessories'=>$acce,'supplier'=>$supp,
            'gender'=>$gender,'description'=>$desc]);
        $request->session()->flash('Success','Product updated successfully');
        return redirect('/selectid/'.$productid);
    }

    public function deleteproduct(Request $request,$pid)
    {
        DB::table('products')->where ('proid',$pid)->delete();
        $request->session()->flash('Success','Product deleted successfully');
        return redirect('/viewproduct/');
    }

    public function searchproduct(Request $request)
    {
          $search = Input::get('search');
          $product = DB::table('products')
              ->where('item_name', 'like', '%' . $search . '%')
              ->orWhere('brand', 'like', '%' . $search . '%')
              ->orWhere('gender', 'like', '%' . $search . '%')
              ->orwhere('accessories', 'like', '%' . $search . '%')
              ->orwhere('sport', 'like',  '%' . $search . '%')
              ->orwhere('color', 'like',  '%' . $search . '%')
              ->paginate(5);
         return view('User/viewproductdetail', ['product' => $product]);
      }

      public function category($item)
      {
          $product = DB::table('products')
              ->where('gender', 'like',  $item . '%')
              ->orwhere('item_name', 'like', '%' . $item . '%')
              ->orwhere('accessories', 'like',  $item . '%')
              ->orwhere('sport', 'like',  $item . '%')
              ->orwhere('color', 'like',  $item . '%')
              ->paginate(5);
          return view('User/viewproductdetail', ['product' => $product]);
      }

    public function pricesearch()
    {
        $min = Input::get('Minimum');
        $max = Input::get('Maximum');

        $product = DB::table('products')
            ->whereBetween('item_price', [$min,$max ])
            ->paginate(5);
        return view('User/viewproductdetail', ['product' => $product]);
    }

        function fetch(Request $request){
        if($request->get('query'))
        {
            $search=$request->get('query');
            $product = DB::table('products')
              ->where('item_name', 'like', '%' . $search . '%')
              ->get();
            $output='<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($product as $row)
            {
                $output .='<li><a href="#">'.$row->item_name.'</a></li>';
            }
                $output .= '</ul>';
                echo $output;
        }
        }

}