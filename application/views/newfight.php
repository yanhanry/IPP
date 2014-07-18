<style type="text/css">
    #add_fight_form {
            width: 800px;
            height: 410px;
            margin-top: 100px;
            margin-left: auto;
            margin-bottom:100px;
            margin-right: auto;
            background-color: #98ba9b;
            font-family: Microsoft YaHei;
    }

    #add_fight_form .input-group {
        width:100%;
    }

    #add_fight_form .form-control {
        border-radius: 0;
        height:100px;
        width:100%;
    }

    #add_fight_form .input-group-addon {
        border-radius: 0;
        width:100px;
    }

    .submit {
        width:100%;
        border-radius: 0;
        height: 70px;
        margin-top:100px;
        border:3px solid #69c773;
        background-color:#69c773;
        font-size:30px;
        color:white;
    }

    .submit:hover {
        background-color: rgba(0,0,0,0);
    }
</style>

<div id="wrap">
    <div style="text-align:center; font-size:80px; color:white; font-family:Microsoft YaHei; margin-top:50px;">创建新活动</div>
    <?php if (isset($success)): ?>
        <div class="alert alert-success">创建成功</div>
    <?php endif ?>
    <?php if (!isset($err_msg)) $err_msg = array() ?>
    <?php foreach ($err_msg as $msg): ?>
        <div class="alert alert-warning"> <?php echo $msg ?></div>
    <?php endforeach ?>
    <!-- fight -->
    <div>
        <form id="add_fight_form" action="<?php echo site_url('home/newfight') ?>" method="post">
            <div class='input-group' id="start_time">
                <input name="start_time" class="form-control" type='text' placeholder="开始时间"/>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
            <br/>
            <br/>
            <div class='input-group' id="end_time">
                <input name="end_time" class="form-control" type='text' placeholder="结束时间"/>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>

            </div>
            <input class="submit" type="submit" value="提交"/>
        </form>
    </div>
</div>