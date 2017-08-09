<?php
ini_set("display_errors", true);
error_reporting(E_ALL);
class App{
  /**
  *attibute of the class
  */
   protected $controller='studentController';
   protected $method='insertView';
   protected $params=[];

  public function __construct(){
    /**
  *this function will parse the url;
  */
   $url=$this->parseUrl();
   //include controllerFactory file
   require_once '../app/controllers/controllerFactory.php';
   $obj=new controllerFactory();
   $obj->show();
   //now get the required controller object from the controllerFactory
   $this->controller=$obj->getInstance($url[0]);
   //echo "This will be the controller";
   //print_r($this->controller);
   //check if the controleler file exit or not
   if(file_exists('../app/controllers/'.$url[0].'.php')){

     //if it exit then assign the controlller class object to the controller attriute
     $this->controller=$url[0];
     echo "<br>";
      print_r($this->controller);
      echo "<br>"."I am controller in line 33"."<br>";
      echo "<br>";
     //and remove that value from the url
     unset($url[0]);
   }
     //check wether the calling method of the controller exit or not
     if(isset($url[1])){
       if(method_exists($this->controller,$url[1])){
         //assing method name to the method attribute
         $this->method=$url[1];
         echo "<br>"."this method will be called"."<br>";
         print_r($this->method);
       }
        unset($url[1]);
      }
     //if the we give parameter in the array then assign them to the param object
     $this->param=$url?array_values($url):[];
     //print_r($this->param);
   call_user_func_array([$this->controller,$this->method],$this->param);
  }
  public function parseUrl(){
    if(isset($_GET['url'])){
      //rtrim will trim any tariling slash
    return explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_URL));
    }
  }

}
 ?>
