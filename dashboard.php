<?php
include ('./components/header.php');
require_once "./config/controller.php";
?>
			<main class="content">
				<div class="container-fluid">

					<div class="row">
                        <div class="col-md-12 col-lg-12 text-center pt-3
                         pb-5">
                            <img src="https://i.imgur.com/XSGaWUp.png" width="300px">
                        </div>
						<div class="col-md-12 col-lg-8 col-xl-8 mx-auto">
							<div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ezP2AF1bkQg?rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
							</div>
                            <form method="get" action="archive">
                                <button class="btn btn-primary btn-lg btn-block mb-3">View Previous Events</button>
                            </form>
						</div>
                        <!--
						<div class="col-md-12 col-lg-4 col-xl-4">
                          
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Active Users</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
													<i class="align-middle" data-feather="users"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-3"><?php echo $count_user; ?></h1>

								</div>
							</div>

                            
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Upcoming Event</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3">Grand Finale</h1>
                                    <div class="mb-0">
                                        27th Nov 2020 | 7:00PM (WAT)
                                    </div>

                                </div>
                            </div>
                        </div>-->
					</div>

			</main>

<?php include ('./components/footer.php'); ?>