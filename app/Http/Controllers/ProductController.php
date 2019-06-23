<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller
{

    public function offer(){
        $product = Product::orderby('created_at','desc')->get();

        return view('/layouts/product/index', compact('product'));
    }

    public function add(){
        return view('/layouts/product/product-add');
    }

    public function gode(Request $request){

//        dd($request);
        $product = Product::create([
            'models' => $request->input('models'),
            'cost' => $request->input('cost'),
            'wallet' => $request->input('wallet'),
            'diagonal' => $request->input('diagonal'),
            'processor' => $request->input('processor'),
            'videocard' => $request->input('videocard'),
            'memory' => $request->input('memory'),
            'kilk' => $request->input('kilk'),
            'information' => $request->input('information'),
//            'photo' => $request->input('photo'),
        ]);
        $product -> save();
        return redirect()->route('main');
    }

    public function delete($id){
        $product=Product::findorfail($id);
        $product->delete();
        return redirect()->route('product');
    }

    public function edit(Product $products){
//        dd($request);
//        $product = Product::get();
        return view('/layouts/product/product-edit', compact('products'));
    }

    public function update(Request $request,$id){
//        dd($request);
        $product=Product::findorfail($id);
        $product->update([
            'models' => $request->input('models'),
            'cost' => $request->input('cost'),
            'wallet' => $request->input('wallet'),
            'diagonal' => $request->input('diagonal'),
            'processor' => $request->input('processor'),
            'videocard' => $request->input('videocard'),
            'memory' => $request->input('memory'),
            'kilk' => $request->input('kilk'),
            'information' => $request->input('information'),
        ]);
        $product -> update();
        return redirect()->route('product');
    }

}
