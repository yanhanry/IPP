<!-- 直接在这里写css了，虽然恶心,但是简单 -->
<style>
    #login_form {
        width: 300px;
        height: 400px;
        margin-top: 100px;
        margin-left: auto;
        margin-right: auto;
        background-color: lightblue;
    }

    #login_form h1 {
        width: 100px;
        display: block;
        margin: auto;
    }

    #login_form input {
        float: left;
        display: block;
        clear: both;
        width: 80%;
        height: 40px;
        margin: auto;
    }

    #login_form .btn {
        float: left;
        margin: auto;
        height: 30px;
        width: 80%;

    }
</style>
<div id="login_form">
    <h1>登录</h1>
    <?php if (isset($login_error)): ?>
        <div><?php echo $login_error ?></div>
    <?php endif ?>
    <form action="<?php echo site_url('/login/validate_credentials') ?>" method="post" accept-charset="utf-8">
        <input name="username" placeholder="用户名" type="text">
        <input name="password" placeholder="密码" type="password">
        <input class="btn btn-primary" name="submit" value="登录" type="submit">
        <a class="btn btn-info" href="<?php echo site_url('login/join') ?>">注册</a>
    </form>
</div>