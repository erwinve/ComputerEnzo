<?php 
include('./Includes/head.php');
include('./Includes/navbar.php');
?>
    <!-- header -->
    <header class="blurheader">
        <div class="headerimage"></div>
            <h1 class="display-1 padtop200">ComputerEnzo</h1>
            <hr class="headerline">
            <p class="lead">Jouw hulp bij computers, laptops, mobieltjes, hardware en software problemen.</p>
            <a href="contact.php" class="btn btn-lg btn-primary">Contact</a>
            <a href="boeken.php" class="btn btn-lg btn-primary">Afspraak maken</a>
        </div>
    </header>

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Welcome to Website</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
                    <i class="fas fa-comment-alt"></i>
						<h3>Blog</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
                    <i class="fas fa-shopping-cart"></i>
						<h3>Webshop</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
                    <i class="fas fa-calendar-check"></i>
						<h3>Afspraak maken</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


    <!-- overmij -->
    <div class="section md-padding bg-grey">
    <div class="container">
    <div class="section-header text-center">
					<h2 class="title">Over mij</h2>
				</div>
            <img class="float-left" src="https://imgur.com/imu73C1.jpg" alt="Profilepicture">
        <div class="ovcontent">
            <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam tempore voluptatem laboriosam quo cum quam sunt fuga quaerat impedit at, ipsum voluptas similique architecto illum. Vel incidunt vitae perspiciatis accusamus.</p><br>
            <h5 class="padtop20">HTML/CSS</h5>
            <div class="progress">
                 <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h5>PHP</h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h5>Windows</h5>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

</div>
        </div>
</div>

<?php
include('Includes/footer.php');
?>

