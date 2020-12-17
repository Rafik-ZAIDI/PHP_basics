<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */
function addTowNumbers($num1, $num2){
	$sum= $num1 + $num2;

	echo $sum;
	return $sum;
}

echo"total One :";
$total1 = addTowNumbers(5,2);
echo"<br>";
echo"total Two :";
$total2 = addTowNumbers(10, $total1);
	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>