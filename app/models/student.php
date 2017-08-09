<?php
/**
*student class
*/
use Illuminate\database\Eloquent\Model as Eloquent;

class Student extends Eloquent
{
/**
*attibute of the class
*/
   public $rollNo;
   public $name;
   public $emailId;
   public $timestamps=[];

   protected $fillable=['rollNo','emailId','name'];
   /**
   *constructor of the class
   *@param $r rollno of the student
   *@param $n name of the student
   *@param $e EmailId of the student
   */

  public function Studnet($r=0, $n=null, $e=null){
    $this->rollNo=$r;
    $this->name=$n;
    $this->emailId=$e;
  }
}
?>
