<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request){
        $title = $request->title;
        $description = $request->description;
        $cost = $request->cost;
        $path = $request->file('img')->store('public/img');
        $path = str_replace('public', 'storage', $path);
        $product = new Good();
        $product->title = $title;
        $product->description = $description;
        $product->cost = $cost;
        $product->img = $path;
        $product->save();
        return redirect()->intended('/');
    }
    public function showProduct(){
        $products = Good::all();
        return view('pages.shop', ['products'=>$products]);
    }
    public function showSingleProduct(Request $request){
        $id = $request->id;
        $product = Good::where('id', $id)->first();
        return view('pages.shopSingle', ['product'=>$product]);
    }
}
