<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function addData(Request $req)
    {
        $product = new Product;

        $req->validate([
            'p_name' => '',
            'p_code' => '',
            'p_desc' => '',
            'p_category' => '',
            'p_price' => '',
            'p_quantity' => '',
            'p_stock_date' => '',
            'p_rating' => '',
            'p_purchased' => ''
        ]);

        $product->p_name = $req->p_name;
        $product->p_code = $req->p_code;
        $product->p_desc = $req->p_desc;
        $product->p_category = $req->p_category;
        $product->p_price = $req->p_price;
        $product->p_quantity = $req->p_quantity;
        $product->p_stock_date = $req->p_stock_date;
        $product->p_rating = $req->p_rating;
        $product->p_purchased = $req->p_purchased;
        $product->file_path=$req->file('file')->store('products');
        $product->save();
        $data = $req->p_name;
        //$req->session()->flash('product',$data);
        return $product;
    }
    function showData()
    {
        //$data = Product::all();
        //return view('product',['collection'=>$data]);
        return Product::all();
    }
    function showProduct($id)
    {
        $data = Product::find($id);
        return $data;
    }
    function showEdit($id)
    {
        $data = Product::find($id);
        return $data;
    }



    function updateProduct(Request $req, $id)
    {
        $product = Product::find($id);

        $req->validate([
            'p_name' => '',
            'p_code' => '',
            'p_desc' => '',
            'p_category' => '',
            'p_price' => '',
            'p_quantity' => '',
            'p_stock_date' => '',
            'p_rating' => '',
            'p_purchased' => ''


        ]);
        $product->p_name = $req->input('p_name');
        $product->p_code = $req->input('p_code');
        $product->p_desc = $req->input('p_desc');
        $product->p_category = $req->input('p_category');
        $product->p_price = $req->input('p_price');
        $product->p_quantity = $req->input('p_quantity');
        $product->p_stock_date = $req->input('p_stock_date');
        $product->p_rating = $req->input('p_rating');
        $product->p_purchased = $req->input('p_purchased');
        if($req->file('file'))
        {
            $product->file_path=$req->file('file')->store('products');
        }
        $product->created_at = $product->created_at;
        $product->updated_at = date('Y-m-d H:i:s');
        $product->save();
        return $product;
       // return $req->input();

    }

    function delete($id)
    {
        $data = Product::where('id',$id)->delete();
        if($data)
        {
            return ["result"=>"Product has been delete"];
        }
        else
        {
            return ["result"=>"Operation failed"];
        }
        return redirect ('product');
    }

    function search($key)
    {
        $data = Product::where('p_name', 'LIKE', "%$key%")
        ->orWhere('p_price', 'LIKE', "%$key%")
        ->orWhere('p_category', 'LIKE', "%$key%")
        ->orWhere('p_code', 'LIKE', "%$key%")
        ->get();
        //return $data;
        return response()->json([
            'status' => 200,
            'search' => $data
        ]);
    }


}
/*

->orWhere('id', 'LIKE', "%$key%")*/
