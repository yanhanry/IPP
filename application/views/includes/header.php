<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo isset($title) ? $title : 'IPP' ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/dt/bootstrap-datetimepicker.css') ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css') ?>"/>
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
        <!--/.nav-collapse -->
    </div>
</div>