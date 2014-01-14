<?php
/**
 * Request Plus Panel Element
 *
 * @package       DebugKitPlus
 * @subpackage    DebugKitPlus.View.Elements
 **/
?>
<h2><?php echo __d('debug_kit_plus', 'Request Plus'); ?></h2>

<h3><?php echo $content['controllerName']; ?>Controller</h3>

<h4>passedArgs</h4>
<?php echo $this->Toolbar->makeNeatArray($content['passedArgs']); ?>

<h3>CakeRequest</h3>

<h4>Property</h4>
<?php echo $this->Toolbar->makeNeatArray($content['property']); ?>

<h4>Method</h4>
<?php echo $this->Toolbar->makeNeatArray($content['method']); ?>
