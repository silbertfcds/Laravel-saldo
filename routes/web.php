<?php

$this->group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    $this->get('balance','BalanceController@index')->name('admin.balance');
    $this->get('/','AdminController@index')->name('admin.home'); 
});

Route::get('/', 'SiteController@index')->name('home');

Auth::routes();
