<?php
ini_set("display_errors", true);
error_reporting(E_ALL);

class Controller{

 /**
 *this method will give the required model class object from the modelFactorys
 *@param $model required model class name
 */
  public function model($model){
    require_once '../app/models/modelFactory.php';
     $obj=new ModelFactory();
      return $obj->getInstance($model);
  }
  /**
  *this method will renderv the required View
  *@param $view required view name
  *@param $data any data to that view
  */
  public function view($view,$data =[])
  {
    require_once '../app/views/'.$view.'.html';
  }

}

 ?>
