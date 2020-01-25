<?php
for($i=0;$i<=5;$i++){	
	for($j=0;$j<=$i;$j++){
		echo "*";
	}
	echo "<br/>";
}
?>
<?php
for($i=0;$i<=5;$i++)
{
	for($j=5-$i;$j>=0;$j--){
	echo "*";
	}
echo "<br>";
}
?>
<?php
//Star Pyramid Size
$size = 5;
for($i=1;$i<=$size;$i++){
    for($j=1;$j<=$size-$i;$j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<=$i;$k++){
		echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}
?>
<?php
for($i=1;$i<5;$i++){	
	for($j=1;$j<5;$j++){
		echo "*";
	}
	echo "<br/>";
}
?>