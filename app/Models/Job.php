<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Job{
public static function all():array
{
    return [
      ['id'=>1,'title'=>'java developer','salary'=>'$15.000'],['id'=>2,'title'=>'PHP developer','salary'=>'$18.000'],['id'=>3,'title'=>'React developer','salary'=>'$25.000']];

}
public static function find($id):array{
  $job= Arr::first(static::all(),fn($job)=>$job['id']==$id);
  if(!$job){
abort(404);
  }
  return $job;
}

}

