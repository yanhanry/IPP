<div class="container" id="wrap">

    <!-- 显示可用的fight -->
    <?php if (!isset($fights)) $fights = array() ?>
    <?php foreach ($fights as $fight) : ?>
        <div class="one-fight">
            <div>
                <span>发起人</span>
                <?php echo $fight['username'] ?>
            </div>
            <div>
                <span>对手id</span>
                <!--TODO:根据id查询对手的名字-->
                <?php echo $fight['enemy'] ?>
            </div>
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
        <?php //var_dump($fight) ?>
    <?php endforeach ?>
</div>