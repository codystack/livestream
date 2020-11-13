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
    <meta property="og:url" content="https://voteonline.com.ng/"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Vote Online&trade; :: Nigeria's First Online Voting Platform" />
    <meta property="og:description" content="Create an online contest with Vote Online, Own and run an online photo contest for your Peagents, Award Shows, Club Elections etc, for free or paid with our easy to use online voting platform."/>
    <meta name="keywords" content="ThankGodOkoro.codes,ThankGod Okoro,Vote Online,VoteOnline,online voting,beauty pageant,software,voting,election,online contest,contest,award shows,award,shows,online election,digital voting,event ticket management,event voting,fashion award,headies awards,amvca,Africa Magic Viewers' Choice Awards,branding">
    <meta property="og:image" content="https://i.imgur.com/3Vygtkm.png"/>
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist & Product/Graphic Designer.">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/kVguEsz.png">

    <title>Stream Online&trade; :: Nigeria's 1st online streaming platform</title>

    <link href="css/modern.css" rel="stylesheet">

    <script src="js/settings.js"></script>

</head>

<body>
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<div class="wrapper">
    <!-- Top Menu -->
    <div class="main">
        <nav class="navbar navbar-expand navbar-theme">
            <img src="https://i.imgur.com/XSGaWUp.png" width="200px">

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ml-lg-2">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
                            <i class="align-middle fas fa-stream"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="logout"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>
