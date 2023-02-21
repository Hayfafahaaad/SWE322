<?php 
class course{
public $name ; 
public $code; 
public $description; 
public  $grade; 


function __construct($name,$code,$description, $grade){
    $this->name = $name ; 
    $this->code = $code ; 
    $this->description = $description ; 
    $this->grade = $grade ; 
    
}

//setters 
function set_name($name) {
    $this->name = $name;
  }

function set_code($code) {
    $this->code = $code;
  }
function set_description($description) { 
    $this->description = $description ; 
}

function set_grade($grade){
    $this->grade = $grade; 
}

//getters 

function get_name(){
    return $this->name;
}
function get_code(){
    return $this->code;
}
function get_description(){
    return $this->description;
}
function get_grade(){
    return $this->grade;
}


// is it A+ ??

function isA() {
if ($this->grade >= 9)
return true ; 

}



//display details 

function details(){

echo "<br> The course name: "  . $this->get_name(). " <br> the code is : " . $this->get_code() . ". <br> Description: " . $this->get_description() . " <br> your grade is " . $this->get_grade() ; 

}

}


$c1 = new course('software modeling','swe300', 'uml diagrams' , 9); 
$c2 = new course('fundementals of programming ','CIS 104 ', 'intro to java programming' , 5); 
$c3 = new course('data structures ','CIS 110', 'linked list, queue...' , 8); 



$courses = array($c1,$c2,$c3);
 echo "<table>"; 

foreach($courses as $course ){
    if ($course->isA()){
    echo "<tr style='background-color: yellow'>" ; }
    else {
    echo "<tr>"; 
    }
    echo "<td>". $course->get_name(). " </td><td>".$course->get_code(). " </td> <td>" . $course->get_description().  "</td> <td>". $course->get_grade() ." </td>  </tr>"; 

}
echo "</table>"; 

?> 
