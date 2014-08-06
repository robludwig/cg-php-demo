<?php 
	require_once(Yii::app()->basePath . '/vendor/CheddarGetter/Client.php');
	require_once(Yii::app()->basePath . '/vendor/CheddarGetter/Client/AdapterInterface.php');
	require_once(Yii::app()->basePath . '/vendor/CheddarGetter/Client/CurlAdapter.php');
	require_once(Yii::app()->basePath . '/vendor/CheddarGetter/Http/AdapterInterface.php');
	require_once(Yii::app()->basePath . '/vendor/CheddarGetter/Http/NativeAdapter.php');
	require_once(Yii::app()->basePath . '/vendor/CheddarGetter/Response.php');
	require_once(Yii::app()->basePath . '/vendor/CheddarGetter/Response/Exception.php');

	class CheddarGetterClient extends CApplicationComponent
	{
		private $_client;
		public $cgurl;
		public $cgemail;
		public $cgpass;
		public $cgapp;
		
		
		public function init()
		{
			$this->_client = new CheddarGetter_Client(
				$this->cgurl,
				$this->cgemail,
				$this->cgpass,
				$this->cgapp
			);
		
		}
		public function addFreeUser($user)
		{
			$data = array(
				'code' => $user['email'],
				'firstName' => $user['first'],
				'lastName' => $user['last'],
				'email' => $user['email'],
				'subscription' => array(
					'planCode' => 'FREE'
					),
				);			
			try
			{
				$response = $this->_client->newCustomer($data);
			}
			catch (CheddarGetter_Response_Exception $re)
			{
				switch ($re->getCode()){
					case 412:
						$response = "Missing or invalid fields". $re->getMessage();
						break;
					case 422:
						$response = "Server side error: " . $re->getMessage();
						break;
					default:
						$response = "Unexpected error occured, please contact administrator: ". $re->getMessage();
				
				
				}
			}
			return $response;
		}
		
		public function getClientPlanByEmail($email)
		{
			$planName = 'Error: Unable to find a plan for this customer';
			try
			{
				$customer = $this->_client->getCustomer($email);
				$plan = $customer->getPlan();
				if($plan && $plan['name'])
				{
					$planName =  $plan['name'];
				}
			}
			catch(Exception $e)
			{
				$planName = "Error retrieving plan " . $e->getMessage();
			}
			return $planName;
		
		}
		
		public function killMilton()
		{
			try
			{
				$response = $this->_client->deleteCustomer('MILTON_WADDAMS');
				return "Deleted Milton Waddams";
			} 
			catch (Exception $e) 
			{
				return "failed to delete milton";
			}
		}
	
		
		
	}