<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo isset($title) ? $title : 'IPP' ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/dt/bootstrap-datetimepicker.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/main.css') ?>"/>
</head>

<body style="margin:0;padding:0; background-color:#2d3538;">
<nav style="position:fixed;width:100%;height:80px;border-bottom:1px solid;border-color:rgba(0,0,0,0.2); z-index:2;">
    <div style="float:left;height:60px;width:60px; margin-left:10%;">
        <a href="" >
            <span id="logo" style="background-image:url(ipplogo_black.png);float:left;display:block;height:60px;width:60px;background-size:60px;margin-left:50px;margin-top:10px;background-repeat:no-repeat;"></span>
            <a href="<?php echo site_url('home') ?>" id="header" style="color:white; position:absolute; margin-left:120px; margin-top:18px; font-weight:500; font-size:14px; font-family:Microsoft YaHei;">LandderMitton<br/>羽梯在线对战系统</a>
        </a>
    </div>
    <ul style="float:right; margin-right:15%;">
        <?php if (!$this->user_lib->is_login()): ?>
            <li><a href="<?php echo site_url('login') ?>#login_form">Login</a></li>
            <li><a href="<?php echo site_url('login/join') ?>#join">Register</a></li>
        <?php else: ?>
            <li><a href="<?php echo site_url('home/newfight') ?>#wrap">New Battle</a></li>
            <li><a href="<?php echo site_url('login/logout')?>">Logout</a></li>
        <?php endif ?>
        <!-- <li><a href="#">GUIDE</a></li>
        <li><a href="#">HISTORY</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="<?php echo site_url('login/join') ?>">REGISTER</a></li>
        <li><a href="<?php echo site_url('login') ?>">LOGIN</a></li> -->
    </ul>
</nav>
<div class="banner">
    <div style="padding-top:200px; padding-left:15%; color:white; font-size:30px; font-weight:900;">We build this world for you to</div>
    <div style="padding-left:15%; color:white; font-size:150px; font-weight:900;">PLAY</div>
    <div style="margin-left:15%;margin-top:20px;">
        <a class="button1" href="<?php echo site_url('login') ?>" style ="margin-left:0px; font-size:15px; diaplay:block; position:absolute; border:1px solid; padding:15px 60px; font-weight:900;">Login Now!</a>
        <a class="button1" href="#wrap" style ="margin-left:212px; font-size:15px; diaplay:block; position:absolute; border:1px solid; padding:15px 60px; font-weight:900;">Enter Game!</a>
    </div>
</div>
<!-- <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">IPP</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url() ?>">首页</a></li>
                <?php if (!$this->user_lib->is_login()): ?>
                    <li><a href="<?php echo site_url('login') ?>">登录</a></li>
                    <li><a href="<?php echo site_url('login/join') ?>">注册</a></li>
                <?php else: ?>
                    <li><a href="<?php echo site_url('home/newfight') ?>">新的战斗</a></li>
                <?php endif ?>
            </ul>
            <?php if ($this->user_lib->is_login()): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a>
                            <?php echo $this->session->userdata('user_name'); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('login/logout')?>">注销</a>
                    </li>
                </ul>
            <?php endif ?>
        </div>
    </div>
</div> -->
