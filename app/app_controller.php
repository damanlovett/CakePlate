<?php
/**
 * Base app controller, all your controllers inherit this class
 * 
 * @author		  rynop and the paypal IPN pieces are thanks to webtechnick's example
 * @link          http://rynop.com, http://github.com/webtechnick/CakePHP-Paypal-IPN-Plugin
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class AppController extends Controller {
	public $helpers = array('Html', 'Form', 'Session', 'AssetCompress.AssetCompress');
	// TODO : Auth & ACL another day
	public $components = array( 
		//'Auth', 
		//'Acl', 
		//'AclMenu', 
		'Cookie', 
		'RequestHandler', 
		'Session', 
		'DebugKit.Toolbar' => array(
			'panels' => array(
			  'history', 
			  'session', 
			  'request', 
			  'sqlLog', 
			  'timer', 
			  'log', 
			  'variables', 
			  'Interactive.interactive', 
			)
		)
	);
	var $isMobile = false;
	var $view = 'Theme';
	var $theme = 'h5bp';
	
	function beforeFilter() {
		App::import('Vendor', 'mobile_device_detect', Array('file' => 'mobile_device_detect.php'));
		$this->isMobile = mobile_device_detect(true,true,true,true,true,true,false,false);
		if($this->isMobile === true)	{
			$this->theme = 'mobile';
		}
	}
	
	/**
	 * Want to use 
	 * This is called by the paypal plugin after payment has been received
	 *
	 * @param string paypal transaction id
	 */
	function afterPaypalNotification($txnId){
		$paypal =& ClassRegistry::init('PaypalIpn.InstantPaymentNotification');
				
		$transaction = $paypal->findById($txnId);
		$paypal->id = $txnId;
		$paypal->saveField('site_id', $this->getSiteId());
		
		$this->log('IPN for txn: '.$txnId, 'paypal');

		//Tip: be sure to check the payment_status is complete because failure
		//     are also saved to your database for review.
		switch ($transaction['InstantPaymentNotification']['payment_status']) {
			case 'Completed': case 'Pending':
				$this->log($transaction['InstantPaymentNotification']['id'].' was SUCCESSFUL', 'paypal');	
				//Do work son
			break;
			
			default:
				$this->log($transaction['InstantPaymentNotification']['id'].' FAILURE!! Payment status: '.$transaction['InstantPaymentNotification']['payment_status'], 'paypal');
				//There was a problem
				$this->paypalTransactionError($transaction);
			break;
		}
	}
	
	function paypalTransactionError($transaction){
		//Do whatever u want here, I usuially send a mail to my support email address.
		debug('Transaction details: '.$transaction);
	}	

}
?>