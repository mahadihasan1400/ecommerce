<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');

    }

    public function manageCategory()
    {
        $categories = Category::all();
        return view('admin.category.manage-category', [
            'categories' => $categories
        ]);
    }

    public function saveCategoryInfo(Request $request)
    {
//Data save Eloquent ORM process-1
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

//Data save Eloquent ORM process-2
//        Category::create($request->all());

//Data save Query Builder process

//        DB::table('categories')->insert([
//            'category_name' => $request->category_name,
//            'category_description' => $request->category_description,
//            'publication_status' => $request->publication_status,
//        ]);

        return redirect('/category/add')->with('message', 'Category info save successfully');
//        return redirect(route('add-category'))->with('message','Category info save successfully');

    }


    public function unpublishedCategoryInfo($id)
    {
        $catgeory = Category::find($id);
        $catgeory->publication_status = 0;
        $catgeory->save();
        return redirect('/category/manage')->with('message', 'Category info unpublished');
    }


    public function publishedCategoryInfo($id)
    {
        $catgeory = Category::find($id);
        $catgeory->publication_status = 1;
        $catgeory->save();
        return redirect('/category/manage')->with('message', 'Category info published');
    }

    public function editCategoryInfo($id)
    {
        $catgeory = Category::find($id);
        return view('admin.category.edit-category', [
            'category' => $catgeory
        ]);
    }

    public function updateCategoryInfo(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->update();
        return redirect('/category/manage')->with('message', 'Category info update successfully');
    }

    public function deleteCategoryInfo($id){
        $category = Category::find($id);
        $category -> delete();
        return redirect('/category/manage')->with('message', 'Category info delete successfully');
    }
}
