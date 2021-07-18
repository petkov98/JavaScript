<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// Покажете div#message, след натискане на бутона #button
	// 
	// Equivalent event setup using the `.on()` method

	$(document).ready(function() {
		$('#button').on('click', function() {
			$('#message').removeClass('hidden');
		});
	});
</script>

<button class="btn btn-primary" id="button">Show the message!</button>

<div id="message" class="alert alert-info hidden">yey :-)</div>

<?php require(__DIR__ . '/partials/footer.php');
