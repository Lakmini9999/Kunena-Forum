<?php
/**
 * @version		$Id$
 * @package		Kunena
 * @subpackage	com_kunena
 * @copyright	(C) 2008 Kunena. All rights reserved, see COPYRIGHT.php
 * @license		GNU General Public License, see LICENSE.php
 * @link		http://www.kunena.com
 */

defined('_JEXEC') or die('Invalid Request.');
?>

<h1><?php echo $this->thread->subject; ?></h1>


<?php
if (!empty($this->posts)) {
	foreach ($this->posts as $post)
	{
		$this->post = $post;
		echo $this->loadTemplate('post');
	}
}
?>
