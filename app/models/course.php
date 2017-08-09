<?php

/**
*Course class
*/
use Illuminate\database\Eloquent\Model as Eloquent;
class Course extends Eloquent
{
/**
*attibute of the class
*/
   public $courseId;
   public $courseName;
    public $timestamps=[];
    protected $fillable=['courseId','courseName'];

   /**
   *constructor of the class
   *@param $i course code
   *@param $n name of the course
   */
  public function __construct($i=0, $n=null){
    $this->courseId=$i;
    $this->courseName=$n;
  }
}

 ?>
