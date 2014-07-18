<div style="height:400px;background-color:#fbe889;">
    <div style="border-top:50px solid #8bc9de;border-right:50px solid transparent;border-left:50px solid transparent;display:inline-block;margin-left:20%;position:absolute;"></div>
    <div style="color:white; position:absolute; padding-top:8px; font-size:40px; padding-left:30%">GUIDE</div>
    <img src="guide.png" style="margin-top:50px; height:320px; margin-left:15%;">
</div>
<div id="wrap" style="padding-left:15%;background-color:#4e5659;">
    <!-- 显示可用的fight -->
    <?php if (!isset($fights)) $fights = array() ?>
    <?php foreach ($fights as $fight) : ?>
    <div style="padding:20px;display:inline-block;width:400px;width:27%;">
        <div class="one-fight" style="margin:0;background-color:black;height:250px;">
            <div style="text-align: center; color: white; font-size: 20px; padding-top:20px; font-weight:900; ">
                <span>发起人</span>
                <?php echo $fight['username'] ?>
            </div>
            <div style="color: white; font-size: 10px; margin-top: 130px; margin-left:20px;">
                <div>
                    <span>等级</span>
                    <?php echo $fight['rank'] ?>
                </div>
                <div>
                    <span>开始时间</span>
                    <?php echo $fight['start_time'] ?>
                </div>
                <div>
                    <span>结束时间</span>
                    <?php echo $fight['end_time'] ?>
                </div>
            </div>
        </div>
        <div style="width:30%">
            <a href="<?php echo site_url('home/joinfight?fightid=') . $fight['id'] ?>" class="btn btn-info" style="border-radius:0;background-color:white;border:0;color:black;width:334%;display:inline-block;height:50px;padding:13px;">跟他干</a>
        </div>
    </div>
        <?php //var_dump($fight) ?>
    <?php endforeach ?>
</div>