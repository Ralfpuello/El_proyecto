<?php
	/**
	* 
	*/
	class GoogleAuth {
		protected $client;

		public function __construct(Google_Client $googleClient = null){

			$this->client= $googleClient;

			if ($this->client){

			$this->client->setClientId ('867675165789-f04kbfn5dc2jpjboafra8tkl1hhn762o.apps.googleusercontent.com');

			$this->client->setClientSecret('dKW8ut6gudP10enhdgVMV4BL');

			$this->client->setRedirectUri('http://localhost/wichitroco/Index.php');
			
			$this->client->setScopes('email');
			}

		}
		public function isLoggedIn(){
			return isset($_SESSION ['access_token']);
		}

		public function getAuthUrl(){
			return $this ->client->createAuthUrl();
		}
		public function checkRedirectCode(){
			if(isset($_GET['code'])){
				$this->client->authenticate($_GET['code']);
				$this->setToken($this->client->getAccessToken());
				return true;
			}
			return false;
		}
		public function setToken($token){
			$_SESSION['access_token'] = $token;
			$this->client->setAccessToken($token);

		}
		public function logout(){
			unset($_SESSION['access_token']);
		}

	}


?>
