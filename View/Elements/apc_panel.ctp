<?php
/**
 * Apc Panel Element
 *
 * @package       DebugKitPlus
 * @subpackage    DebugKitPlus.View.Elements
 **/
?>
<h2><?php echo __d('debug_kit_plus', 'Apc'); ?></h2>
<p><?php echo $this->Form->postLink('Apc Cache Clear', array(
	'plugin' => 'debug_kit_plus',
	'controller' => 'debug_kit_plus',
	'action' => 'apc_clear_cache'
)); ?></p>
<?php echo $this->Toolbar->makeNeatArray($content); ?>