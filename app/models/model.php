<?php

class Model
{
  public function add_student($rollNo=0, $name='', $emailId=''){
    //ORM method call to build query
    Student::create([
      'rollNo'=>$rollNo,
      'name'=>$name,
      'emailId'=>$emailId
    ]);
  }
  public function delete_Student($rollNo=0){
    //ORM method call to build query
    Student::where('rollNo','=',$rollNo)->delete();
  }
  public function update_Student($rollNo=0, $name=''){
    //ORM method call to build query
    $stu=Student::where('rollNo','=',$rollNo)->get();
    $stu->name=$name;
    $stu->save();
  }


}

 ?>
