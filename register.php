<?php
session_start();
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
    <meta name="author" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist & Product/Graphic Designer."><link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/kVguEsz.png">

    <title>Stream Online&trade; :: Nigeria's 1st online streaming platform</title>

    <link href="css/modern.css" rel="stylesheet">

    <script src="js/settings.js"></script>

</head>

<body style="background: url(https://i.imgur.com/YRaW9DX.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
<div class="splash active">
    <div class="splash-icon"></div>
</div>

<main class="main w-100">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">


                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center mt-4">
                                    <img src="https://i.imgur.com/OHRyC4K.png" width="250px">
                                    <p class="lead">
                                         Get Streaming All Access.
                                    </p>
                                </div>
                                <div class="text-center">
                                    <img src="https://i.imgur.com/B6LyEZD.png" alt="login icon" class="img-fluid rounded mb-4" width="112" height="112" />
                                </div>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="paymentForm">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control form-control-lg" id="username" type="text" pattern="[a-zA-Z ]+" required name="username" placeholder="Enter username" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required name="email" placeholder="Enter email" />
                                        <div id="email_response" ></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Amount</label>
                                        <input class="form-control form-control-lg" type="text"  id="amount" value="2000" disabled />
                                    </div>
                                    <div class="text-center mt-3">
                                        <button class="btn btn-lg btn-primary" onclick="payWithPaystack()">Get Access</button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center mt-4">
                                <p class="lead">
                                    Already have access? <a href="login" style="text-decoration: none"><strong>Login</strong></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--Modal Start-->

<!--Modal End-->

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
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="js/pay.js"></script>

<script>
    $(document).ready(function(){

        $("#email").keyup(function(){

            $("#email_response").html("");

            var email = $(this).val().trim();

            if(email != ''){

                $.ajax({
                    url: './config/controller.php',
                    type: 'post',
                    data: {email: email},
                    success: function(response){

                        if(response=="use"){

                            $('#email').val("");
                            $('#email_response').html("Email is already in use");
                        }

                    }
                });
            }else{
                $("#email_response").html("");
            }

        });

    });
</script>

</body>

</html>