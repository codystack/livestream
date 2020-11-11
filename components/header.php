<?php 
  session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login");
}
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Elite Funds is a unique peer 2 peer platform, which provides its members the ability to earn money by funding one another through her large community of help givers. In today’s economy, it seems that everyone is looking for a way to earn a few extra bucks. The shrinking job market, falling asset values, and economic uncertainty that makes every day a struggle.">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/vGYIf1a.png">

    <title>Dashboard :: Elite Funds&trade;</title>

    <link href="css/modern.css" rel="stylesheet">

    <script src="js/settings.js"></script>

</head>

<body>
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<div class="wrapper">
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-content">
            <div class="sidebar-user">
                <img src="https://i.imgur.com/WKOInUn.png" class="img-fluid rounded-circle mb-2" alt="user" />
                <div class="font-weight-bold"><?php echo $_SESSION['username']?></div>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Account
                </li>
                <li class="sidebar-item active">
                    <a href="dashboard" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="profile" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-user"></i> <span class="align-middle">Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="deposit" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-credit-card"></i> <span class="align-middle">Deposit</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#transactions" class="sidebar-link collapsed" data-toggle="collapse">
                        <i class="align-middle mr-2 fas fa-fw fa-receipt"></i> <span class="align-middle">Transactions</span>
                    </a>
                    <ul id="transactions" class="sidebar-dropdown list-unstyled collapse " data-parent="#transactions">
                        <li class="sidebar-item"><a class="sidebar-link" href="deposit-history">Deposit History</a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="withdrawal-history">Withdrawal History</a></li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="referrals" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-signal"></i> <span class="align-middle">Referrals</span>
                    </a>
                </li>
                <li class="sidebar-header">
                    Do you need help?
                </li>
                <li class="sidebar-item">
                    <a href="javascript:void(Tawk_API.toggle())" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-comments-dollar"></i> <span class="align-middle">Chat Support</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="logout" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-sign-out-alt"></i> <span class="align-middle">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Top Menu -->
    <div class="main">
        <nav class="navbar navbar-expand navbar-theme">
            <a class="sidebar-toggle d-flex mr-2">
                <i class="hamburger align-self-center"></i>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-toggle="dropdown">
                            <span class="indicator"></span>
                            <i class="align-middle fas fa-envelope-open"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                            <div class="dropdown-menu-header">
                                <div class="position-relative">
                                    1 New Message(s)
                                </div>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-2">
                                            <img src="https://i.imgur.com/IQxEPFQ.png" class="avatar img-fluid rounded-circle" alt="">
                                        </div>
                                        <div class="col-10 pl-2">
                                            <div class="text-dark">Admin</div>
                                            <div class="text-muted small mt-1">Welcome to Elite Funds.</div>
                                            <div class="text-muted small mt-1">1m ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ml-lg-2">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
                            <i class="align-middle fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="profile"><i class="align-middle mr-1 fas fa-fw fa-user"></i> View Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
