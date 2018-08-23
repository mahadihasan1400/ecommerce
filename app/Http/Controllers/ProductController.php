<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProductInfo()
    {
        //multiple row = get();
        //single row = first();
        $catgeories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', [
            'categories' => $catgeories,
            'brands' => $brands,
        ]);
    }


    protected function productInfoValidation($request)
    {
        ProductController::validate($request, [
            'category_id' => 'required',
            'brand_id' => 'required',
            'product_name' => 'required|max:20',
            'product_price' => 'required',
            'product_qantity' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'product_image' => 'required | mimes:jpeg,jpg,png|max:10240',
            'publication_status' => 'required'
        ]);
    }

    protected function productImageUpload($request)
    {

        $productImage = $request->file('product_image');
        $fileType = $productImage->getClientOriginalExtension();
        $imageName = $productImage->getClientOriginalName();
        //$imageName = $request -> product_name . '.' . $fileType;
        $directory = 'product-images/';
        $imageUrl = $directory . $imageName;
        if (file_exists($imageUrl)) {
            return 0;
        } else {
            // raw process

            //$productImage->move($directory, $imageName);

            //intervention process
            Image::make($productImage)->resize(200, 200)->save($imageUrl);
            return $imageUrl;
        }
    }

    public function saveProductBasicInfo($request, $imageData)
    {
        if ($imageData === 0) {
            return 'failed';
        } else {
            $product = new Product();
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->product_name = $request->product_name;
            $product->product_price = $request->product_price;
            $product->product_qantity = $request->product_qantity;
            $product->short_description = $request->short_description;
            $product->long_description = $request->long_description;
            $product->publication_status = $request->publication_status;
            $product->product_image = $imageData;
            $product->save();
            return 'success';
        }
    }


    public function saveProductInfo(Request $request)
    {
        $this->productInfoValidation($request);
        $imageData = $this->productImageUpload($request);
        $message = $this->saveProductBasicInfo($request, $imageData);
        if ($message === 'failed') {
            return 'Image already uploaded choose another one';
        } else {
            return redirect('/product/add')->with('message', 'Product info save successfully');
        }

    }

    public function manageProductInfo()
    {

        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();
        return view('admin.product.manage-product', [
            'products' => $products
        ]);
    }

    public function unpublishedProductInfo($id)
    {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        return redirect('/product/manage');
    }

    public function publishedProductInfo($id)
    {
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();
        return redirect('/product/manage');
    }

    public function editProductInfo($id)
    {
        $product = Product::find($id);
        $catgeories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.edit-product', [
            'product' => $product,
            'categories' => $catgeories,
            'brands' => $brands,
        ]);
    }

    public function productBasicInfoUpdate($product, $request, $imageData = null)
    {
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_qantity = $request->product_qantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        if ($imageData) {
            $product->product_image = $imageData;
        }
        $product->publication_status = $request->publication_status;
        $product->save();
    }

    public function updateProductInfo(Request $request)
    {
        $productImage = $request->file('product_image');
        $product = Product::find($request->product_id);

        if ($productImage) {
            $imageData = $this->productImageUpload($request);
            if ($imageData === 0) {
                return "Image File already exist";
            } else {
                unlink($product->product_image);
                $this->productBasicInfoUpdate($product, $request, $imageData);
            }
        } else {
          $this->productBasicInfoUpdate($product, $request);
        }
        return redirect('/product/manage')->with('message', 'Product update successfully');

    }


    public function deleteProductInfo($id){
        $product = Product::find($id);
        unlink($product -> product_image);
        $product -> delete();
        return redirect('/product/manage')->with('message', 'Product delete successfully');
    }

}
