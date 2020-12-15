<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
$php = 80;
if ($php < 80){
	echo "I am still learning PHP <br>";
} elseif($php >= 80){
	echo "I LOVE PHP <br>";
}

echo "    ";

for($numbers = 0; $numbers<=10; $numbers++){
	echo $numbers ."<br>";
}

$num=50;
switch ($num){
	
	case $num == 1:
	     echo "1";
	break;
	case $num == 2:
	     echo "2";
	break;
	case $num == 3:
	    echo "3";
	break;
	case $num == 4:
		echo "4";
	break;
	case $num == 5:
		echo "5";
	break;
	default : echo "OUT OF RANGE";
break;

}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>