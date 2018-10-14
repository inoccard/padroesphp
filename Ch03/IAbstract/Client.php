<?php
include_once('NorthRegion.php');
include_once('WestRegion.php');
include_once('SouthRegion.php');

class Client
{
	public function __construct()
	{
		$north = new NorthRegion();
		$west = new WestRegion();
		$south = new SouthRegion();

		$this->showInterface($north);
		$this->showInterface($west);
		$this->showInterface($south);
	}

	private function showInterface(IAbstract $region)
	{
		echo $region->displayShow() . "<br/>";
	}
}
$worker = new Client();
?>