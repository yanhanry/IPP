<div id="wrap">
    <?php if (isset($success)): ?>
        <div class="alert alert-success">创建成功</div>
    <?php endif ?>
    <?php if (!isset($err_msg)) $err_msg = array() ?>
    <?php foreach ($err_msg as $msg): ?>
        <div class="alert alert-warning"> <?php echo $msg ?></div>
    <?php endforeach ?>
    <!-- fight -->
    <form id="add_fight_form" action="<?php echo site_url('home/newfight') ?>" method="post">
        <div class='input-group' id="start_time">
            <input name="start_time" class="form-control" type='text' placeholder="开始时间"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
        <div class='input-group' id="end_time">
            <input name="end_time" class="form-control" type='text' placeholder="结束时间"/>
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>

        </div>
        <input type="submit" value="提交"/>
    </form>
</div>