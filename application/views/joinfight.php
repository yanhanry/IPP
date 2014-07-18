<div style="height:300px;">
	<?php if (isset($success)): ?>
	    <div class="alert alert-success">约架成功，已成功给小伙伴发送邀请邮件</div>
	<?php endif ?>
	<?php if (!isset($err_msg)) $err_msg = array() ?>
	<?php foreach ($err_msg as $msg): ?>
	    <div class="alert alert-warning" style="margin:100px;"> <?php echo $msg ?></div>
	<?php endforeach ?>
</div>