<?php
//for error checking
ini_set("display_errors", true);
error_reporting(E_ALL);
/**
*controller class for the course related operation
*/
class CourseController extends Controller{
  protected $course;
  /**
  *construcotr of the controller class and this will also initialize the $course attribute with the model class object
  */
  public function __construct(){
       echo "I am courseController constrcut";
       $this->course=$this->model('course');
  }
  /**
  *this function will be used to call the render view function
  *this will render the addCourse html page
  */
  public function insertview(){
    $this->view('course/add');
  }
  /**
  *this function will get the parameter from the url body and insert it into the course table
  */
  public function addCourse(){
           echo 'addcourse';
           echo $_POST['courseId']."<br>";
          echo $_POST['courseName'];
          //ORM method call to build query
           Course::create([
             'courseId'=>$_POST['courseId'],
             'courseName'=>$_POST['courseName']
           ]);
  }
  /**
  *this function will be used to call the render view function
  *this will render the deleteCourse html page
  */
  public function deleteView(){
    $this->view('course/delete');
  }
  /**
  *this function will get the parameter from the url body and delete the row from the course table
  */
  public function deleteCourse(){
    //ORM method call to build query
    Course::where('courseId','=',$_POST['courseId'])->delete();
  }
  /**
  *this function will be used to call the render view function
  *this will render the deleteCourse html page
  */
  public function updateView(){
    $this->view('course/update');
  }
  /**
  *this function will get the parameter from the url body and update the row from the course table
  */
  public function updateCourse(){
      //ORM method call to build query
    $course=Course::where('courseId','=',$_POST['courseName'])->get();
    $course->courseName=$_POST['courseName'];
    $course->save();
  }
  /**
  *this function will be used to call the render view function
  *this will render the showCourse html page
  */
  public function showCourse(){
    //ORM method call to build query
    $course=Course::where('courseId','=','4')->get();
    $this->view('course/show',['courseName'=>$course->courseName]);
  }
}

 ?>
