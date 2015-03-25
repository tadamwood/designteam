<?php include('header.php');?>

		<div class="hero-inner hero-refine"></div>

		<div class="center-container">
			<h1>Refine Your Body</h1>
			<h2>Practice Make Progress Not Perfection.</h2>
			<p class="refine-para">Finding your fitness is like finding a new YOUR - gaining strength, energy and confidence! When I was nearly 200 pounds, I honestly thought there was no way I could do any form of exercise except walking. Imagine my surprise when I was completely wrong! This is what I found from finding my fitness:</p>
			<ul>
				<li>I can, in fact, bust out most of the moves and feel wonderful, which in turn makes me treat others better!</li>
				<li>Getting taken off diabetes and cholesterol loweing medication saves me money!</li>
				<li>Increased energy and stamina - I don't shy away from taking the stairs anymore!</li>
			</ul>

			<!-- Flip options based on click -->
			<div class="flip-container">
				<h3 id="fit-options" class="options">Fitness Options</h3>
				<h3 id="nut-options" class="options">Nutrition Options</h3>
				<div id="flip-content">
					<p class="fit-content">The advantage of working with a personal coach is the expertise of connecting you with the right program to get started in harmony with what your goals are.  You receive ongoing support not only from me but also your Team Beachbody family!  The folks at Beachbody have done the scientific research to bring us fitness options for EVERY type of individual – young and old – beginner or expert.</p>
					<p class="fit-content">
					Online coaching is very successful!  As a Team Beachbody online coach I conduct virtual challenge groups on Facebook.  I have challengers from all over the United States as well as Canada and the Philippines.  Through these challenge groups I provide daily trainer videos and tips, nutrition tips, recipes, motivation and inspiration to keep going.  The rewards are many – and I have made new friends along the way! </p>
					<p class="fit-content">
					I recognize that a lot f you are comfortable going to the gym.  All power to ya’!  I, however, have never been one of them!  I LOVE getting up in the morning, throwing my hair up in a ponytail sans brushing, and 9 times out of 10 not wearing matching workout clothes and working out in my living room!  It works for me.   Working out at home means you can do it on your own time, you don’t have the drive time of going to the gym, and you only need a small amount of floor space and minimal equipment.  I was able to lose over 60 pounds this way!  YOU CAN TOO!</p>
					<p id="nut-options"></p>
				</div>
				<h4>Watch Darin Olien, "The Shakeology Ingredient Hunter" Video Here</h4>
				<a href=""><p id="watch">Watch the Video</p></a>
			</div>
		</div>

		

		<?php include('footer.php');?>
		<script>
		$(document).ready(function(){
			$("#nut-options").click(function() {
				$("fit-options p").css('display', 'none');
				$(this).css('background-color', '$green');
				$(this).css('color', '$white');
			});
		});
	</script>