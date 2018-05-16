<?php

$this->group(['middleware' => ['auth']], function(){
    $this->get('admin','AdminController@index')->name('admin.home');
});

Route::get('/', 'SiteController@index')->name('home');

Auth::routes();
