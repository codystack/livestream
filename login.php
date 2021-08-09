<?php
session_start();
//Login User Start
require_once ('./config/dbconnect.php');

if (isset($_POST['login'])) {

    $email      = $_POST['email'];
    $accessno   = $_POST['accessno'];
    $error      = array();
    $errors     = '<div style="margin-top: 50px; margin-left: 50px; margin-right: 50px;"><div class="alert alert-danger alert-center alert-dismissible fade show">Wrong Username or Password!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div>';

    $email      = mysqli_real_escape_string($con, $email);
    $accessno   = mysqli_real_escape_string($con, $accessno);

    if (count($error) == 0) {
        $query = "SELECT * FROM users WHERE email='$email' AND accessno='$accessno'";
        $results = mysqli_query($con, $query);

        while($row = mysqli_fetch_array($results)) {
            $email = $row['email'];
            $accessno = $row['accessno'];
        }

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['accessno'] = $accessno;
            $_SESSION['success'] = "You are now logged in";
            header('location: dashboard');
        }else {
            header('location: usererror');
        }
    }
}
//Login User End

?>
<!DOCTYPE html>
<html lang="en" xmlns:https="http://www.w3.org/1999/xhtml">

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
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist & Product/Graphic Designer."><link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/kVguEsz.png">

    <title>Stream Online&trade; :: Nigeria's 1st online streaming platform</title>
    <link href="css/modern.css" rel="stylesheet">
</head>
<body style="background: url(./img/contestants_bg-scaled.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<main class="main h-100 w-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-10 col-md-6 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">


                    <div class="card">
                        <div class="card-body">
                            <div class="text-center mt-4">
                                <img src="https://i.imgur.com/OHRyC4K.png" width="250px">
                                <p class="lead">
                                    Gain Access to Stream Live Full Show.
                                </p>
                            </div>
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="https://i.imgur.com/VM0RZJr.png" alt="login icon" class="img-fluid rounded" width="112" height="112" />
                                </div>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" name="email" placeholder="Enter your email" />
                                    </div>
                                    <div class="form-group">
                                        <label>Access No.</label>
                                        <input class="form-control form-control-lg" type="text" required value="<?php if(isset($_COOKIE["accessno"])) { echo $_COOKIE["accessno"]; } ?>" name="accessno" placeholder="Enter your access no." />
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block" name="login">Start Streaming</button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center mt-4">
                                <p class="lead">
                                    Don't have access? <a href="register" style="text-decoration: none"><strong>Get Access</strong></a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>



<svg width="0" height="0" style="position:absolute">
    <defs>
        <symbol viewBox="0 0 512 512" id="ion-ios-pulse-strong">
            <path
                d="M448 273.001c-21.27 0-39.296 13.999-45.596 32.999h-38.857l-28.361-85.417a15.999 15.999 0 0 0-15.183-10.956c-.112 0-.224 0-.335.004a15.997 15.997 0 0 0-15.049 11.588l-44.484 155.262-52.353-314.108C206.535 54.893 200.333 48 192 48s-13.693 5.776-15.525 13.135L115.496 306H16v31.999h112c7.348 0 13.75-5.003 15.525-12.134l45.368-182.177 51.324 307.94c1.229 7.377 7.397 11.92 14.864 12.344.308.018.614.028.919.028 7.097 0 13.406-3.701 15.381-10.594l49.744-173.617 15.689 47.252A16.001 16.001 0 0 0 352 337.999h51.108C409.973 355.999 427.477 369 448 369c26.511 0 48-22.492 48-49 0-26.509-21.489-46.999-48-46.999z">
            </path>
        </symbol>
    </defs>
</svg>
<script src="js/app.js"></script>
<!-- Tidio Chat -->
<script src="//code.tidio.co/w21wepezusnmn1y15ukvzdhohe9xiten.js" async></script>
<script type="text/javascript">
    tidioChatApi.display(true);
</script>
</body>


</html>