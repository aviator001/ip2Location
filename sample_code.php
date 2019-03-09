<?
	/*
		USAGE 1: IP Address optional
		When no IP is passed, it automatically detects 
		the remote users IP and uses that
		
		$result1=$ip->locate();
		
		USAGE 2: Pass IP Address
		It will provide the location for the IP address passed
		$result2=$ip->locate('8.8.8.8');
	
	*/
	include "class/ip.locate.class.php";
	$ip=new ipLocate;
	$result1=$ip->locate();
	
	//Thats all the code thats needed to get results.
	//Shown below are other options
	
	$result2=$ip->locate('45.56.150.112');
	
	//Convert json string to array
	print_r(json_decode($result1));
	print_r(json_decode($result1));
	
	//To parse individual data, for example city, do like so:
	$city=json_decode($result1)[0]->city;
	print_r($city);
?> 