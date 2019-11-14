<?php


Route::get('/',[
    'uses'  =>'GallaryFrontController@home',
    'as'    =>'/'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category/add-image-category',[
    'uses'  =>'CategoryController@addImageCategory',
    'as'    =>'add-image-category'
]);
Route::post('/category/new-category',[
    'uses'  =>'CategoryController@newCategory',
    'as'    =>'new-category'
]);
Route::get('/category/manage-image-category',[
    'uses'  =>'CategoryController@manageCategory',
    'as'    =>'manage-image-category'
]);
Route::post('/category/delete-category',[
    'uses'  =>'CategoryController@deleteCategory',
    'as'    =>'delete-category'
]);
Route::get('/category/edit-category/{id}',[
    'uses'  =>'CategoryController@editCategory',
    'as'    =>'edit-category'
]);
Route::post('/category/update-category',[
    'uses'  =>'CategoryController@updateCategory',
    'as'    =>'update-category'
]);
Route::get('/gallery/add-gallery',[
    'uses'  =>'GalleryController@addGallery',
    'as'    =>'add-gallery'
]);

Route::post('new-gallery',[
    'uses'  =>'GalleryController@newGallery',
    'as'    =>'new-gallery'
]);
Route::get('manage-gallery',[
    'uses'  =>'GalleryController@manageGallery',
    'as'    =>'manage-gallery'
]);
Route::get('edit-gallery/{id}',[
    'uses'  =>'GalleryController@editGallery',
    'as'    =>'edit-gallery'
]);
Route::post('update-gallery',[
    'uses'  =>'GalleryController@updateGallery',
    'as'    =>'update-gallery'
]);
Route::post('delete-gallery',[
    'uses'  =>'GalleryController@deleteGallery',
    'as'    => 'delete-gallery'
]);
Route::get('collection',[
    'uses'  =>'GallaryFrontController@collection',
    'as'    =>'collection'
]);
Route::get('custom-home',[
    'uses'  =>'PageController@customHome',
    'as'    =>'custom-home'
]);
Route::post('update-home',[
    'uses'  =>'PageController@updateHome',
    'as'    =>'update-home'
]);
Route::get('author-info',[
    'uses'  =>'PageController@authorInfo',
    'as'    =>'author-info'
]);
Route::post('new-author',[
    'uses'  =>'PageController@newAuthor',
    'as'    =>'new-author'
]);
Route::get('about-me',[
    'uses'  =>'PageController@aboutMe',
    'as'    =>'about-me'
]);