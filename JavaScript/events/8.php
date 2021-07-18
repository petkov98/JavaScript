<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// Upon Form submission:
	//  - if the name field is empty, show an alert() indicating that it's a required field and don't allow submission of the form
	//  - if the name is entered, do nothing and let submission of the form
	//
	// Example here: https://youtu.be/LotykfQ5Mi4
	// 
	
	$(document).on('submit', 'form', function () {
		var name = $('#name').val();
		if (!name.trim()) {
			alert('Field is empty.');
			return false;
		}
	});
</script>


<form action="" method="POST">

	<div class="form-group">
		<input type="text" class="form-control" id="name">
	</div>

	<div class="form-group col-md-6">
		<input type="submit" class="btn btn-primary" value="submit">
	</div>

</form>

<?php require(__DIR__ . '/partials/footer.php'); ?>