<?php
$html= "<ul>";
for($i=1; $i<5; $i++) {
    $html .="<li>product".$i."<ul>";
	for($j=1; $j<3; $j++){
	   $html .= "<li> sub product ".$j."</li>";
	  }
	  $html .="</ul></li>";
	  }

$html .= "</ul>";

echo $html;

?>











