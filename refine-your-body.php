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
			<<div class="flip-container">
				<h3 class="options is-active">Fitness Options</h3>
				<h3 class="options">Nutrition Options</h3>
				<div class="options-content is-active">
					<p class="fit-content">As a Team Beachbody online coach, I conduct virtual challenge groups on Facebook. I have challengers from all over the country, as well as Canada and the Philippines. Through these challenge groups I provide daily trainer videos, nutrition tips, recipes, and the motivation and inspiration to keep going.</p>
					<p class="fit-content">
					 You don’t have to go to the gym to make this program work for you – you can work out at home. Working out at home means you can do it on your own time; you don’t have the drive time of going to the gym; and you only need a small amount of floor space and minimal equipment.</p>
				</div>

				<div class="options-content">
					<p class="fit-content">
					Beachbody offers a meal planner that is included with a Club Membership called the Meal Plan Wizard.  I have used it for a couple of years now because of its simplicity. The program comes up with a meal plan designed just for you and your health and fitness goals.  It tells you what to eat, how to prepare it, and when to eat it! </p>
					<p class="fit-content">
					Incorporating Shakeology into my daily health and wellness regimen helped me succeed in my own personal fitness plan. I encourage you to try this once-a-day meal replacement.  It isn’t a protein or diet shake. It is simple a meal replacement shake that is all natural – no additives or sweeteners. Shakeology shakes assist the body in absorbing the good foods you eat and safely and efficiently eliminating the bad toxic stuff. When I started my challenge pack, I began drinking the shakes once a day and following the meal planner. It has helped me get to where I am today. Shakeology is well worth the investment in myself and has given me a new lease on life!</p>
				</div>
				<h4>Watch Darin Olien, "The Shakeology Ingredient Hunter" Video Here</h4>
				<a href=""><p id="watch">Watch the Video</p></a>
			</div>
		</div>

		

		<?php include('footer.php');?>
		<script type="text/javascript" src="js/jquery.min.js"></script>

	<script>
		$(document).ready(function(){
			function changeTab() {
				$(".options").click(function() {
					$(".options").toggleClass("is-active");
					$(".options-content").toggleClass("is-active");
				});
			};
			changeTab();
		});
			
	</script>