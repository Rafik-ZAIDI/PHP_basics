<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out

			 */
		//step 1
    	    $number1 = 10;
			$number2 = 20;
		//step 2
			echo $number1 + $number2 . "<br>";
		//step 3 
		$regArray = array(9, 45, 549, 568, 4578, 12448, 69887);
		$assocArray = array("x0" => 9, "x1"=>45,  "x2"=>549, "x3"=>568, "x4"=>4578, "x5"=>12448, "x6"=>69887);

		echo" Regular Array - Associative Array <br>";
		echo $regArray[0]. " - ";
		echo $assocArray['x0']. "<br>";
		echo $regArray[1]. " - ";
		echo $assocArray['x1']. "<br>";
		echo $regArray[2]. " - ";
		echo $assocArray['x2']. "<br>";
		echo $regArray[3]. " - ";
		echo $assocArray['x3']. "<br>";


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>