<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

	if(4<4){
		echo "I love java";
	} elseif (5>6) {
		# code...
		echo "I love C++";
	} else{
		echo "I love php";
	}

	for($counter = 0; $counter <= 10; $counter++){
		echo $counter. "<br>";
	}

	$number = 10;
	switch($number){
		case 5:
		echo "it is 5";
		break;

		case 6:
		echo "it is 6";
		break;

		case 7:
		echo "it is 7";
		break;

		case 8:
		echo "it is 8";
		break;

		case 9:
		echo "it is 9";
		break;

		default :
		echo "it is 10";
		break;
	}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>