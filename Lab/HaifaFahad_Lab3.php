<?php
         $Classmates = array("Fatimah", "Reem", "Nandini");
         $arr_Length = count($Classmates); //3
         for($x = 0; $x < $arr_Length; $x++){
            echo "My classmate is ".$Classmates[$x];
            echo "<br>";
         }

           
         $courses = array("CIS 103"=>"Programming Fundamentals I",
         "CIS 201"=> "Fundamentals of Web Design",
         "CIS 202"=> "Data structure" ); 

          echo "<table>";
            echo "<tr><th>Course Code</th><th>Course Name</th></tr>" ; 

            foreach ($courses as $courseKey => $courseValue) {
            echo "<tr><td> ".$courseKey. "</td><td>" .$courseValue.  "</td> </tr>" ;
            
         }
         echo "</table>";
         
            $reg = array(
             array("Laptop", "Asus", "MSI"),
             array("CPU", "AMD", "INTEL"), 
             array("GPU", "AMD", "Nvidia")
            );

            echo "I'm looking for " .$reg[0][1]." ". $reg[0][0]." with ".$reg[1][1]." CPU and ".$reg[2][2]." "."GPU .";

?>