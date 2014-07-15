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
                    <li><a href="<?php echo site_url('login/fighting') ?>">炸天</a></li>
                <?php endif ?>
            </ul>
            <?php if ($this->user_lib->is_login()): ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a>
                            <?php echo $this->session->userdata('user_name'); ?>
                        </a>
                    </li>
                </ul>
            <?php endif ?>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

<div class="container" id="wrap">
 <!-- fight -->
    <div class='input-group'>
        <input class="form-control" type='text' placeholder="必填"/>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
    </div>
 <!-- 显示可用的对手 -->

</div>