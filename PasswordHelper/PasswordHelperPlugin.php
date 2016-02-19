<?php
namespace Craft;

class PasswordHelperPlugin extends BasePlugin
{
	/*	CONFIG
	============================================================== */

	function getName()
	{
		return Craft::t('PasswordHelper');
	}

	function getVersion()
	{
		return '1.0';
	}

	public function getDescription()
	{
	    return 'A set of tools for doing things with passwords.';
	}
	
	public function getDocumentationUrl()
	{
	    return 'https://github.com/';
	}

	function getDeveloper()
	{
		return 'Elwyn.co';
	}

	function getDeveloperUrl()
	{
		return 'http://elwyn.co';
	}

	public function hasCpSection()
	{
		return false;
	}

}