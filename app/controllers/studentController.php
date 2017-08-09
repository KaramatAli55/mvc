<?php
//for error checking
ini_set("display_errors", true);
error_reporting(E_ALL);
require_once '../app/models/model.php';
/**
*controller class for the student related operation
*/
class studentController extends Controller{

  protected $student;
  /**
  *construcotr of the controller class and this will also initialize the $student attribute with the model class object
  */
  public function __construct(){
      //  echo "I am the constrcutor of the studentController"."<br>";
       $this->student=$this->model('student');
  }
  /**
  *this function will be used to call the render view function
  *this will render the addStudent html page
  */
  public function insertview(){
    Controller::view('student/add');
  }
  /**
  *this function will get the parameter from the url body and insert it into the studnet table
  */
  public function addStudent(){
    //call the model class method to add student to the database table
    Model::add_student($_POST['rollNo'], $_POST['name'],$_POST['emailId']);
  }
  /**
  *this function will be used to call the render view function
  *this will render the deleteStudent html page
  */
  public function deleteView(){
    Controller::view('student/delete');
  }
  /**
  *this function will get the parameter from the url body and delete the row from the student table
  */
  public function deleteStudent(){
    //call the model class method to delete student to the database table
    Model::delete_Student($_POST['rollNo']);
  }
  /**
  *this function will be used to call the render view function
  *this will render the deleteStudent html page
  */
  public function updateView(){
    Controller::view('student/update');
  }
  /**
  *this function will get the parameter from the url body and update the row from the student table
  */
  public function updateStudent(){
    //call the model class method to update student to the database table
    Model::update_Student($_POST['rollNo'], $_POST['name']);
  }
  /**
  *this function will be used to call the render view function
  *this will render the showStudent html page
  */
  public function showStudent(){

    //$this->student=$this->model('student');
    //ORM method call to build query
    $stu=Student::where('rollNo','=','3')->get();
    //echo $this->student->name;
    Controller::view('student/show',['name'=>$stu->name]);
  }

}

 ?>
