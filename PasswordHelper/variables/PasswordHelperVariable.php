<?php
namespace Craft;

class PasswordHelperVariable
{
	/**
	* Get Hash
	*
	* Hashes a given password with the blowfish encryption algorithm.
	* Using: https://craftcms.com/classreference/services/SecurityService#hashPassword-detail
	*
	* @param  string   $password
	* @return string   $hash
	*/

	function getHash( $password )
	{
		$hash = craft()->security->hashPassword( $password );
		return $hash;
	}

	/**
	* Check Password
	*
	* Hashes a given password with the blowfish encryption algorithm.
	* Using: https://craftcms.com/classreference/services/SecurityService#hashPassword-detail
	*
	* @param  string   $password
	* @param  string   $hash
	* @return bool     $isValid
	*/

	function checkPassword( $password, $storedHash )
	{
		$isValid = craft()->security->checkPassword( $password, $storedHash );
		return $isValid;
	}

}