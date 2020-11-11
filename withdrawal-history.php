<?php include ('./components/header.php'); ?>
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Transactions
                </h1>
            </div>
            <div class="row">
                <div class="col-xxl-9">
                    <div class="card">
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
                            <h5 class="card-title mb-0">Clients</h5>
                        </div>
                        <div class="card-body">
                            <table id="datatables-clients" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Garrett Winters</td>
                                    <td>Good Guys</td>
                                    <td>garrett@winters.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Ashton Cox</td>
                                    <td>Levitz Furniture</td>
                                    <td>ashton@cox.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Sonya Frost</td>
                                    <td>Child World</td>
                                    <td>sonya@frost.com</td>
                                    <td><span class="badge badge-danger">Deleted</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Jena Gaines</td>
                                    <td>Helping Hand</td>
                                    <td>jena@gaines.com</td>
                                    <td><span class="badge badge-warning">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Quinn Flynn</td>
                                    <td>Good Guys</td>
                                    <td>quinn@flynn.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Charde Marshall</td>
                                    <td>Price Savers</td>
                                    <td>charde@marshall.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Haley Kennedy</td>
                                    <td>Helping Hand</td>
                                    <td>haley@kennedy.com</td>
                                    <td><span class="badge badge-danger">Deleted</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Good Guys</td>
                                    <td>tatyana@fitzpatrick.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Michael Silva</td>
                                    <td>Red Robin Stores</td>
                                    <td>michael@silva.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Yuri Berry</td>
                                    <td>The Wiz</td>
                                    <td>yuri@berry.com</td>
                                    <td><span class="badge badge-danger">Deleted</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Doris Wilder</td>
                                    <td>Red Robin Stores</td>
                                    <td>doris@wilder.com</td>
                                    <td><span class="badge badge-warning">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Angelica Ramos</td>
                                    <td>The Wiz</td>
                                    <td>angelica@ramos.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Jennifer Chang</td>
                                    <td>Helping Hand</td>
                                    <td>jennifer@chang.com</td>
                                    <td><span class="badge badge-warning">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Brenden Wagner</td>
                                    <td>The Wiz</td>
                                    <td>brenden@wagner.com</td>
                                    <td><span class="badge badge-warning">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Fiona Green</td>
                                    <td>The Sample</td>
                                    <td>fiona@green.com</td>
                                    <td><span class="badge badge-warning">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Suki Burks</td>
                                    <td>The Sample</td>
                                    <td>suki@burks.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Prescott Bartlett</td>
                                    <td>The Sample</td>
                                    <td>prescott@bartlett.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Gavin Cortez</td>
                                    <td>Red Robin Stores</td>
                                    <td>gavin@cortez.com</td>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Unity Butler</td>
                                    <td>Price Savers</td>
                                    <td>unity@butler.com</td>
                                    <td><span class="badge badge-warning">Inactive</span></td>
                                </tr>
                                <tr>
                                    <td><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                    <td>Howard Hatfield</td>
                                    <td>Price Savers</td>
                                    <td>howard@hatfield.com</td>
                                    <td><span class="badge badge-warning">Inactive</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3">
                    <div class="card">
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
                            <h5 class="card-title mb-0">Angelica Ramos</h5>
                        </div>
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
                                    <img src="img/avatars/avatar-3.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
                                </div>
                                <div class="col-sm-9 col-xl-12 col-xxl-8">
                                    <strong>About me</strong>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes, nascetur ridiculus mus.</p>
                                </div>
                            </div>

                            <table class="table table-sm my-2">
                                <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>Charissa Hilt</td>
                                </tr>
                                <tr>
                                    <th>Company</th>
                                    <td>Matrix Interior Design</td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td>Desktop publisher</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>charissahilt@rhyta.com</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>+1234123123123</td>
                                </tr>
                                <tr>
                                    <th>Website</th>
                                    <td>hispanomarketer.com</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><span class="badge badge-success">Active</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include ('./components/footer.php'); ?>