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

<script>
    var time = new Date().getHours();
    if (time < 12) {
        greeting = "Good Morning";
    } else if (time < 16) {
        greeting = "Good Afternoon";
    } else {
        greeting = "Good Evening";
    }
    document.getElementById("greet").innerHTML = greeting;
</script>

<!-- Make Deposit Modal Start -->
<div class="modal fade" id="depositmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3" style="text-align: center">
                <h2>Hello <?php echo $_SESSION['fullname']  ?></h2>
                <p class="mb-3">No need to waste time, make a deposit/investment today and get your returns in no time. Get upto 50% ROI in 48hrs.<br><strong>Note:</strong> Minimum of ₦5k and Maximum of ₦300k</p>
                <a href="deposit" class="btn btn-primary btn-lg mb-5">Make Deposit</a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#depositmodal").modal('show');
    });
</script>

<script type="text/javascript">
    function myFunction() {
        var copyText = document.getElementById("refLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    }
</script>
<!-- Make Deposit Modal End -->

<!-- Activation Fee Modal Start -->
<div class="modal fade" id="activatiomodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3" style="text-align: center">
                <h2>Hello <?php echo $_SESSION['fullname']  ?></h2>
                <p class="mb-3">No need to waste time, make a deposit/investment today and get your returns in no time. Get upto 50% ROI in 48hrs.<br><strong>Note:</strong> Minimum of ₦5k and Maximum of ₦700k</p>
                <a href="deposit" class="btn btn-primary btn-lg mb-5">Make Deposit</a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#depositmodal").modal('show');
    });
</script>

<script type="text/javascript">
    function myFunction() {
        var copyText = document.getElementById("refLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        alert("Ref link copied: " + copyText.value);
    }
</script>
<!-- Activation Fee Modal End -->

<?php include ('../components/tawkto.php'); ?>

</body>

</html>