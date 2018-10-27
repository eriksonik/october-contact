<?php namespace Eriks\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return ['Eriks\Contact\Components\ContactForm' => 'contactform'];
    }

    public function registerSettings()
    {
    }
}
