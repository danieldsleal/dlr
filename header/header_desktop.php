
<?php $user_data = user_data_db(); ?>

<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="#">
                    <img src="/images/dlr_logo_inv.png" width=50 height=50 alt="CoolAdmin" /><font color="white">&nbsp;Fuel Cell Cargo Pedelecs</font>
                </a>
            </div>

            <!-- com login -->
            <?php if($_SESSION['user_id'] != NULL) { ?>

                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li class="has-sub">
                            <a href="/realdata/">
                                <i class="fas fa-motorcycle"></i>Real-Time Data
                                <span class="bot-line"></span>
                            </a>
                        </li>
                    
                        <li>
                            <a href="/monitoring/">
                            <i class="fas fa-chart-line"></i>
                                <span class="bot-line"></span>Monitoring</a>
                        </li>

                        <li>
                            <a href="/performance/">
                            <i class="fas fa-chart-line"></i>
                                <span class="bot-line"></span>Performance</a>
                        </li>

                        <li>
                            <a href="/about/">
                            <i class="fas fa-question"></i>
                            <span class="bot-line"></span>About</a>
                        </li>
                    
                        <li class="has-sub">
                            <a href="/faq/">
                                <i class="fas fa-question"></i>
                                <span class="bot-line"></span>FAQ</a>
                        </li>
                    </ul>
                 </div>

                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="/images/icon/daniel.jpg" alt="John Doe" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?=$user_data['complete_name']?></a>
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
                                    <span class="email"><?=$user_data["email"]?></span>
                                </div>
                            </div>
                        
                            <div class="account-dropdown__footer">
                                <a href="/logout.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                            </div>
                </div>
            <?php } ?>


            <!-- sem login -->    

            <?php if($_SESSION['user_id'] == NULL) { ?>
                
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
            <?php } ?>
                        
                        
                
        </div>
    </div>
    
</header>