/*<?php
$students = array ("students" => array ("a" => "ali";
                                   "b" => "irtaza";
								   "c" => "shahmeer"
                                 );
							"numbers" => array ( 50;
							                     40;						
						                         30
                                                );
                            "positions" => array( "first";
                                               5 => "second";
                                                    "third"
                                                 )
			);
			echo $students["positions"][5];
             echo $students["students"]["a"];
			 unset ($students["positions"] [0]);
			 ?>  */
			 <?php 
/* 
    multidimensional array initialization
*/
$students = array(
    array(
        "name"=>"Ali", 
        "marks"=>50, 
        "position"=>"First"
    ),
    array(
        "name"=>"Irtaza", 
        "marks"=>45, 
        "position"=>"Second"
    ),
    array(
        "name"=>"Shahmeer", 
        "marks"=>40, 
        "position"=>"Third"
    ),
);
?>
<?php
/* 
    Accessing multidimensional array
*/
echo "Accessing multidimensional array...";
echo "Ali is an ".$student[0]["marks"]." position ".$student[0]["position"]."\n";
echo "Irtaza is an ".$student[2]["marks"]." position  ".$student[2]["position"]."\n";

?>			 