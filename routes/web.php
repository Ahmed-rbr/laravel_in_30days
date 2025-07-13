<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',['jobs'=>[['id'=>1,'title'=>'java developer','salary'=>'$15.000'],['id'=>2,'title'=>'PHP developer','salary'=>'$18.000'],['id'=>3,'title'=>'React developer','salary'=>'$25.000']]]);
});

Route::get('/contact',function(){
    return view('contact');
});
Route::get('jobs/{id}',function($id){
$jobs=[['id'=>1,'title'=>'java developer','salary'=>'$15.000'],['id'=>2,'title'=>'PHP developer','salary'=>'$18.000'],['id'=>3,'title'=>'React developer','salary'=>'$25.000']];
$job=Arr::first($jobs,fn($job)=>$job['id']==$id);
    return view('job',['job'=>$job]);
});