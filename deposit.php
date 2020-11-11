<?php
include ('./components/header.php');
include('../config/controllers.php');
?>

    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Make an Investment
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" style="color: #dee2e6"><strong>Note:</strong> Minimum of ₦5k and Maximum of ₦700k</li>
                    </ol>
                </nav>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Investment Form</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                <div class="input-group input-group-lg mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₦</span>
                                    </div>
                                    <input type="text" class="form-control" pattern="[0-9]+" placeholder="Enter Amount eg: 5000">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block mb-3" name="deposit">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>

        </div>
    </main>


<?php include ('./components/footer.php'); ?>