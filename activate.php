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
    <!-- Top Menu -->
    <div class="main">
        <nav class="navbar navbar-expand navbar-theme">

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ml-lg-2">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-toggle="dropdown">
                            <i class="align-middle fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="logout"><i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>

        </nav>


        <main class="content">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="card" style="text-align-last: center">
                            <div class="card-header">
                                <h4 class="mb-0" style="padding-top: 20px">Please pay the activation fee of ₦1,000 <br>to the details below.</h4>
                            </div>
                            <hr><?php
                            $activation_acct = "SELECT * FROM users";
                            $result = mysqli_query($db, $activation_acct);
                                while($row = mysqli_fetch_array($results)) {
                                        $username           = $row['username'];
                                        $email              = $row['email'];
                                        $accountName        = $row['accountName'];
                                        $accountNum         = $row['accountNum'];
                                        $fullname           = $row['fullname'];
                                        $tel                = $row['tel'];
                                        $reflink            = $row['reflink'];
                                        $referee            = $row['referee'];
                                        $bank               = $row['bank'];
                                        $user_type          = $row['user_type'];

                            if ($referee == 1){

                                    ?>
                            <div class="card-body">
                                <h4>Account Name<br><?php echo $accountName?> </h4>
                                <h4>Account Number<br> </h4>
                                <h4>Bank Name<br> </h4>
                            </div>
                           <?php } } ?>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <footer class="footer">
        </footer>
    </div>

</div>

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

<script>
    $(function() {
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Orders",
                    fill: true,
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    borderWidth: 2,
                    data: [3, 2, 3, 5, 6, 5, 4, 6, 9, 10, 8, 9]
                },
                    {
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: "rgba(0, 0, 0, 0.05)",
                        borderColor: "rgba(0, 0, 0, 0.05)",
                        borderWidth: 2,
                        data: [5, 4, 10, 15, 16, 12, 10, 13, 20, 22, 18, 20]
                    }
                ]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    intersect: false
                },
                hover: {
                    intersect: true
                },
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                elements: {
                    point: {
                        radius: 0
                    }
                },
                scales: {
                    xAxes: [{
                        reverse: true,
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: 5
                        },
                        display: true,
                        gridLines: {
                            color: "rgba(0,0,0,0)",
                            fontColor: "#fff"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    $(function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar-alt"), {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Last year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                    barPercentage: .75,
                    categoryPercentage: .5
                }, {
                    label: "This year",
                    backgroundColor: "#E8EAED",
                    borderColor: "#E8EAED",
                    hoverBackgroundColor: "#E8EAED",
                    hoverBorderColor: "#E8EAED",
                    data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                    barPercentage: .75,
                    categoryPercentage: .5
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
</script>
<script>
    $(function() {
        $("#usa_map").vectorMap({
            map: "us_aea",
            backgroundColor: "transparent",
            zoomOnScroll: false,
            normalizeFunction: "polynomial",
            hoverOpacity: .7,
            hoverColor: false,
            regionStyle: {
                initial: {
                    fill: "#DCE3E8"
                }
            },
            markerStyle: {
                initial: {
                    "r": 9,
                    "fill": window.theme.primary,
                    "fill-opacity": .9,
                    "stroke": "#fff",
                    "stroke-width": 7,
                    "stroke-opacity": .4
                },
                hover: {
                    "stroke": "#fff",
                    "fill-opacity": 1,
                    "stroke-width": 1.5
                }
            },
            markers: [{
                latLng: [37.77, -122.41],
                name: "San Francisco: 375"
            }, {
                latLng: [40.71, -74.00],
                name: "New York: 350"
            }, {
                latLng: [39.09, -94.57],
                name: "Kansas City: 250"
            }, {
                latLng: [36.16, -115.13],
                name: "Las Vegas: 275"
            }, {
                latLng: [32.77, -96.79],
                name: "Dallas: 225"
            }]
        });
        setTimeout(function() {
            $(window).trigger('resize');
        }, 350)
    })
</script>
<script>
    $(function() {
        $('#datatables-dashboard-products').DataTable({
            pageLength: 5,
            lengthChange: false,
            bFilter: false,
            autoWidth: false
        });
    });
</script>


</body>

</html>