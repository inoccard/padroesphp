<?php
//Filename: IConnectInfo.php
//Substitute your connect info
interface IConnectInfo
{
	const HOST = "localhost";
	const UNAME = "root";
	const PW = "";
	const DBNAME = "phpBase";

	public function doConnect();
}
?>