<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(){
        $products = Product::where('publication_status', 1)
            ->orderBy('id','DESC')
            ->take(4)
            ->get();
        return view('front-end.home.home',[
            'products' => $products
        ]);
    }

    public function categoryProduct($id){

        $categoryProducts = Product::where('category_id', $id)
            ->where('publication_status' ,1)
            ->get();

        return view('front-end.category.category-content',[
            'categoryProducts' => $categoryProducts
        ]);
    }

    public function mailUs(){
        return view('front-end.mail-us.mail-us');
    }

    public function productDetils($id){
        $product = Product::find($id);
        return view('front-end.product.product-details',[
            'product' => $product
        ]);
    }


    public function brandProduct($id){
        $brandProducts = Product::where('brand_id', $id)
            ->where('publication_status' ,1)
            ->get();
        return view('front-end.brand.brand-content',[
            'brandProducts' => $brandProducts
        ]);
    }
}
