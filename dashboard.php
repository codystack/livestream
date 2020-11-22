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
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-8 col-xl-8">
							<div class="card">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ClNPZsiBFZI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4 col-xl-4">
                            <!-- Active Viewers -->
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

                            <!-- Next Event -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Next Event</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="display-5 mt-1 mb-3">Talent Competition</h1>
                                    <div class="mb-0">
                                        22nd Nov 2020 | 5:10PM (WAT)
                                    </div>

                                </div>
                            </div>

                            <!-- Access Code -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Streaming Access Code</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="avatar">
                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                    <i class="align-middle" data-feather="code"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <input type="text" class="form-control" id="refLink" value="<?php echo $_SESSION['accessno'] ?>">
                                            <span class="input-group-append">
                                                  <button onclick="myFunction()" class="btn btn-primary btn-lg" type="button">Copy</button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>

			</main>

<?php include ('./components/footer.php'); ?>