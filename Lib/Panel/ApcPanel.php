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
class ApcPanel extends DebugPanel {

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
		$informations = apc_cache_info('user');
		foreach ($informations['cache_list'] as $key => $cache) {
			$informations['cache_list'][$key]['value'] = apc_fetch($cache['info']);
		}
		return $informations;
	}
}
