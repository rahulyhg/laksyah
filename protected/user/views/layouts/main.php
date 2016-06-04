<!DOCTYPE html>
<html lang="en">
        <head>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">
                <title>Laksyah</title>
                <link rel="icon" href="<?php echo Yii::app()->baseUrl; ?>/images/fav.png" type="image/x-icon" />
                <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/images/fav.png" type="image/x-icon" />


                <!-- Bootstrap core CSS -->
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
                <!-- Custom styles for this template -->
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/slick.css" rel="stylesheet">
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/slick-theme.css" rel="stylesheet">
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" rel="stylesheet">
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui.min.css" rel="stylesheet">
                <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mystyle.css">
                <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.fancybox.css" rel="stylesheet">

<!--                <script src="<?php echo yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>-->
                <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
                <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.countdown.min.js"></script>

                <script>
                        var baseurl = "<?php print Yii::app()->request->baseUrl . "/index.php/"; ?>";
                        var basepath = "<?php print Yii::app()->basePath; ?>";</script>
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!--[if lt IE 9]>
                      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                    <![endif]-->
        </head>

        <body>
                <script>

                        $(document).ready(function () {
<?php
if (Yii::app()->user->hasFlash('login_list')):
        ?>
                                        $("#login").modal('show');
<?php endif; ?>
                        });</script>

                <div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>
                                        <div class="modal-body">
                                                <!-- Nav tabs -->


                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active login_popup " id="home">
                                                                <h2>SIGN IN</h2>
                                                                <h4>Sign in information</h4>
                                                                <?php if (Yii::app()->user->hasFlash('login_list')): ?>
                                                                        <div class="alert alert-danger mesage">
                                                                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                                                <strong>sorry!</strong><?php echo Yii::app()->user->getFlash('login_list'); ?>
                                                                        </div>
                                                                <?php endif; ?>
                                                                <form  name="login" id="login_form" action="<?= Yii::app()->baseUrl; ?>/index.php/Site/login" method="POST">
                                                                        <label>Email Address</label>
                                                                        <input class="form-control" type="text" name="UserDetails[email]" autocomplete="off" />
                                                                        <label>Password</label>
                                                                        <input class="form-control" type="password" name="UserDetails[password]" autocomplete="off" />
                                                                        <p>
                                                                                <?php // echo CHtml::link('Forgot Password?', array('forgotPassword/index'), array('class' => 'forgot')); ?>
                                                                                <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/forgotPassword/" class="forgot">Forgot Password?</a></p>
                                                                        <input type="submit"  class ="btn-primary btn-full" value="SIGN IN" />
                                                                </form>
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                        </div>
                </div>

                <header>
                        <div class="top-bar">
                                <div class="container">
                                        <div class="hidden-sm hidden-md hidden-lg pull-right mobile_search_btn"><i class="fa fa-search"></i></div>
                                        <div class="searc_box_mobile">
                                                <input class="form-control" type="text" placeholder="Search style number or keyword">
                                                <button class="search"><i class="fa fa-search"></i></button>
                                        </div>
                                        <div class="row">
                                                <div class="col-sm-5 col-md-6 mobile-inline">
                                                        <ul>
                                                                <li> <?php echo CHtml::link('<i class="fa fa-calendar"></i> <span class="hidden-xs">Made to </span>Measure', array('site/BookAppointment')); ?></li>
                                                                <li  class="hidden-mobile">
                                                                        <?php echo CHtml::link('<i class="fa fa-map-marker"></i> Location', array('site/LocationLakysah')); ?></li>
                                                        </ul>
                                                </div>
                                                <!-- / End Top Left-->
                                                <div class="col-sm-7 text-right col-md-6 mobile-inline">
                                                        <ul>
                                                                <li class="hidden-mobile"> <?php echo CHtml::link('<i class="fa fa-envelope"></i><span class="hidden-xs">LEAVE A </span>MESSAGE', array('site/Leavemessage')); ?></li>
                                                                <li><a href="#"><i class="fa fa-mobile-phone"></i> MOBILE APP</a></li>

                                                                <li class="has_dropdown"><a href="#" class="active_currency">
                                                                                <?php if (isset(Yii::app()->session['currency'])) { ?>
                                                                                        <i class="fa currency_symbol"><img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/currency/<?php echo Yii::app()->session['currency']['id']; ?>.<?php echo Yii::app()->session['currency']['image']; ?>" width="16" height="11" alt=""/>
                                                                                        </i> <?php echo Yii::app()->session['currency']['currency_code']; ?>
                                                                                <?php } else { ?>
                                                                                        <i class="fa currency_symbol"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/india-home.jpg" width="16" height="11" alt=""/></i> INR
                                                                                <?php } ?>
                                                                                <i class="fa fa-angle-down"></i></a>
                                                                        <div class="laksyah_dropdown currency_drop">
                                                                                <ul class="drop_menu">
                                                                                        <?php
                                                                                        $currencies = Currency::model()->findAll();

                                                                                        foreach ($currencies as $currency) {
                                                                                                ?>
                                                                                                <li>
                                                                                                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php/Site/CurrencyChange/id/<?= $currency->id; ?>" class="currency" code="<?= $currency->id; ?>">
                                                                                                                <i class="fa currency_symbol"><img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/currency/<?= $currency->id; ?>.<?= $currency->image; ?>" width="16" height="11" alt=""/></i><?= $currency->currency_code; ?></a></li>
                                                                                        <?php } ?>

                                                                                </ul>
                                                                        </div>
                                                                </li>

                                                        </ul>
                                                </div>
                                                <!-- / End Top Right-->
                                        </div>

                                </div>
                        </div>
                        <!-- /End Top Par-->
                        <div class="menu_bar">
                                <div class="logo-bar">
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-sm-5 hidden-xs">


                                                                <form action="<?php echo Yii::app()->request->baseUrl; ?>/index.php/searching/SearchList" method="post">
                                                                        <div class="search_box">
                                                                                <?php $this->widget("application.user.components.MainSearch"); ?>
                                                                                <button type="submit" value="search" name="search" class="search" ><i class="fa fa-search"></i></button>
                                                                        </div>
                                                                </form>

                                                        </div>
                                                        <div class="col-sm-2 logo_col col-xs-4"><a href="<?php echo Yii::app()->baseUrl; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" width="218" height="103" alt=""/></a></div>
                                                        <div class="col-sm-5 col-xs-8">
                                                                <?php
                                                                if (isset(Yii::app()->session['user']['id'])) {
                                                                        $cart_items = Cart::model()->findAllByAttributes(array('user_id' => Yii::app()->session['user']['id']));
                                                                        $counts = count($cart_items);
                                                                } else {
                                                                        if (isset(Yii::app()->session['temp_user'])) {
                                                                                $cart_items = Cart::model()->findAllByAttributes(array('session_id' => Yii::app()->session['temp_user']));
                                                                                $counts = count($cart_items);
                                                                        } else {
                                                                                $counts = 0;
                                                                        }
                                                                }
                                                                ?>
                                                                <ul class="user_nav">

                                                                        <?php if (isset(Yii::app()->session['user'])) { ?>

                                                                                <a href="<?php echo Yii::app()->baseUrl; ?>/index.php/CreditHistory" style="color: #414042;">  <li class="my_credit">
                                                                                                <div class="wallet_icon"></div>
                                                                                                <div class="wallet_item">
                                                                                                        <h6>My Credit</h6>
                                                                                                        <h5><?php echo Yii::app()->Currency->convert(Yii::app()->session['user']['wallet_amt']); ?></h5>

                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                        </li> </a>
                                                                                <li class="my_account has_dropdown"><span class="account_icon"><i class="fa fa-user"></i></span><span class="account_title">Hi <?php echo Yii::app()->session['user']['first_name']; ?></span> <i class="fa fa-angle-down"></i>
                                                                                        <div class="laksyah_dropdown">
                                                                                                <ul class="drop_menu">
                                                                                                        <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount" class="currency" >My Account</a></li>
                                                                                                        <li><?php echo CHtml::link('Log Out', array('site/Logout'), array('class' => 'currency')); ?></li>
                                                    <!--                                                    <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount/Mywishlists" class="currency" >My WishList</a></li>
                                                                                                <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount/Myordernew" class="currency" >My Orders</a></li>
                                                                                                <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount/SizeChartType" class="currency" >My Size Chart</a>
                                                                                                <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount/Addressbook" class="currency" >Address Book</a></li>
                                                                                                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/cart/Mycart" class="currency" >My Cart</a></li>
                                                                                                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/Myaccount/Makepayment" class="currency" >Make A Payment</a></li>-->


                                                                                                </ul>
                                                                                        </div>
                                                                                </li>
                                                                                <li class="shopping_bag has_dropdown">
                                                                                        <div class="cart_icon">
                                                                                                <div class="cart_items"></div>
                                                                                                <i class="fa fa-shopping-bag"></i></div><span class="bag_title">Shopping Bag </span><span class="amount"></span>
                                                                                        <div class="laksyah_dropdown  cart_box" id="cart_box">
                                                                                        </div>
                                                                                </li>

                                                                                <li class="hidden-lg hidden-md hidden-sm"><div class="navbar-header">
                                                                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                                                                        </div></li>
                                                                        <?php } else { ?>
                                                                                <li><a  data-toggle="modal" data-target="#login" class="currency lgn_main">Login</a></li>
                                                                                <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/site/register" class="currency lgn_main" >Register</a></li>
                                                                                <!--                                                                        <li class="my_credit">
                                                                                                                                                                <div class="wallet_icon"></div>
                                                                                                                                                                <div class="wallet_item">
                                                                                                                                                                        <h6>My Credit</h6>
                                                                                                                                                                        <h5><?php echo Yii::app()->Currency->convert(0); ?></h5>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="clearfix"></div>
                                                                                                                                                        </li>-->
                                                <!--                                        <li class="my_account has_dropdown"><span class="account_icon"><i class="fa fa-user"></i></span><span class="account_title">Account</span> <i class="fa fa-angle-down"></i>
                                                                                    <div class="laksyah_dropdown">
                                                                                        <ul class="drop_menu">
                                                                                            <li><a  data-toggle="modal" data-target="#login">Login</a></li>
                                                                                            <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/site/register" class="currency" >Register</a></li>
                                                                                            <li><a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount/Mywishlists" class="currency" >My WishList</a></li>
                                                                                            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/cart/Mycart" class="currency" >My Cart</a></li>

                                                                                        </ul>
                                                                                    </div>
                                                                                </li>-->

                                                                                <li class="shopping_bag has_dropdown cart_btn">
                                                                                        <div class="cart_icon">
                                                                                                <div class="cart_items"><?php //echo $counts;                                                   ?></div>
                                                                                                <i class="fa fa-shopping-bag"></i></div>
                                                                                        <span class="bag_title">Shopping Bag </span><span class="amount"></span>
                                                                                        <div class="laksyah_dropdown  cart_box" id="cart_box">

                                                                                        </div>
                                                                                </li>

                                                                                <li class="hidden-lg hidden-md hidden-sm"><div class="navbar-header">
                                                                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                                                                        </div></li>
                                                                        <?php } ?>
                                                                </ul>
                                                                <!-- / User menu -->
                                                                <div class="clearfix"></div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <!-- /Logo Bar-->

                                <div class="container">
                                        <div class="navbar" role="navigation">

                                                <div class="collapse navbar-collapse">
                                                        <ul class="nav navbar-nav main-nav">
                                                                <li class="active"><?php echo CHtml::link('WOMEN', array('products/category', 'name' => 'women')); ?></li>
                                                                <li class="seperator"><i class="fa fa-circle"></i></li>
                                                                <li><?php echo CHtml::link('CELEB STYLE', array('products/category', 'name' => 'celeb-style')); ?></li>
                                                                <li class="seperator"><i class="fa fa-circle"></i></li>
                                                                <li><?php echo CHtml::link('NEW LOOK', array('products/category', 'name' => 'new-look')); ?></li>
                                                                <li class="seperator"><i class="fa fa-circle"></i></li>
                                                                <li><?php echo CHtml::link('FESTIVE', array('products/category', 'name' => 'festive')); ?></li>
                                                                <li class="seperator"><i class="fa fa-circle"></i></li>
                                                                <li><?php echo CHtml::link('DAILY WEAR', array('products/category', 'name' => 'daily-wear')); ?>
                                                                <li class="seperator"><i class="fa fa-circle"></i></li>
                                                                <li><?php echo CHtml::link('DEAL of the day', array('products/deal')); ?></li>
                                                                <li class="seperator"><i class="fa fa-circle"></i></li>
                                                                <li><?php echo CHtml::link('Laksyah Gift Cards', array('site/GiftCard')); ?></li>
                                                        </ul>
                                                </div>
                                                <!--/.nav-collapse -->
                                        </div>
                                </div>
                        </div>

                </header>
                <!-- /End of Header -->

                <?php echo $content; ?>




                <footer>
                        <div class="footer-head">
                                <div class="container text-center">
                                        <h2>LAKSYAH <em>by</em> kavya madhavan</h2>
                                </div>
                        </div>
                        <div class="footer_content">
                                <div class="container">
                                        <div class="footer-main">
                                                <div class="container">
                                                        <div class="row">
                                                                <div class="col-md-2 col-sm-2 ship-new"> <img src="<?php echo yii::app()->request->baseUrl; ?>/images/worldwide-shipping.png" width="130">
                                                                        <!-- <h4 class="shippind-world"><i class="fa fa-globe"></i> <br />We Ship <br/ > Worldwide</h4>-->
                                                                </div>
                                                                <div class="col-md-8 col-sm-8">
                                                                        <div class="row">
                                                                                <div class="col-md-4 col-sm-4 col-xs-6 footer-contact">
                                                                                        <h4>Contact Us<span class="footer-bdr"></span></h4>
                                                                                        <p>Tel: +91 914 220 2222 <br>
                                                                                                support@laksyah.com <br>
                                                                                                Mon to Sat 9.30am to 6.30pm IST</p>
                                                                                </div>
                                                                                <div class="col-xs-6 col-sm-4 col-md-4">
                                                                                        <h4>Visit Us<span class="footer-bdr"></span></h4>
                                                                                        <p>The Design House, <br>
                                                                                                C-3, GCDA House, Mavelipuram,<br>
                                                                                                Kakkanad, kochi <br>
                                                                                                <a  class="google-map-tag" href="https://www.google.com/maps?ll=10.01837,76.343789&z=15&t=m&hl=en-US&gl=IN&mapclient=embed&cid=6012272874496110969" target="_blank">Google Map</a> </p>
                                                                                </div>
                                                                                <div class="clearfix visible-xs"></div>
                                                                                <div class="col-md-4 col-sm-4  footer-follow">
                                                                                        <h4>Follow Us<span class="footer-bdr"></span></h4>
                                                                                        <p><?php echo CHtml::link('www.laksyah.com', array('url' => 'www.laksyah.com'), array('target' => '_blank')); ?></p>
                                                                                        <ul class="social-icons">
                                                                                                <?php
                                                                                                $inst = SocialMedia::model()->findByPk(4);
                                                                                                $you = SocialMedia::model()->findByPk(2);
                                                                                                $face = SocialMedia::model()->findByPk(1);
                                                                                                $twi = SocialMedia::model()->findByPk(3);
                                                                                                $pin = SocialMedia::model()->findByPk(5);
                                                                                                ?>
                                                                                                <li><?php echo CHtml::link('<i class="fa fa-instagram"></i>', $inst->link, array('target' => '_blank'), array('class' => 'instagram')); ?></li>
                                                                                                <li><?php echo CHtml::link('<i class="fa fa-youtube"></i>', $you->link, array('target' => '_blank'), array('class' => 'youtube')); ?></li>
                                                                                                <li><?php echo CHtml::link('<i class="fa fa-facebook"></i>', $face->link, array('target' => '_blank'), array('class' => 'facebook')); ?></li>
                                                                                                <li><?php echo CHtml::link('<i class="fa fa-twitter"></i>', $twi->link, array('target' => '_blank'), array('class' => 'twitter')); ?></li>
                                                                                                <li><?php echo CHtml::link('<i class="fa fa-pinterest-p"></i>', $pin->link, array('target' => '_blank'), array('class' => 'pinterest')); ?></li>

                                                                                        </ul>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-2 col-sm-2  ship-new"> <img src="<?php echo yii::app()->request->baseUrl; ?>/images/india-shipping.png" width="130">
                                                                        <!-- <h4 class="shippind-world"><i class="fa fa-globe"></i> <br />We Ship <br/ > Worldwide</h4>-->
                                                                </div>
                                                        </div>
                                                        <div id="back-to-top" style="display: block;"> <a href="#top" class="back-to-top" style="display: block;"></a> </div>
                                                </div>
                                        </div>
                                        <?php
                                        $measurement = MeasurementPdfs::model()->findByPk(1);
                                        $file = "../uploads/measurement_pdf/" . $measurement->id . "." . $measurement->file;
                                        ?>
                                        <div class="footer-menu">
                                                <div class="container">
                                                        <ul>
                                                                <li><?php echo CHtml::link('About Us', array('site/AboutUs')); ?> | </li>
                                                                <li><?php echo CHtml::link('Contact  Us', array('site/ContactLakysah')); ?> | </li>
                                                                <li><?php echo CHtml::link('Download Measurement', array($file), array('download' => true)) ?> | </li>
                                                                <li><?php echo CHtml::link('Policies', array('site/ShippingPolicy')); ?> | </li>
                                                                <li><?php echo CHtml::link('Product Submission', array('site/productsubmission')); ?> | </li>
                                                                <li><a href="#">Careers</a>|</li>
                                                                <li><?php echo CHtml::link('Terms & Policies', array('site/Terms')); ?> | </li>
                                                                <li><?php echo CHtml::link('Q&A', array('site/Faq')); ?></li>
                                                        </ul>
                                                        <div id="back-to-top" style="display: block;"> <a class="back-to-top" style="display: block;"></a> </div>
                                                </div>
                                        </div>
                                        <div class="footer_bottom">
                                                <div class="container">
                                                        <div class="col-card"> <span class="text_RR"><img src="<?php echo yii::app()->request->baseUrl; ?>/images/card-icons.png"></span>
                                                                <p class="powered">© laksyah.com 2016. All Rights Reserved</p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="backto_top"><img src="<?php echo yii::app()->request->baseUrl; ?>/images/back-top.png" alt=""/></div>
                </footer>
                <!-- Bootstrap core JavaScript
                    ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->

                <script src="<?php echo yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
                <!--<script src="<?php echo yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>-->
                <script src="<?php echo yii::app()->request->baseUrl; ?>/js/slick.min.js"></script>
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                <script src="<?php echo yii::app()->request->baseUrl; ?>/js/jquery.fancybox.pack.js"></script>
                <script src="<?php echo yii::app()->request->baseUrl; ?>/js/jquery.elevatezoom.js"></script>

                <script src="<?php echo yii::app()->request->baseUrl; ?>/js/laksyah_main.js"></script>
        </body>
</html>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
</body>
</html>
