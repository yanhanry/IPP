<!-- 直接在这里写css了，虽然恶心,但是简单 -->
<style>
    #login_form {
        width: 500px;
        height: 430px;
        margin-top: 100px;
        margin-left: auto;
        margin-right: auto;
        background-color: #98ba9b;
        font-family: Microsoft YaHei;
    }

    #login_form h1 {
        width:100px;
        display: block;
        margin: auto;
        font-weight: 900;
        color: white;
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
        border-color: #69c773;
        border:2px; 
        float: left;
        margin: auto;
        height: 30px;
        width: 80%;
        font-weight:900;
        font-family: Microsoft YaHei;
    }

    #login_form form {
        display:block;
        margin-left:auto;
    }

    #login_form input {
        width:100%;
        margin-top:15px;
        height:55px;
    }

    #login_form .btn{
        border:3px solid #69c773;
        background-color:#69c773;
        width: 100%;
        border-radius: 0;
        height: 65px;
        margin-top:15px;
        font-size:20px;
    }

    #login_form .btn-primary {
        margin-top:40px;
    }

    a.btn {
        padding-top:15px;
    }

    #login_form .btn:hover {
        background-color:rgba(0,0,0,0);
     }
</style>
<div style="height:500px;">
    <div id="login_form">
        <h1 style="padding-top:28px; margin-bottom:15px;font-size:40px;"></h1>
        <?php if (isset($login_error)): ?>
            <div><?php echo $login_error ?></div>
        <?php endif ?>
        <div style="margin:auto;width:400px;">
            <form action="<?php echo site_url('/login/validate_credentials#login_form') ?>" method="post" accept-charset="utf-8">
                <input name="username" placeholder="Username" type="text">
                <input name="password" placeholder="Password" type="password">
                <input class="btn btn-primary" name="submit" value="Log In" type="submit">
                <a class="btn btn-info" href="<?php echo site_url('login/join') ?>">Sign Up</a>
            </form>
        </div>
    </div>
</div>