<?php require(__DIR__ . '/partials/header.php'); ?>

<main>
	<div id="loader" style="text-align: center; display: none;">
		<img src="./css/images/loader.gif" width='102px' height='102px'>
	</div>
	<div id="result"></div>
	<div class="container">
		<h2>Contact <small>us</small></h2>

		<hr>

		<form>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name *" id="name">
					</div><!-- /.form-group -->

					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your Email *">
					</div><!-- /.form-group -->

					<div class="form-group">
						<input type="tel" class="form-control" placeholder="Your Phone *">
					</div><!-- /.form-group -->
				</div><!-- /.col-md-6 -->

				<div class="col-md-6">
					<div class="form-group">
						<textarea class="form-control" placeholder="Your Message *" id="message" rows="6"></textarea>
					</div><!-- /.form-group -->
				</div><!-- /.col-md-6 -->

				<div class="clearfix"></div><!-- /.clearfix -->

				<div class="col-md-12 text-center">
					<button type="submit" class="btn">Send Message</button>
				</div><!-- /.col-md-12 -->
			</div>
		</form>
	</div><!-- /.container -->
</main>

<?php require(__DIR__ . '/partials/footer.php');
