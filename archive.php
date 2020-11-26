<?php
include ('./components/header.php');
require_once "./config/controller.php";
?>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title1" id="greet" style="display: inline-block"></h1> ::
                        <h1 class="header-title1">
                            <div id="greet"></div>
                            <?php echo $_SESSION['username']?>
                        </h1>
                        <br><a class="btn btn-primary" href="dashboard" style="background: #ffffff; color: #153D77; font-weight: 600; border-color: #153D77">Go Back</a>
					</div>

					<div class="row mb-5">
						<div class="col-md-12 col-lg-4 col-xl-4" style="text-align: center">
							<div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5D6YEzRx-h4" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <h2>The Interview</h2>
                        </div>

                        <div class="col-md-12 col-lg-4 col-xl-4" style="text-align: center">
							<div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ovzxWt4IDHU" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <h2>Fashion Show</h2>
                        </div>

                        <div class="col-md-12 col-lg-4 col-xl-4" style="text-align: center">
							<div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zSBmvXE2a8Y" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <h2>Talent Competition</h2>
                        </div>
                        
                    </div>

			</main>

<?php include ('./components/footer.php'); ?>