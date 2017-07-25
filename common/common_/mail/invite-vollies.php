<?php

use yii\bootstrap\Html;

/**
 * @var $email
 * @var $name
 * @var $password
 */
?>
<p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
	G’day <?= $name ?>,
</p>

<p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
	It’s been a long & winding road, but the brand new volunteer application system for Maleny Music Festival is now live.
</p>

<p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
	As a past volunteer, or someone who has expressed interest, you have a login already created for you. Go to <a href="http://vollies.malenymusicfestival.com">http://vollies.malenymusicfestival.com</a>, click the green "Returning Volunteers Start Here" button, and login with...
</p>

<ul>
	<li style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
		Email: <?= $email ?>
	</li>
	<li style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
		Password: <?= $password ?>
	</li>
</ul>

<p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
	When you login you will land on the volunteer profile page. If you want to change the password (which I recommend), click “Account” near the top of the page. Once the password is changed, click “Profile” to return to your volunteer profile &amp; continue.
</p>

<p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
	I look forward to having you as part of the team for a great festival.
</p>

<p style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6; font-weight: normal; margin: 0 0 10px; padding: 0;">
	Pedro<br>(Volunteers Coordinator, Maleny Music Festival <?= date("Y") ?>)
</p>
