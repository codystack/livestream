<?php
include ('./components/header.php');
require_once "../config/dbconnect.php";
?>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title1" id="greet" style="display: inline-block"></h1> ::
                        <h1 class="header-title1">
                            <div id="greet"></div>
                            <?php echo $_SESSION['fullname']?>
                        </h1>
					</div>

					<div class="row">
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Latest Deposit</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
													<i class="align-middle" data-feather="dollar-sign"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-3">₦0.00</h1>
									<div class="mb-0">
										Latest amount pledged.
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Withdraw</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
													<i class="align-middle" data-feather="check-square"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-3">₦0.00</h1>
									<div class="mb-0">
										Amount ready for withdrawal.
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Total Investment</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
													<i class="align-middle" data-feather="credit-card"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-3">₦0.00</h1>
									<div class="mb-0">
										Total amount invested.
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 col-xl">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col mt-0">
											<h5 class="card-title">Total Withdrawal</h5>
										</div>

										<div class="col-auto">
											<div class="avatar">
												<div class="avatar-title rounded-circle bg-primary-dark">
													<i class="align-middle" data-feather="database"></i>
												</div>
											</div>
										</div>
									</div>
									<h1 class="display-5 mt-1 mb-3">₦0.00</h1>
									<div class="mb-0">
										Total amount withdrawn.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-12 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-right">
										<a href="#" class="mr-1">
            <i class="align-middle" data-feather="refresh-cw"></i>
          </a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-toggle="dropdown" data-display="static">
              <i class="align-middle" data-feather="more-vertical"></i>
            </a>

											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">All Transactions</h5>
								</div>
								<table id="datatables-dashboard-products" class="table table-striped my-0">
									<thead>
										<tr>
											<th>Name</th>
											<th class="d-none d-xl-table-cell">License</th>
											<th class="d-none d-xl-table-cell">Technology</th>
											<th class="d-none d-xl-table-cell">Tickets</th>
											<th>Sales</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>AppStack</td>
											<td class="d-none d-xl-table-cell">Single license</td>
											<td><span class="badge badge-success">HTML</span></td>
											<td class="d-none d-xl-table-cell">50</td>
											<td class="d-none d-xl-table-cell">720</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
				</div>

                    <!-- Referral Link Start -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">My Referral Link</h5>
                                </div>
                                <div class="card-body">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <input type="text" class="form-control" id="refLink" value="https://elite-fund.com/auth/register?ref=<?php echo $_SESSION['username'] ?>">
                                                <span class="input-group-append">
                                          <button onclick="myFunction()" class="btn btn-primary btn-lg" type="button">Copy</button>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Referral Link End -->
			</main>

<?php include ('./components/footer.php'); ?>