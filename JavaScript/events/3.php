<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// При натискане на линка:
	//  - покажете диалогов прозорец на потребителя по този начин: window.confirm("You're about to leave this page. Are you sure? ");
	//  - повече информация за window.confirm() можете да прочетете тук: https://developer.mozilla.org/en-US/docs/Web/API/Window/confirm
	//  - ако потребителят натисне "Cancel" в диалоговия прозорец, предотвратете навигирането до външната страница
	//  - ако потребителят натисне "OK", не правете нищо, и позолете навигирането до външната страница
	
	$(document).ready(function(){
		$('.confirm').on('click', function(event) {
			return confirm("You're about to leave this page. Are you sure?");
		});
	});
</script>

<a href="http://example.com/" id="external-link" class="confirm">Go to google.com</a>

<?php require(__DIR__ . '/partials/footer.php');
