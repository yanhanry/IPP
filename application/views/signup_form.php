<h1> Create an Account</h1>

<fieldset>
	<legend> Personal Information </legend>

	<?php

	echo form_open('login/create_member');
	echo form_input('email_address',set_value('email_address','Email Address'));
	?>

</fieldset>

<fieldset>
	<legend> Login Info</legend>

	<?php
	echo form_input('username',set_value('username','Username'));
	echo form_input('password',set_value('password','Password'));
	echo form_input('password2',set_value('password2','Password Confirm'));
	?>

	<?php echo validation_errors('<p class="error">'); ?>
</fieldset>

<fieldset>
	<legend> Personal Ability	</legend>

	<?php
	echo form_open('login/getpower');
	echo "请选择答案以获得个人评分。（评分将决定遇到的对手的强度，请慎重填写）</br>";
	echo "1. 惯用的拍子磅数（如果知道横竖线的区别，则以（横线+竖线）/2为准）</br>";
	$options = array(
                  '1'  => 'A. 20-23磅',
                  '2'  => 'B. 24-25磅',
                  '3'  => 'C. 26-27磅',
                  '4'  => 'D. 28磅以上',
                );
	echo form_dropdown('q1', $options);
	echo "</br>";
	echo "2. 场地规则了解问题</br>";
	$options = array(
                  '1'  => 'A. 我一般打羽毛球就是玩玩',
                  '2'  => 'B. 我清楚单打的发球，站位和计分规则',
                  '3'  => 'C. 我清楚单打和双打的发球，站位和计分规则',
                  '4'  => 'D. 我知道单打和双打的发球，站位和计分规则，过网情况的规则，发小球球拍和球的位置要求等一系列详细规则',
                );
	echo form_dropdown('q2', $options);
	echo "</br>";
	echo "3. 打球频率问题</br>";
	$options = array(
                  '1'  => 'A. 以前没打过，或者1年以上没打',
                  '2'  => 'B. 打的多的时候一周一次，一般一月2次',
                  '3'  => 'C. 打的多的时候一周2-3次，一般一月4次',
                  '4'  => 'D. 打的多的时候一周里每天都打，一般一月10次',
                );
	echo form_dropdown('q3', $options);
	echo "</br>";
	echo "4. 体能问题，请你计算时间，在一分钟内做多的尽量仰卧起坐，并输入数量</br>";
	echo("<img src='http://wiki.ttymq.com/uploads/201005/1273564304KYfENqJO.jpg' />");
	echo "</br>";
	$options = array(
                  '1'  => 'A. 高 ',
                  '2'  => 'B. 中 ',
                  '3'  => 'C. 中下',
                  '4'  => 'D. 低',
                );
	echo form_dropdown('q4', $options);
	echo "</br>";
	echo "5. 高远球问题：在对方打出高远球的情况下</br>";
	$options = array(
                  '1'  => 'A. 我总可以从己方中场，打到对方中场',
                  '2'  => 'B. 我总可以从己方中场，打到对方底线方块，但是如果高远球越过头顶，回球质量会变差',
                  '3'  => 'C. 我总可以从己方底线，打到对方底线方块，但是如果高远球越过头顶，回球质量会变差',
                  '4'  => 'D. 即使高远球越过头顶，我也总可以回击到对方底线方块',
                );
	echo form_dropdown('q5', $options);
	echo "</br>";
	echo "6. 上网问题</br>";
	$options = array(
                  '1'  => 'A. 我知道并熟练掌握了垫步加蹬跨步上网，前后交叉步上网。除了滚网的情况，一般的小球我都能回出好球',
                  '2'  => 'B. 我有时候会来不及接网前钓球',
                  '3'  => 'C. 我会迅速的迈出步伐，但是比起比起B来，有时我会在时间充裕时走的太靠前或者太靠后',
                  '4'  => 'D. 一般我走一步回小球，超过一步时我回球质量就会变差',
                );
	echo form_dropdown('q6', $options);
	echo "</br>";
	echo "7. 后退步法问题：在对手的高远球越过我的头顶的情况下，我</br>";
	$options = array(
                  '1'  => 'A. 会后退不及而赶不上球',
                  '2'  => 'B. 能赶上并击到球，但是回球质量变差，造成对方的机会球',
                  '3'  => 'C. 赶上球的位置能够钓网前球',
                  '4'  => 'D. 能够后退到正手击球的位置，并还出质量优秀的高远球',
                );
	echo form_dropdown('q7', $options);
	echo "</br>";
	echo "8. 步法问题</br>";
	$options = array(
                  '1'  => 'A. 打球的时候我会有一些死角，只要对方往该方向击球我就赶不上',
                  '2'  => 'B. 打球的时候，我知道要尽量站在场地中央，但是由于会忘记回场，而导致无法回击对方的二次回球',
                  '3'  => 'C. 我有自己专门练习或者教练传授过标准步伐',
                  '4'  => 'D. 我从来没有因为步伐跟不上球，而击出网前过高球或者中场球的情况',
                );
	echo form_dropdown('q8', $options);
	echo "</br>";
	echo "9. 手法问题</br>";
	$options = array(
                  '1'  => 'A. 打完比赛后一天，我整条手臂都有酸的感觉',
                  '2'  => 'B. 打完比赛后一天，我大臂都会有酸的感觉',
                  '3'  => 'C. 我知道并部分掌握了标准的接球姿势，只要我能先跑到位置，接球动作就一定快，准，狠',
                  '4'  => 'D. 我熟练运用侧身击球，过头击球等方法，回球不一定非要依靠赶到最好位置',
                );
	echo form_dropdown('q9', $options);
	echo "</br>";
	echo "10. 发高远球问题:我站在己方场地中间，想在开球时发远球</br>";
	$options = array(
                  '1'  => 'A. 大多数时候可以发到对方中场，少数时候有到对方后场',
                  '2'  => 'B.可以到后场，但是连发二十个球以上手臂会疲劳，觉得酸。而且打过比赛消耗以后，发球质量会下降',
                  '3'  => 'C. 基本都在对方后场，但是会有出界或者没过双打线的情况（没有落在小方框里）',
                  '4'  => 'D. 让我试过球的轻重以后，肯定能落在对方的单打线与双打线之间，且一定为高远球，不会被半路截击',
                );
	echo form_dropdown('q10', $options);
	echo form_submit('submit','Create Account');
	?>
</fieldset>