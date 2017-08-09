<?php
/**
*Teacher class
*/
use Illuminate\database\Eloquent\Model as Eloquent;
class teacher extends Eloquent
{
/**
*attibute of the class
*/
   public $id;
   public $name;
   protected $fillable=['id','name'];
   public $timestamps=[];
   /**
   *constructor of the class
   *@param $i id of the teacher
   *@param $n name of the teacher
   */
  public function __construct($i=0, $n=null){
    $this->id=$i;
    $this->name=$n;
  }
}
?>
