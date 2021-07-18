<?php require(__DIR__ . '/partials/header.php'); ?>

<style>
	.item-with-popover { position: relative; }
	.custom-popover { top: 100%; left: 0; border: solid 1px red; width: 100%; padding: 5px; }
</style>

<script>
	/*
		- Show the popover element whenever the button is clicked.
		- Hide the popover element when any part of the page is clicked after that(except for the button)
		- Here is how it should work: https://www.youtube.com/watch?v=V1TpvxPJTq4
	*/
	$(document).ready(function() {
		$('.btn').on('click', function (event) {
			event.stopPropagation();

			$('.custom-popover').removeClass('hidden');
		});

		$(document).on('click', function() {
			$('.custom-popover').addClass('hidden');
		});
	});
</script>

<div class="col-md-2">
	<div class="item-with-popover">
		<button class="popover-control btn" id="bulk_actions_btn">Show Popover</button>

		<div class="custom-popover hidden" id="message">
			Some text
		</div>
	</div>
</div>

<div class="col-md-10">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum mollitia numquam nemo quae ducimus dolorem doloribus, aliquid aspernatur magnam animi? Officia, voluptates? Pariatur iure eveniet, tempora quos, debitis blanditiis veritatis.</p>
</div>

<?php require(__DIR__ . '/partials/footer.php');
