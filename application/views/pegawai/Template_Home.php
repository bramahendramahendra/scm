<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../../favicon.ico">

    <title>C-Mart</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/dashboard.css'); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!--Navbar Dinamis-->
            <a class="navbar-brand" href="<?php echo base_url('Home/indexPegawai'); ?>">PEGAWAI</a>

        </div>

        <!--Bagian Headear pada Dashboard-->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/Login/Valid_Login"> LogOut </a></li>
            </ul>
            <!--
            Function Searching tampilan untuk searching
            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="Search...">
            </form>
            -->
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!--Bagian Sidebar sebelah kiri pada latar monitor.-->
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">

                <li class="<?php if($this->uri->segment('1') == 'Grocery/InputDataBarang') {echo "active";} ?>">
                    <a href="<?php echo base_url('Grocery/InputDataBarang'); ?>">Input Data Barang</a>
                </li>

            </ul>

            <ul class="nav nav-sidebar">
                <li class="<?php if($this->uri->segment('1') == 'Grocery/DataBarang') {echo "active";} ?>">
                    <a href="<?php echo base_url('Grocery/DataBarang'); ?>">Data Barang</a>
                </li>

                <li class="<?php if($this->uri->segment('1') == 'Grocery/DataKeuangan') {echo "active";} ?>">
                    <a href="<?php echo base_url('Grocery/DataKeuangan'); ?>">Data Keuangan</a>
                </li>
            </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <!-- Konten Dinamis -->
            <?php $this->load->view($konten); ?>



        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="<?php echo base_url('assets/js/vendor/holder.min.js'); ?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
</body>
</html>
