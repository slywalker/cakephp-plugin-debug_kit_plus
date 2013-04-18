<?php
App::uses('DebugPanel', 'DebugKit.Lib');

/**
 * Request Plus Panel
 *
 * Provides debug information on the Current request params.
 *
 * @package       DebugKitPlus
 * @subpackage    DebugKitPlus.Lib.Panel
 **/
class RequestPlusPanel extends DebugPanel {

/**
 * Defines which plugin this panel is from so the element can be located.
 *
 * @var string
 */
	public $plugin = 'DebugKitPlus';

/**
 * Defines the title for displaying on the toolbar. If null, the class name will be used.
 * Overriding this allows you to define a custom name in the toolbar.
 *
 * @var string
 */
	public $title = 'Req+';

/**
 * beforeRender callback - grabs request params
 *
 * @return array
 **/
	public function beforeRender(Controller $controller) {
		$out = array();

		$out['controllerName'] = $controller->name;

		$out['passedArgs'] = $controller->passedArgs;

		$out['property'] = get_object_vars($controller->request);

		$out['method'] = array();
		$out['method']['domain'] = $controller->request->domain();
		$out['method']['subdomains'] = $controller->request->subdomains();
		$out['method']['host'] = $controller->request->host();
		$out['method']['method'] = $controller->request->method();
		$out['method']['referer'] = $controller->request->referer();
		$out['method']['clientIp'] = $controller->request->clientIp();
		$out['method']['accepts'] = $controller->request->accepts();
		$out['method']['parseAccept'] = $controller->request->parseAccept();
		$out['method']['acceptLanguage'] = $controller->request->acceptLanguage();
		$out['method']['input'] = $controller->request->input();

		return $out;
	}
}