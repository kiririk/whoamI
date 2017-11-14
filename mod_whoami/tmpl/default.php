<?php 
// No direct access
defined('_JEXEC') or die;
$user = \JFactory::getUser();
$login=$user->username;
if (strlen($login)>0) {
	$hi = JText::_('MOD_WHOAMI_HELLO');
	echo $hi.', '.$login;
} else {
	echo JText::_('MOD_WHOAMI_LOGNOT');
}
?>