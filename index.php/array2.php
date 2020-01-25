<?php
$std = array(
    array("name" => "Noman","marks" => "1001"),
    array("name" => "Ali","marks" => "1002"),
    array("name" => "Ahsan","marks" => "1003"),
    );
    // print_r($std);
    echo "<br/><br/><br/>";



    
$html = "<table border>";
    $html .= "<thead><tr>";
         $html .= "<th>Name</th>";  
         $html .= "<th>Marks</th>";  
    $html .= "</tr></thead><tbody>";
foreach($std as $key => $b){
    $html .= "<tr>";
    $html .= "<td>".$b["name"]."</td>";  
    $html .= "<td>".$b["marks"]."</td>";  
    $html .= "</tr>";
}
$html .= "</tbody></table>";
echo $html;
?>
<style>
table{
    border-collapse: collapse;
}
</style>
