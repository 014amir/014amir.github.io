<?php
include("header.php");
if(!isset($_SESSION['username'])){
	header("location: login.php");}
?>
			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div>
							<h4>On this page you can download documents that you will need to complete semester work and homework.</h4>
							<a href="topics/lectures.ppt" download="Lectures of 4th semester">
								<button class="btn">Download file</button>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">

						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
<?php
include("footer.php");
?>