<?php

/**
*
*Create a Factory to generate object of classes based on given information
*/
class ModelFactory{
  public function __construct(){
    //require_once '../app/models/student.php';
    //require_once '../app/models/teacher.php';
    //require_once '../app/models/course.php';
    echo "modelfactory constructor"."<br>";
  }
  /**
  *
  *method to create the objects of different classes on provided information
  *@param $TYPE  value will detemine which class object should be created
  *@return it will return the requested class object
  */
  public function getInstance($type){
    // Check that the class exists before trying to use it
    require_once '../app/models/'.$type.'.php';
   if (class_exists($type)) {
        $obj=new $type();
        return $obj;
      }
    return false;
  }

}

//$obj=new ModelFactory();
//$o=$obj->getInstance("Student");

 ?>
