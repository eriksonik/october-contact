<?php
namespace Eriks\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Mail;

class ContactForm extends ComponentBase
{

	public function componentDetails() {
		return [
			'name' => 'Contact Form',
			'description' => 'Simple Contact Form',
		];
	}


	public function onSend() {
		$vars = [
			'name' => Input::get('name'),
			'email' => Input::get('email'),
			'content' => Input::get('content'),
		];

		Mail::send('eriks.contact::mail.message', $vars, function($message) {

			$message->to('ed@baltpoint.com', 'Admin Person');
			$message->subject('This is a reminder');

		});
	}

}