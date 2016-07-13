<div class="clearfix"></div>
<div class="container main_container inner_pages ">
        <div class="breadcrumbs"> <?php echo CHtml::link('HOME', array('site/index')); ?> <span>/</span> MY ACCOUNT </div>
        <div class="row">
                <?php echo $this->renderPartial('_menu'); ?>
                <div class="col-sm-9 user_content">
                        <h1>My Dashboard</h1>

                        <div class="row dash_board">
                                <div class="col-sm-4 col-md-3 col-xs-4">
                                        <a href="<?= Yii::app()->baseUrl; ?>/index.php/Profile">
                                                <div class="dash_item">
                                                        <img  src="<?php echo Yii::app()->baseUrl; ?> /images/dash_board_icon1.jpg" alt=""/>
                                                        <div class="dash_title">
                                                                <i class="fa fa-user"></i>
                                                                <h3>My Profile</h3>
                                                        </div>
                                                </div>
                                        </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-xs-4">
                                        <a href="<?= Yii::app()->baseUrl; ?>/index.php/CreditHistory">
                                                <div class="dash_item">


                                                        <img  src="<?php echo Yii::app()->baseUrl; ?> /images/dash_board_icon1.jpg" alt=""/>

                                                        <div class="dash_title">
                                                                <i class="fa fa-credit-card"></i>
                                                                <h3>My Credit</h3>
                                                        </div>
                                                </div>
                                        </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-xs-4">
                                        <a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount/Addressbook">
                                                <div class="dash_item">
                                                        <img  src="<?php echo Yii::app()->baseUrl; ?> /images/dash_board_icon1.jpg" alt=""/>
                                                        <div class="dash_title">
                                                                <i class="fa fa-book"></i>
                                                                <h3>Address Book</h3>
                                                        </div>
                                                </div>
                                        </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-xs-4">
                                        <a href="<?= Yii::app()->baseUrl; ?>/index.php/OrderHistory">
                                                <div class="dash_item">
                                                        <img  src="<?php echo Yii::app()->baseUrl; ?> /images/dash_board_icon1.jpg" alt=""/>
                                                        <div class="dash_title">
                                                                <i class="fa fa-shopping-bag"></i>
                                                                <h3>My Orders</h3>
                                                        </div>
                                                </div>
                                        </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-xs-4">
                                        <a href="<?= Yii::app()->baseUrl; ?>/index.php/Wishlists">
                                                <div class="dash_item">
                                                        <img  src="<?php echo Yii::app()->baseUrl; ?> /images/dash_board_icon1.jpg" alt=""/>
                                                        <div class="dash_title">
                                                                <i class="fa fa-heart"></i>
                                                                <h3>Wishlists</h3>
                                                        </div>
                                                </div>
                                        </a>
                                </div>
                                <div class="col-sm-4 col-md-3 col-xs-4">
                                        <a href="<?= Yii::app()->baseUrl; ?>/index.php/Measurement">
                                                <div class="dash_item">
                                                        <img  src="<?php echo Yii::app()->baseUrl; ?> /images/dash_board_icon1.jpg" alt=""/>
                                                        <div class="dash_title">
                                                                <i class="fa fa-female"></i>
                                                                <h3>Measurements</h3>
                                                        </div>
                                                </div>
                                        </a>
                                </div>
                                <!--                                <div class="col-sm-4 col-md-3 col-xs-4">
                                                                        <div class="dash_item">
                                                                                <img  src="<?php //echo Yii::app()->baseUrl;   ?> /images/dash_board_icon1.jpg" alt=""/>
                                                                                <div class="dash_title">
                                                                                        <a href="#"><i class="fa fa-credit-card"></i></a>
                                                                                        <a href="<?= Yii::app()->baseUrl; ?>/index.php/Myaccount/Makepayment">  <h3>Make a Payment</h3></a>
                                                                                </div>
                                                                        </div>
                                                                </div>-->
                        </div>


                </div>

        </div>
</div>


