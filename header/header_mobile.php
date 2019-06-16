<?php $user_data = user_data_db();?>

<header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="/images/dlr_logo_inv.png" width=50 height=50  /> <font color="white">&nbsp;Fuel Cell Cargo Pedelecs</font>
                        </a>

                        <!-- com login -->
                        <?php if($_SESSION['user_id'] != NULL) { ?>
                        
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            <li class="has-sub">
                                <a class="js-arrow" href="/realdata/index.php">
                                    <i class="fas fa-motorcycle"></i>Real Data</a>
                            </li>
                            <li>
                                <a href="/about/">
                                    <i class="fas fa-table"></i>About</a>
                            </li>
                            <li>
                                <a href="/faq/">
                                    <i class="fas fa-table"></i>FAQ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        

        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style clearfix js-item-menu">
                        <div class="image">
                            <img src="/images/icon/daniel.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" color=#000000; href="#"><?=$user_data['complete_name']?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="/images/icon/daniel.jpg" alt="John Doe" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?=$user_data['complete_name']?></a>
                                    </h5>
                                    <span class="email"><?=$user_data['email']?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                            
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="/logout.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <?php } ?>
        <!-- sem login -->    

        <?php if($_SESSION['user_id'] == NULL) { ?>
            <div class="sub-header-mobile d-block d-lg-none">
                <div class="header__tool">
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="content">
                                <a class="js-acc-btn" href="#">Login/Register</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                    
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="/login/">
                                            <i class="zmdi zmdi-account"></i>Login</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="/register/">
                                            <i class="zmdi zmdi-account"></i>Register</a>
                                    </div>
                        
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

</header>