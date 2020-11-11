<?php
include ('./components/header.php');
include ('../config/dbconnect.php');

// initializing variables
$fullname       ="fullname";
$username       ="username";
$email          ="email";
$accountName    ="accountName";
$accountNum     ="accountNum";
$bank           ="bank";
$tel            ="tel";
$reflink        ="reflink";
$password       ="password";
$status         ="status";


if (isset($_POST['update_btn'])) {
    $id                 = mysqli_real_escape_string($db, $_POST['id']);
    $accountName        = mysqli_real_escape_string($db, $_POST['accountName']);
    $accountNum         = mysqli_real_escape_string($db, $_POST['accountNum']);
    $bank               = mysqli_real_escape_string($db, $_POST['bank']);

    $query = "UPDATE users SET accountName = '$accountName', accountNum = '$accountNum', bank = '$bank' WHERE id = '$id'";
    $results = mysqli_query($db, $query);
    if ($results){
        $_SESSION['success'] = "Updated!";
        header('location: users');
    }else {
        $_SESSION['success'] = "Not Updated!";
        header('location: userdetails');
    }
}

?>



			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							<?php echo $_SESSION['username'] ?>'s profile
						</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item" style="color: #dee2e6">View and edit your details.</li>
                            </ol>
                        </nav>
					</div>
					<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Settings</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">
									<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                                        Account
                                    </a>
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#bank" role="tab">
                                        Bank
                                    </a>
									<a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                                        Password
                                    </a>
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">
											<h5 class="card-title mb-0">Personal info</h5>
										</div>
										<div class="card-body">
											<form>
												<div class="row">
													<div class="col-md-8">
                                                        <div class="form-group">
                                                            <label for="fullname">Full Name</label>
                                                            <input type="text" class="form-control" id="fullname" placeholder="Full name" value="<?php echo $_SESSION['fullname'] ?>" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $_SESSION['username'] ?>" disabled>
                                                        </div>
														<div class="form-group">
															<label for="email">Email</label>
															<input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo $_SESSION['email'] ?>" disabled>
														</div>
                                                        <div class="form-group">
                                                            <label for="email">Phone Number</label>
                                                            <input type="tel" class="form-control" id="tel" placeholder="Phone Number" value="<?php echo $_SESSION['tel'] ?>" disabled>
                                                        </div>
													</div>
													<div class="col-md-4">
														<div class="text-center">
															<img alt="Chris Wood" src="https://i.imgur.com/WKOInUn.png" class="rounded-circle img-responsive mt-2" width="128" height="128" />
															<div class="mt-2">
																<span class="btn btn-primary"><i class="fas fa-upload"></i> Upload</span>
															</div>
															<small>For best results, use an image at least 128px by 128px in .jpg
                                            format</small>
														</div>
													</div>
												</div>

												<button type="submit" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>

								</div>

                                <div class="tab-pane fade" id="bank" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Bank Details</h5>

                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                                <div class="form-group">
                                                    <label for="inputPasswordCurrent">Account Name</label>
                                                    <input type="text" class="form-control" id="accountName" value="<?php echo $_SESSION['accountName'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="accountNum">Account Number</label>
                                                    <input type="text" class="form-control" id="accountNum" value="<?php echo $_SESSION['accountNum'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="bank">Bank</label>
                                                    <select class="form-control" required id="bank" name="bank">
                                                        <option value="<?php echo $_SESSION['bank'] ?>"><?php echo $_SESSION['bank'] ?></option>
                                                        <option value="Access Bank">Access Bank</option>
                                                        <option value="Access Bank (Diamond)">Access Bank (Diamond)</option>
                                                        <option value="ALAT by WEMA">ALAT by WEMA</option>
                                                        <option value="3">ASO Savings and Loans</option>
                                                        <option value="ASO Savings and Loans">Citibank Nigeria</option>
                                                        <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                                        <option value="Ekondo Microfinance Bank">Ekondo Microfinance Bank</option>
                                                        <option value="Fidelity Bank">Fidelity Bank</option>
                                                        <option value="First Bank of Nigeria">First Bank of Nigeria</option>
                                                        <option value="First City Monument Bank">First City Monument Bank</option>
                                                        <option value="Globus Bank">Globus Bank</option>
                                                        <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                                        <option value="Heritage Bank">Heritage Bank</option>
                                                        <option value="Jaiz Bank">Jaiz Bank</option>
                                                        <option value="Keystone Bank">Keystone Bank</option>
                                                        <option value="Kuda Bank">Kuda Bank</option>
                                                        <option value="Parallex Bank">Parallex Bank</option>
                                                        <option value="Polaris Bank">Polaris Bank</option>
                                                        <option value="Providus Bank">Providus Bank</option>
                                                        <option value="Rubies MFB">Rubies MFB</option>
                                                        <option value="Sparkle Microfinance Bank">Sparkle Microfinance Bank</option>
                                                        <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                                                        <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                                        <option value="Sterling Bank">Sterling Bank</option>
                                                        <option value="Suntrust Bank">Suntrust Bank</option>
                                                        <option value="TAJ Bank">TAJ Bank</option>
                                                        <option value="Union Bank of Nigeria">Union Bank of Nigeria</option>
                                                        <option value="United Bank For Africa">United Bank For Africa</option>
                                                        <option value="Unity Bank">Unity Bank</option>
                                                        <option value="VFD">VFD</option>
                                                        <option value="Wema Bank">Wema Bank</option>
                                                        <option value="Zenith Bank">Zenith Bank</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary" name="update_btn">Save changes</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>


								<div class="tab-pane fade" id="password" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Password</h5>

											<form>
												<div class="form-group">
													<label for="inputPasswordCurrent">Current password</label>
													<input type="password" class="form-control" id="inputPasswordCurrent">
													<small><a href="./password-reset">Forgot your password?</a></small>
												</div>
												<div class="form-group">
													<label for="inputPasswordNew">New password</label>
													<input type="password" class="form-control" id="inputPasswordNew">
												</div>
												<div class="form-group">
													<label for="inputPasswordNew2">Verify password</label>
													<input type="password" class="form-control" id="inputPasswordNew2">
												</div>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

<?php include ('./components/footer.php'); ?>
