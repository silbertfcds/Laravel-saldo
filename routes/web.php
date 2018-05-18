<?php

$this->group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    $this->post('balance/deposit','BalanceController@depositStore')->name('deposit.store');
    $this->get('balance/deposit','BalanceController@deposit')->name('balance.deposit');
    $this->get('balance','BalanceController@index')->name('admin.balance');
    
    $this->get('/','AdminController@index')->name('admin.home'); 
});

Route::get('/', 'SiteController@index')->name('home');

Auth::routes();
