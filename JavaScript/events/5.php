<?php require(__DIR__ . '/partials/header.php'); ?>

<script>
	// When the checkbox is checked, the block that contains it should switch class from alert-info to alert-danger
	// Additionally, the button should switch class from btn-info to btn-danger
	// Respectively, when the checkbox is unchecked, the classes should be switched again.
	// See here for demo: https://www.youtube.com/watch?v=t3GSO1YMcd8
	// 
	$(document).ready(function() {
		$(".alert").on('click',"input[type=checkbox]",function () {
			$(this).closest(".alert").toggleClass("alert-danger");
		});
	});
</script>

<div class="col col-md-4">
	<div class="alert alert-info">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint in ipsa non doloribus tempora, et nihil laborum quaerat optio soluta adipisci praesentium modi. Repellendus possimus distinctio laboriosam, blanditiis adipisci odio.</p>

		<button class="btn btn-info"> Go </button>

		<label class="pull-right">
			<input type="checkbox" class="is-dangerous">
			Dangerous block
		</label>

	</div>
</div>

<div class="col col-md-4">
	<div class="alert alert-info">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos adipisci excepturi molestias praesentium maiores non, eius sit sapiente eum quae voluptate assumenda natus eaque blanditiis et neque quaerat distinctio molestiae!</p>

		<button class="btn btn-info"> Go </button>

		<label class="pull-right">
			<input type="checkbox" class="is-dangerous">
			Dangerous block
		</label>

	</div>
</div>

<div class="col col-md-4">
	<div class="alert alert-info">

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe suscipit doloribus voluptates dolorum at mollitia, minus odit, reiciendis fuga reprehenderit quod, accusamus non tenetur. Veniam, provident, deserunt. Accusamus, eius, commodi.</p>

		<button class="btn btn-info">Go</button>

		<label class="pull-right">
			<input type="checkbox" class="is-dangerous">
			Dangerous block
		</label>

	</div>
</div>

<?php require(__DIR__ . '/partials/footer.php');
