<?php
App::uses('AppController', 'Controller');

class DebugKitPlusController extends AppController {

/**
 * APC User Cache Clear
 * @throws ForbiddenException
 * @return void
 */
	public function apc_clear_cache() {
		if (!Configure::read('debug') || !$this->request->is('post')) {
			throw new ForbiddenException();
		}
		apc_clear_cache('user');
		$this->redirect($this->referer('/'));
	}

}