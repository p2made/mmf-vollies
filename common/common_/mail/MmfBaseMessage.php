<?php

namespace common\mail;

use Yii;

class MmfBaseMessage extends \yii\mail\BaseMessage
{
	/**
	 * @var MailerInterface the mailer instance that created this message.
	 * For independently created messages this is `null`.
	 */
	public $mailer;

	/**
	 * Sends this email message.
	 * @param MailerInterface $mailer the mailer that should be used to send this message.
	 * If no mailer is given it will first check if [[mailer]] is set and if not,
	 * the "mail" application component will be used instead.
	 * @return bool whether this message is sent successfully.
	 */
	// public function send(MailerInterface $mailer = null)

	/**
	 * PHP magic method that returns the string representation of this object.
	 * @return string the string representation of this object.
	 */
	// public function __toString()
}
