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

<!-- <div class="paperItem col-md-8 col-md-offset-2">
<h1> Act II: The Late Breakfast at The Cannon</h1>
<h2> My dream is to have a house on the beach, even just 
a little shack somewhere so I can wake up, have coffee, 
look at dolphins, be quiet and breathe the air.</h2>
<h3> Wednesday Afternoon </h3>

<p> When we first walked in we thought it was a bit weird. 
Only a few tables. A small coffee bar. Weird lighting and 
mismatched furniture. the place was packed, as it took us a while 
to find a seat.  I ordered a maple syrup latte and Chris 
ordered a machiatto. We both decided to try their famous 
fluffy waffles with pure maple syrup. We sat down at a 
rustic table with a wooden bench as we were served our 
waffle and drinks and my god, with the most beautiful presentation. 
</p>
<div class="paperPicture">
<img src="img/Cannon/1.jpg">
<p> Waffle with Pure Maple Syrup </p>
</div>

<div class="paperPicture">
<img src="img/Cannon/4.jpg">
<p> Machiatto (left) and Maple Syrup Latte (right) </p>
</div>
<p>
The waffle looked like it was from a magazine and the 
drinks were perfect. Their appearance didn't do the 
taste justice. The waffle with pure maple syrup changed 
my life. Tt was the most fluffy and moist waffle I've 
ever eaten. My maple syrup latte tasted so fresh. It 
had the perfect amount of foam and it was at the perfect 
temperature. Chris also loved his machiatto. 
</p>
<div class="paperPicture">
<img src="img/Cannon/2.jpg">
<p> That Real Maple Syrup Though... </p>
</div>

<div class="paperPicture">
<img src="img/Cannon/3.jpg">
<p> These first bites were something out of Disneyland... </p>
</div>
<p>
We finished 
our waffle and drinks within 10 minutes, questioning if we 
wanted more and promising we would never love a coffee shop 
more than we did this one. I guess we'll find out.</p>

<div class="paperPicture">
<img src="img/Cannon/6.jpg">
<p> This Coffee Date ended WAY to soon. </p>
</div>

</div>

<div class="paperItem col-md-8 col-md-offset-2">
<h1> Act I: The First Sip at Democracy</h1>
<h2> Never drink black coffee at lunch; it will keep you awake all afternoon.</h2>
<h3> Sunday Evening </h3>

<p> It was Valentines Day of 2016 when we grabbed our envelope, 
picked out a piece of Paper and both read aloud, "Democracy". 
Although we weren't exactly sure of what we were getting into, 
we set off for Locke Street on a chilly Sunday evening. We find 
parking, and walked up Locke passing familiar shops and restaurants 
until we found Democracy. We stepped in and found ourselves surrounded 
by floor to ceiling red curtains. We were then greeted by a waitress 
and told to order at the bar as we were just getting coffee.
</p>
<div class="paperPicture">
<img src="img/Democracy/4.jpg">
<p> Doodles, Quotes and Masterpieces scattered each of the four walls. </p>
</div>
<p>

After 
reading the menu, we decided to get a Machiatto and Green Tea. First off, 
the coffee was amazing. Although not as strong as I normally expect, 
it was bold and flavorful. Melissa was very happy with her green tea.
</p>
<div class="paperPicture">
<img src="img/Democracy/8.jpg">
<p> Green Tea (left) and the Machiatto (right) </p>
</div>
<p> 
Democracy has some very unique elements like Take a Book, Leave a Book 
and board games that you can use while sipping on your drinks.
</p>
<div class="paperPicture">
<img src="img/Democracy/3.jpg">
<p> Foot </p>
</div>
<p>
It offers 
both a sit down, and walk up areas and is very spacious given the size of 
the area. This was definitely a coffeeshop to set the bar high, so we will 
see how the next ones stack up.</p>

<div class="paperPicture">
<img src="img/Democracy/7.jpg">
<p> Both of us were very happy about the first, of many adventures </p>
</div>

<p> </p>

</div> -->

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
$headings = array("January 2016"); 
$id = array("Jan2016"); //If changed, alter listeners as well!
foreach ($headings as $i) {
	$rand = rand(-100,-70);
	echo "<div class=\"sticky\" id=\"".$id[$incr]."\" style=\"top:".$top."vw;-ms-transform: rotate(".$rand."deg);-webkit-transform: rotate(".$rand."deg);transform: rotate(".$rand."deg);\"><p>".$i."</p></div>";
	$top += 15;
	$incr += 1;
}
?>


</body>

<script src="js/blog.js"></script>
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

	//TODO Add next 5 with a Button
	$(window).load(function() {
		for (i = 0; i < posts.length - 1 || i < 5; i++) { 
			$('body').append(buildPost(posts[i]));
			console.log(i);
		}
		console.log("done!");
	});

	function buildPost(post) {
		var toPost = "";
		toPost += startPost();
		toPost += addBeginning(post.title, post.quote, post.displayTime);
		//TODO Make this loop
		for(j = 0; j < post.elements.length; j++) {
			if(post.elements[j][0] === "img") {
				toPost += addImage(post.elements[j][1], post.elements[j][2]);
			} else {
				toPost += addParagraph(post.elements[j][1]);
			}
		}
		//TODO END loop
		toPost += endPost();
		return toPost;
	}

	function startPost() {
		return '<div class="paperItem col-md-8 col-md-offset-2">';
	}
	function addBeginning(title, quote, displayTime) {
		var toReturn = "";
		toReturn += '<h1> ' + title + '</h1>';
    	toReturn += '<h2> ' + quote + '</h2>';
		toReturn += '<h3> ' + displayTime + '</h3>';
		return toReturn;
	}

	function addParagraph(body) {
		body = body.replace("'","\'");
		return '<p>' + body + '</p>';
	}

	function addImage(img, footer) {
		var toReturn = "";
		toReturn += '<div class="paperPicture">';
		toReturn += '<img src="' + img + '">';
		toReturn += '<p> '+footer+' </p>';
		toReturn += '</div>';
		return toReturn;
	}

	function endPost() {
		return "</div>";
	}


</script>

</html>








