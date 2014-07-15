<div class="container" id="wrap">

    <!-- 显示可用的fight -->
    <?php if (!isset($fights)) $fights = array() ?>
    <?php foreach ($fights as $fight) : ?>
        <?php var_dump($fight)?>
    <?php endforeach ?>
</div>