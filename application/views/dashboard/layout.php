<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <?php $this->load->view('includes/css'); ?>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">


        <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <div class="text-center brand-link">
                <i class="fa-brands fa-whatsapp" style="font-size: 100; color: green;"></i>
                <span class="brand-text font-weight-light">WAGateway</span>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                <a href="#" class="d-block"></i> <?php echo $email; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                    <a href="<?= site_url('dashboard') ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('settings') ?>" class="nav-link">
                    <i class="nav-icon fas fa-gear"></i>
                    <p>
                        Settings
                        <span class="right badge badge-danger">New</span>
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('auth/logout') ?>" class="nav-link">
                    <i class="nav-icon fas fa-window-close"></i>
                    <p>
                        Logout
                    </p>
                    </a>
                </li>
                
            </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content">
                <!-- main content -->
                 <div class="mt-5">
                    <br>
                    <?php echo $content; ?>
                 </div>
                <!-- main content -->
            </section>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>

        <footer class="main-footer">
            <strong>Copyright &copy; 2025 <a href="https://instagram.com/burhanfauzisalam">Bukan Sarjana Komputer</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
            </div>
        </footer>
        </div>

    <?php $this->load->view('includes/js'); ?>
    <?php if (isset($scripts)) : ?>
        <?php foreach ($scripts as $script) : ?>
            <script src="<?= base_url($script); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>