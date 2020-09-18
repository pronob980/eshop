<?php
route::get('/','EiserController@index')->name('/');
route::get('/category/{id}/{name}','EiserController@category')->name('category');
route::get('/product-details/{id}','EiserController@productDetails')->name('product-details');

route::post('/cart','CartController@addCart')->name('add-cart');
route::get('/cart','CartController@viewCart');
route::get('/cart/{id}','CartController@deleteCart')->name('delete-cart');
route::post('/cart/update','CartController@updateCart')->name('edit-cart');

route::get('/checkout','checkoutController@index')->name('checkout');
route::post('/checkout/sign-up','checkoutController@signUp')->name('checkout-sign-up');
route::get('/checkout/shipping','checkoutController@shipping');
route::post('/checkout/shipping','checkoutController@saveShipping')->name('new-shipping');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
route::get('/category/add','CategoryController@addCategory')->name('add-category');
route::post('/category/new','CategoryController@newCategory')->name('new-category');
route::get('/category/manage','CategoryController@manageCategory')->name('manage-category');
route::get('/category/published/{id}','CategoryController@publishedCategory')->name('published-category');
route::get('/category/unpublished/{id}','CategoryController@unpublishedCategory')->name('unpublished-category');
route::post('/category/update','CategoryController@updateCategory')->name('update-category');
route::get('/category/delete/{id}','CategoryController@deleteCategory')->name('delete-category');

route::get('/brand/add','BrandController@addBrand')->name('add-brand');
route::post('/brand/new','BrandController@newBrand')->name('new-brand');
route::get('/brand/view','BrandController@viewBrand')->name('view-brand');
route::get('/brand/published/{id}','BrandController@publishedBrand')->name('published-brand');
route::get('/brand/unpublished/{id}','BrandController@unpublishedBrand')->name('unpublished-brand');

route::post('/brand/update','BrandController@updateBrand')->name('update-brand');
route::get('/brand/delete/{id}','BrandController@deleteBrand')->name('delete-brand');

route:: get('/prduct/add','ProductController@addProduct')->name('add-product');
route::post('/product/new','ProductController@newProduct')->name('new-product');