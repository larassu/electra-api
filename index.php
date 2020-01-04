<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="http://rabbit-media.net/favicon.ico" type="image/x-icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/modules/sweetalert/sweetalert2.css">
    <!-- Start GA -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
</head>
<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250"
                           style="width: 250px;">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>
                    <div class="search-result">
                        <div class="search-header">
                            Histories
                        </div>
                        <div class="search-item">
                            <a href="#">How to hack NASA using CSS</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                            <a href="#">Kodinger.com</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                            <a href="#">#Stisla</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-header">
                            Result
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png"
                                     alt="product">
                                oPhone S9 Limited Edition
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png"
                                     alt="product">
                                Drone X2 New Gen-7
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png"
                                     alt="product">
                                Headphone Blitz
                            </a>
                        </div>
                        <div class="search-header">
                            Projects
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <div class="search-icon bg-danger text-white mr-3">
                                    <i class="fas fa-code"></i>
                                </div>
                                Stisla Admin Template
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <div class="search-icon bg-primary text-white mr-3">
                                    <i class="fas fa-laptop"></i>
                                </div>
                                Create a new Homepage Design
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                             class="nav-link nav-link-lg message-toggle beep"><i
                            class="far fa-envelope"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Messages
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-message">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                                    <div class="is-online"></div>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Kusnaedi</b>
                                    <p>Hello, Bro!</p>
                                    <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Dedik Sugiharto</b>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                                    <div class="is-online"></div>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Agung Ardiansyah</b>
                                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Ardian Rahardiansyah</b>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <div class="time">16 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-avatar">
                                    <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Alfa Zulkarnain</b>
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    <div class="time">Yesterday</div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                             class="nav-link notification-toggle nav-link-lg beep"><i
                            class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-icon bg-primary text-white">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Template update is available now!
                                    <div class="time text-primary">2 Min Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="far fa-user"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                    <div class="time">10 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-success text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                    <div class="time">12 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-danger text-white">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Low disk space. Let's clean it!
                                    <div class="time">17 Hours Ago</div>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item">
                                <div class="dropdown-item-icon bg-info text-white">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    Welcome to Stisla template!
                                    <div class="time">Yesterday</div>
                                </div>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block">Hi, Laras</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="features-profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="features-activities.html" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                        </a>
                        <a href="features-settings.html" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2" tabindex="1"
             style="overflow: hidden; outline: none; touch-action: none;">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.php">Laras Sulistyorini</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.php">L's</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="active">
                        <a href="index.php" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                    </li>
                </ul>

                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">

                </div>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content" style="min-height: 572px;">
            <section class="section">
                <div class="section-header">
                    <h1>Data Pelanggan</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
                        <div class="breadcrumb-item"><a href="#">Modules</a></div>
                        <div class="breadcrumb-item">DataTables</div>
                    </div>
                </div>

                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-header-form">
                                        <button onclick="createPelanggan()" class="btn btn-primary text-uppercase">
                                            <strong><i class="fas fa-plus mr-2"></i>Create</strong>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dt-pelanggan">
                                            <thead>
                                            <tr>
                                                <th class="text-center" width="5%">ID</th>
                                                <th width="25%">Name</th>
                                                <th width="15%">Phone</th>
                                                <th width="30%">Address</th>
                                                <th class="text-center" width="25%">Action</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- form-create-update -->
            <div class="modal fade" id="pelangganModal" tabindex="-1" role="dialog"
                 aria-labelledby="pelangganModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Data Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="form-pelanggan" method="post">
                            <input type="hidden" name="_method">
                            <div class="modal-body">
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="name">Nama Pelanggan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input id="name" type="text" maxlength="191" name="name"
                                                   class="form-control" placeholder="Nama lengkap" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="phone">Nomor Telepon</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input id="phone" type="text" maxlength="191" name="phone"
                                                   onkeypress="return numberOnly(event, false)"
                                                   class="form-control" placeholder="Nomor telepon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="address">Address</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="fa fa-map-marked-alt"></i></span>
                                            </div>
                                            <textarea id="address" name="address" class="form-control"
                                                      rows="3" placeholder="Alamat lengkap" required
                                                      style="resize: vertical;min-height:50px;height:100%;"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- form-delete -->
            <form id="form-delete" method="post">
                <input type="hidden" name="_method" value="DELETE">
            </form>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright © 2019
                <div class="bullet"></div>
                Design By <a href="http://rabbit-media.net">Laras Sulistyorini</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>
<div id="ascrail2000" class="nicescroll-rails nicescroll-rails-vr"
     style="width: 8px; z-index: 892; cursor: default; position: fixed; top: 0px; left: 242px; height: 667px; touch-action: none; opacity: 0; display: block;">
    <div class="nicescroll-cursors"
         style="position: relative; top: 0px; float: right; width: 6px; height: 350px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;"></div>
</div>
<div id="ascrail2000-hr" class="nicescroll-rails nicescroll-rails-hr"
     style="height: 8px; z-index: 892; top: 659px; left: 0px; position: fixed; cursor: default; display: none; width: 242px; opacity: 0;">
    <div class="nicescroll-cursors"
         style="position: absolute; top: 0px; height: 6px; width: 250px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"></div>
</div>

<!-- General JS Scripts -->
<script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/datatables/datatables.min.js"></script>
<script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="assets/modules/datatables/Buttons-1.5.6/js/buttons.dataTables.min.js"></script>
<script src="assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Page Specific JS File -->
<script src="assets/js/page/modules-datatables.js"></script>
<script src="assets/modules/sweetalert/sweetalert.min.js"></script>

<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    var table;

    $(function () {
        var export_filename = 'Data Pelanggan';
        table = $("#dt-pelanggan").DataTable({
            dom: "<'row'<'col-sm-12 col-md-3'l><'col-sm-12 col-md-5'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            ajax: {
                url: 'https://www.hnfarchery.com/magangelectra/rest-api/person',
                dataSrc: '',
            },
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'phone'},
                {data: 'address'},
            ],
            // order: [ 0, 'desc' ],
            columnDefs: [
                {targets: [0, 4], className: 'text-center'},
                {
                    targets: 4, sortable: false, searchable: false, data: null,
                    defaultContent:
                        '<div class="btn-group">' +
                        '<button class="btn btn-warning btn-edit" data-toggle="tooltip" title="Edit" type="button" ' +
                        'data-placement="left"><i class="fa fa-edit"></i></button>' +
                        '<button class="btn btn-danger btn-delete" data-toggle="tooltip" title="Delete" ' +
                        'data-placement="right"><i class="fas fa-trash-alt"></i></button></div>'
                }
            ],
            buttons: [
                {
                    text: '<strong class="text-uppercase"><i class="far fa-clipboard mr-2"></i>Copy</strong>',
                    extend: 'copy',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    },
                    className: 'btn btn-warning assets-export-btn export-copy ttip'
                }, {
                    text: '<strong class="text-uppercase"><i class="far fa-file-excel mr-2"></i>Excel</strong>',
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    },
                    className: 'btn btn-success assets-export-btn export-xls ttip',
                    title: export_filename,
                    extension: '.xls'
                }, {
                    text: '<strong class="text-uppercase"><i class="fa fa-print mr-2"></i>Print</strong>',
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    },
                    className: 'btn btn-info assets-select-btn export-print'
                }, {
                    text: '<strong class="text-uppercase"><i class="fa fa-file-pdf mr-2"></i>PDF</strong>',
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1, 2, 3]
                    },
                    className: 'btn btn-danger assets-select-btn export-pdf'
                }
            ],
            fnDrawCallback: function (oSettings) {
                $('[data-toggle="tooltip"]').tooltip();

                $('#dt-pelanggan tbody').on('click', '.btn-edit', function () {
                    var data = table.row($(this).parents('tr')).data();

                    $("#pelangganModal .modal-title").html('Edit Data #<strong>'+data.name+'</strong>');
                    $("#form-pelanggan").attr('action', 'https://www.hnfarchery.com/magangelectra/rest-api/person/'+data.id+'/update');
                    $("#form-pelanggan input[name=_method]").val('PUT');
                    $("#name").val(data.name);
                    $("#phone").val(data.phone);
                    $("#address").val(data.address);

                    $("#pelangganModal").modal('show');
                });

                $('#dt-pelanggan tbody').on('click', '.btn-delete', function () {
                    var data = table.row($(this).parents('tr')).data();
                    swal({
                        title: 'Hapus Data Pelanggan',
                        text: 'Apakah Anda yakin menghapus data pelanggan [' + data.name + ']? Anda tidak dapat mengembalikannya!',
                        icon: 'warning',
                        dangerMode: true,
                        buttons: ["Tidak", "Ya"],
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                    }).then((confirm) => {
                        if (confirm) {
                            $.ajax({
                                type: "POST",
                                url: 'https://www.hnfarchery.com/magangelectra/rest-api/person/' + data.id + '/delete',
                                data: new FormData($("#form-delete")[0]),
                                contentType: false,
                                processData: false,
                                success: function (response) {
                                    if (response.status == 200) {
                                        swal({
                                            title: 'Success',
                                            text: 'Data pelanggan [' + data.name + '] berhasil dihapus!',
                                            icon: 'success',
                                            buttons: "OK",
                                            closeOnEsc: false,
                                            closeOnClickOutside: false,
                                        }).then((confirm) => {
                                            if (confirm) {
                                                window.location.href = 'index.php';
                                            }
                                        });
                                    }
                                },
                                error: function () {
                                    swal('Oopss..', 'Something went wrong! Please refresh your browser.', 'error');
                                }
                            });
                        }
                    });
                });
            },
        });
    });

    function createPelanggan() {
        $("#pelangganModal .modal-title").text('Tambah Data Pelanggan');
        $("#form-pelanggan").attr('action', 'https://www.hnfarchery.com/magangelectra/rest-api/person/create');
        $("#form-pelanggan input[name=_method]").val('POST');
        $("#name, #phone, #address").val('');

        $("#pelangganModal").modal('show');
    }

    $("#form-pelanggan").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $("#form-pelanggan").attr('action'),
            data: new FormData($("#form-pelanggan")[0]),
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == 200) {
                    $("#pelangganModal").modal('hide');

                    swal({
                        title: 'Success',
                        text: response.message,
                        icon: 'success',
                        buttons: "OK",
                        closeOnEsc: false,
                        closeOnClickOutside: false,
                    }).then((confirm) => {
                        if (confirm) {
                            window.location.href = 'index.php';
                        }
                    });
                }
            },
            error: function () {
                swal('Oopss..', 'Something went wrong! Please refresh your browser.', 'error');
            }
        });
    });

    function numberOnly(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27) || (key == 188)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }
</script>
</body>
</html>
