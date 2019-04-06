<div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <img class="img img-responsive" style="max-width:100px; margin-top: -7px; height:40px;" src="<?= base_url('assets/image/symbol.gif'); ?>"> 
                <a class="pull-right" rel="home" href="#">
                    <h1<span class="text-info title"> &nbsp;VMS</span></h1>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <h4 class="name"><?=$sessionData['name']?></h4>
                     <?php if(isset($sessionData['user_name'])): ?>
                   <a href="<?= base_url('login/logout')?>" role="button" class="btn btn-link btn-danger pull-right alignmenu" >Logout</a>
                   <?php endif; ?>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-gears"></i>Settings
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="<?=base_url('home/getSite');?>">
                                            <i class="fas fa-clipboard"></i>Site</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img class="img img-responsive" style="max-width:100px; margin-top: -7px; height:40px;" src="<?= base_url('assets/image/symbol.gif'); ?>"> 
                                </a>
                                <a class="navbar-brand pull-right" rel="home" href="#">
                                    <h3><span class="text-danger">VMS</span></h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img class="img img-responsive" style="max-width:100px; margin-top: -7px; height:40px;" src="<?= base_url('assets/image/symbol.gif'); ?>"> 
                    </a>
                    <a class="navbar-brand pull-right" rel="home" href="#">
                        <h3<span class="text-danger">VMS</span></h3>
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img class="img img-responsive" style="max-width:100px; margin-top: -7px; height:40px;" src="<?= base_url('assets/image/symbol.gif'); ?>"> 
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                           <?php if($functionname == 'createSite'): ?>
                                               <li class="list-inline-item">Settings /
                                                   <span class="arrow">
                                                       New Site
                                                    </span>
                                               </li>
                                           <?php endif; 
                                           
                                           if($functionname == 'getSite'): ?>
                                               <li class="list-inline-item">Settings /
                                                   <span class="arrow">
                                                       Site
                                                    </span>
                                               </li>
                                           <?php endif; ?>    
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->