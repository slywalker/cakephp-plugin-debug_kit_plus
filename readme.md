# DebugKit Plus

## Show Configure

	class AppController extends Controller {

		public $components = array(
			'DebugKit.Toolbar' => array(
				'panels' => array(
					'DebugKitPlus.Apc',
					'DebugKitPlus.Configure',
					'DebugKitPlus.RequestPlus'
				)
			)
		);

	}
