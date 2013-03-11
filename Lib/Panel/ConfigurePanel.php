<?php
App::uses('DebugPanel', 'DebugKit.Lib');

/**
 * Configure Panel
 *
 * Provides debug information on the Configure contents.
 *
 * @package       DebugKitPlus
 * @subpackage    DebugKitPlus.Lib.Panel
 */
class ConfigurePanel extends DebugPanel {

/**
 * Defines which plugin this panel is from so the element can be located.
 *
 * @var string
 */
	public $plugin = 'DebugKitPlus';

/**
 * beforeRender callback
 *
 * @param object $controller
 * @return array
 */
	public function beforeRender(Controller $controller) {
		$configures = Configure::read();
		return $configures;
	}
}
