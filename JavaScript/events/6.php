<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// Upon clicking on the "Move Selected to right", the chosen options from the left select box should be moved to the right select box
	// Upon clicking on the "Move Selected to left", the chosen options from the right select box should be moved to the left select box
	// Example: https://youtu.be/fryqS9skWVM
	// 
	
	$(document).ready(  
		function() {
			$('#move-right').click(function(e) {
				moveSelected('#available', '#chosen');
			});

			$('#move-left').click(function(e) {
				moveSelected('#chosen', '#available');
			});

			function moveSelected(from, to) {
				var selectedOpts = $(from).find('option:selected');
				$(to).append(selectedOpts);
			}
		});
	</script>

	<div class="form-group col-md-6">
		<label for="available">Available:</label>

		<select multiple id="available" class="form-control">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select>

		<button class="btn btn-info pull-right" id="move-right">Move Selected to right &raquo;</button>
	</div>

	<div class="form-group col-md-6">
		<label for="available" >Chosen:</label>

		<select multiple id="chosen" class="form-control">

		</select>

		<button class="btn btn-info" id="move-left">&laquo; Move Selected to left</button>
	</div>

	<?php require(__DIR__ . '/partials/footer.php');
