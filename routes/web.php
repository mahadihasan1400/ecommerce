<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',[
   'uses' => 'EcommerceController@index',
   'as' => '/'
]);
Route::get('/category-product/{id}',[
    'uses' => 'EcommerceController@categoryProduct',
    'as' => 'category-product'
]);

Route::get('/mail-us',[
   'uses' => 'EcommerceController@mailUs',
   'as' => 'mail-us'
]);
Route::get('/product-details/{id}/{name}',[
    'uses' => 'EcommerceController@productDetils',
    'as' => 'product-details'
]);

Route::get('/brand-product/{id}',[
    'uses' => 'EcommerceController@brandProduct',
    'as' => 'brand-product'
]);

Route::post('/add-to-cart',[
    'uses' => 'CartController@addToCart',
    'as' => 'add-to-cart'
]);

Route::get('/show-cart',[
    'uses' => 'CartController@showCart',
    'as' => 'show-cart'
]);

Route::get('/delete-cart-item/{id}',[
    'uses' => 'CartController@deleteCart',
    'as' => 'delete-cart-item'
]);
Route::post('/update-cart',[
    'uses' => 'CartController@updateCart',
    'as' => 'update-cart'
]);
Route::get('/checkout',[
    'uses' => 'CheckoutController@index',
    'as' => 'checkout'
]);
//admin-category

Route::get('/category/add',[
    'uses' => 'CategoryController@addCategory',
    'as' => 'add-category'
]);

Route::get('/category/manage',[
    'uses' => 'CategoryController@manageCategory',
    'as' => 'manage-category'
]);
Route::post('/category/save',[
    'uses' => 'CategoryController@saveCategoryInfo',
    'as' => 'save-category-info'
]);

Route::get('/category/unpublished/{id}',[
    'uses' => 'CategoryController@unpublishedCategoryInfo',
    'as' => 'unpublished-category'
]);

Route::get('/category/published/{id}',[
    'uses' => 'CategoryController@publishedCategoryInfo',
    'as' => 'published-category'
]);
Route::get('/category/edit/{id}',[
    'uses' => 'CategoryController@editCategoryInfo',
    'as' => 'edit-category'
]);
Route::post('/category/update',[
    'uses' => 'CategoryController@updateCategoryInfo',
    'as' => 'update-category-info'
]);
Route::get('/category/delete/{id}',[
    'uses' => 'CategoryController@deleteCategoryInfo',
    'as' => 'delete-category-info'
]);

//admin-brand

Route::get('/brand/add',[
    'uses' => 'BrandController@addBrandInfo',
    'as' => 'add-brand'
]);
Route::get('/brand/manage',[
    'uses' => 'BrandController@manageBrandInfo',
    'as' => 'manage-brand'
]);
Route::post('/brand/save',[
    'uses' => 'BrandController@saveBrandInfo',
    'as' => 'save-brand-info'
]);
Route::get('/brand/unpublished/{id}',[
    'uses' => 'BrandController@unpublishedBrandInfo',
    'as' => 'unpublished-brand'
]);
Route::get('/brand/published/{id}',[
    'uses' => 'BrandController@publishedBrandInfo',
    'as' => 'published-brand'
]);
Route::get('/brand/edit/{id}',[
    'uses' => 'BrandController@editBrandInfo',
    'as' => 'edit-brand'
]);
Route::get('/brand/delete/{id}',[
    'uses' => 'BrandController@deleteBrandInfo',
    'as' => 'delete-brand-info'
]);
Route::post('/brand/update',[
    'uses' => 'BrandController@updateBrandInfo',
    'as' => 'update-brand-info'
]);
//admin-product

Route::get('/product/add',[
    'uses' => 'ProductController@addProductInfo',
    'as' => 'add-product'
]);
Route::get('/product/manage',[
    'uses' => 'ProductController@manageProductInfo',
    'as' => 'manage-product'
]);
Route::post('/product/save',[
    'uses' => 'ProductController@saveProductInfo',
    'as' => 'save-product-info'
]);
Route::get('/product/unpublished/{id}',[
    'uses' => 'ProductController@unpublishedProductInfo',
    'as' => 'unpublished-product'
]);
Route::get('/product/published/{id}',[
    'uses' => 'ProductController@publishedProductInfo',
    'as' => 'published-product'
]);
Route::get('/product/edit/{id}',[
    'uses' => 'ProductController@editProductInfo',
    'as' => 'edit-product'
]);
Route::get('/product/delete/{id}',[
    'uses' => 'ProductController@deleteProductInfo',
    'as' => 'delete-product-info'
]);
Route::post('/product/update',[
    'uses' => 'ProductController@updateProductInfo',
    'as' => 'update-product-info'
]);