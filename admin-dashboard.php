<?php 
ob_start();
?>
<?php 

include ("init.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Tamplate-SB-Admin-on-BSS.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-dark navbar-expand bg-dark sb-topnav">
            <div class="container-fluid"><button class="btn btn-link btn-sm link-light order-md-1" id="sidebarToggle" type="button"><i class="fa fa-bars" style="font-size: 20px;"></i></button><a class="navbar-brand" href="#"><img src="assets/img/desk.jpg" style="width: 28px;margin-right: 10px;border-width: 3px;border-style: solid;border-radius: 8px;">&nbsp;Your Brand</a>
                <form class="d-none d-md-inline-block order-2 ms-auto mr-0 me-md-3 my-2 my-md-0">
                    <div class="input-group"><input class="form-control" type="text" placeholder=" Search for ...">
                        <div class="input-group-append"><button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button></div>
                    </div>
                </form>
                <ul class="navbar-nav d-flex order-3 ms-auto ml-md-0">
                    <li class="nav-item d-flex d-sm-flex d-md-none justify-content-center align-items-center justify-content-sm-center" style="margin-right: 7px;">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fa fa-search" style="font-size: 25px;margin-right: 0px;"></i> </a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </li>
                    <li class="nav-item d-flex justify-content-center align-items-center">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle active" aria-expanded="false" data-bs-toggle="dropdown" href="#">&nbsp;<img class="rounded-circle" src="assets/img/boy.jpg" style="width: 40px;border-width: 2px;border-style: solid;"></a>
                            <div class="dropdown-menu dropdown-menu-end text-start shadow" style="margin-top: 16px;"><a class="dropdown-item" href="#">Pengaturan</a><a class="dropdown-item" href="#">Log Aktivitas</a><a class="dropdown-item" href="#">Pelanggaran</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Keluar</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <div id="sidenavAccordion" class="sb-sidenav accordion sb-sidenav-dark">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div>
                                <div class="sb-sidenav-menu-heading"><span>Labeling</span></div><a class="nav-link active" href="#">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Dashboard</span>
                                </a>
                            </div>
                            <div>
                                <div class="sb-sidenav-menu-heading"><span>Labeling</span></div><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapseLayouts" data-bs-toggle="collapse" data-bs-target="#collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Accordion</span>
                                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                </a>
                                <div id="collapseLayouts" class="collapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <div class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Menu Accordion</a><a class="nav-link" href="#">Menu Accordion</a></div>
                                </div>
                            </div>
                            <div>
                                <div class="sb-sidenav-menu-heading"><span>Labeling</span></div><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="collapse2" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div><span>Accordion 2 Layer</span>
                                    <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                </a>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-bs-parent="#sidenavAccordion">
                                    <div id="sidenavAccordionPages" class="sb-sidenav-menu-nested nav accordion"><a class="nav-link collapsed" href="#" aria-expanded="false" aria-controls="pagesCollapseAuth" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth"><span>Menu Item</span>
                                            <div class="sb-sidenav-collapse-arrow"><i class="fa fa-angle-down"></i></div>
                                        </a>
                                        <div id="pagesCollapseAuth" class="collapse" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <div class="sb-sidenav-menu-nested nav"><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a><a class="nav-link" href="#">Menu Item</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><span>Logged as : David Aprilio</span></div>
                    </div>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main></main>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>