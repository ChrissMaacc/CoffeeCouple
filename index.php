<!DOCTYPE html>
<html>
<head>
	<title> Blog | The Coffee Couple </title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" text="text/css" href="css/index.css">

</head>
<body>

<div id="banner">
	<div class="col-md-8 leftSide">
		<i class="fa fa-coffee fa-2x"></i>
		<p class=""> The Coffee Couple </p>
	</div>
	<div class="col-md-4 rightSide">
		<p class="col-md-4 activePage"> Blog </p>
		<p class="col-md-4"> Contact </p>
		<p class="col-md-4"> About Us </p>
	</div>
</div>

<div class="paperItem col-md-8 col-md-offset-2">
<h1> Act III: Pinecone Coffee Co.</h1>
<h2> I have measured out my life with coffee spoons. </h2>
<h3> Saturday Night </h3>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. </p>
<div class="paperPicture">
<img src="img/43H.jpg">
<p> Footer </p>
</div>
<p> Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</div>

<div class="paperItem col-md-8 col-md-offset-2">
<h1> Act II: Mulberry Coffe Shop</h1>
<h2> To me, the smell of fresh-made coffee is one of the greatest inventions. </h2>
<h3> Tuesday Morning </h3>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
</div>

<div class="paperItem col-md-8 col-md-offset-2">
<h1> Act I: The First Sip</h1>
<h2> Never drink black coffee at lunch; it will keep you awake all afternoon.</h2>
<h3> Sunday Afternoon </h3>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. </p>
<div class="paperPicture">
<img src="img/261H.jpg">
<p> Footer </p>
</div>
<p> Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<!-- <div class="sticky">
Heading 1
</div>

<div class="sticky" style="top:35vh;-ms-transform: rotate(-70deg);-webkit-transform: rotate(-70deg);transform: rotate(-70deg);">
Heading 2
</div> -->

<?php
$top = 10;
$incr = 0;
$rand = 0;
$headings = array("January 2016", "December 2015", "November 2015", "October 2015"); 
$id = array("Jan2016","Dec2015","Nov2015","Oct2015"); //If changed, alter listeners as well!
foreach ($headings as $i) {
	$rand = rand(-100,-70);
	echo "<div class=\"sticky\" id=\"".$id[$incr]."\" style=\"top:".$top."vw;-ms-transform: rotate(".$rand."deg);-webkit-transform: rotate(".$rand."deg);transform: rotate(".$rand."deg);\"><p>".$i."</p></div>";
	$top += 15;
	$incr += 1;
}
?>


</body>

<script type="text/javascript">
	$(".sticky p").click(function() {
		var id = this.id;
		switch(id) {
			case "Jan2016":
				break;
			case "Dec2015":
				break;
			case "Nov2015":
				break;
			case "Oct2015":
				break;
			default: 
		}
	});

	$(".rightSide p").click(function() {
		var text = this.innerHTML;
		alert(text);
		switch(text) {
			case " Blog ":
			$('body').animate({
        		scrollTop: 0
    		}, 1000);
				break;
			case " Contact ":
				break;
			case " About Us ":
				break;
			default: 
		}
	});


</script>

</html>








