<?php

class Gmap{

	private $address;
	private $latitude;
	private $longitude;
	private $gmapUrl;
	private $canvasHeight;
	private $canvasWidth;

	function __construct()
	{
		$this->gmapUrl = "https://maps.google.com/maps?q=";
		$this->canvasHeight = "600";
		$this->canvasWidth = "500";
	}

	private function _setaddress($address){
		$this->address = str_replace(" ", "+", $address);
	}

	private function _setCoordinate($lat, $long){
		$this->latitude = trim($lat);
		$this->longitude = trim($long);
	}

	function drawMapbyAddress($data){

		// Override the Cavas height and width ///
		if (isset($data['height']) || !empty($data['height'])) {
			$this->canvasHeight = $data['height'];
		}
		if (isset($data['width']) || !empty($data['width'])) {
			$this->canvasWidth = $data['width'];
		}
		
		switch ($data['type']) {
			case 1:
				$this->_setaddress($data['address']);
				echo '<iframe width="'.$this->canvasWidth.'" height="'.$this->canvasHeight.'" src="'.$this->gmapUrl.$this->address.'&output=embed" > </ iframe>';
				break;
			case 2:
				$this->_setCoordinate($data['latitude'],$data['longitude']);
				echo '<iframe width="'.$this->canvasWidth.'" height="'.$this->canvasHeight.'" src="'.$this->gmapUrl.$this->latitude.','.$this->longitude.'&output=embed" > </ iframe>';
				break;
			
			default:
				echo "Plz provide proper type";
				break;
		}

	}
}

class RenderMap 
{
    public static function create()
    {
        return new Gmap();
    }
}

///////////////// End of File ///////////////////////
