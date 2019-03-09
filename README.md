<h1>INTRODUCTION</h1>
<div>The IP2Location Object is a light weight and fast object, whos primary objective is to determine a users location, by optionally detecting their public IP address, and then converting it into a location.
	<br><br>
<div>The object gets its location data in real-time with each call, from the terraire.com geolocation network; Since terrawire.com is a US based publically available service, there will never be any cost associated with this IP2Location, and neither will you need to fulfill ridculous registrationa nd authentication requets, nor will you be rudely thrown out for wxceeding a certain number of hits.
<br><br>
	The terrawire.com public database is updated each day at midnight, to ensure that it is providing accurate results
</div>

<h1>METHODS</h1>
<h2>Method 1</h2>
<h3>Name</h3>
<div><i>locate()</i></div>
<h3>Objective</h3>
<div><i>Converts a users IPv4 address into its location</i></div>
<h3>Input Parameter</h3>
<div><i>String IPv4 Address, Optional</i></div>
<h3>Output</h3>
<div><i>JSON String containing location data</i></div>

<h2>Method 2</h2>
<h3>Name</h3>
<div><i>getIP()</i></div>
<h3>Objective</h3>
<div><i>Get a remote users public IPv4 address</i></div>
<h3>Input Parameter</h3>
<div><i>None</i></div>
<h3>Output</h3>
<div><i>String users public IPv4 Address</i></div>

<h1>USAGE</h1>
<h2>Example 1</h2>
<h3>Function Name</h3>
<div>Object->locate(<i>Optional IP Address</i>)</div>
<h4>Description</h4>
<div>When no IP is passed, it automatically detects the remote users IP and uses that uip value</div>

<h3>Input Parameter</h3>
<h4>Type</h4>
<i>Users IP Address</i>
<h4>Format</h4>
<div><i>String</i></div>
<h3>Output</h3>
<h4>Type</h4>
<div><i>Location Object</i></div>
<h4>Format</h4>
<i>JSON String</i>

<h2>Example 2</h2>
<h3>Function Name</h3>
<div>Object->locate(<i>User IP Address</i>)</div>
<h4>Description</h4>
<div>When an IP is passed, it returns the location associated with that IP</div>

<h3>Input Parameter</h3>
<h4>Type</h4>
<div><i>Users IP Address</i></div>
<h4>Format</h4>
<div><i>String</i></div>

<h3>Output</h3>
<h4>Type</h4>
<div><i>Associative Array of location data points</i></div>
<h4>Format</h4>
<div><i>JSON String</i></div>

<h1>OUTPUT</h1>
<h2>Type</h2>
<div><i>Users location data such as city, state, latitude etc</i></div>
<h2>Format</h2>
<div><i>JSON String</i></div>
<h2>Data Elements</h2>
<ul>
<li><i>city</i></li>
<li><i>state</i></li>
<li><i>zip</i></li>
<li><i>lat</i></li>
<li><i>lng</i></li>
<li><i>ip</i></li>
</ul>


<h1>SAMPLE CODE</h1>
<h2>Code Sample 1 in PHP</h2>

	/* OBJECTIVE */
	/* In this example, we are going to detect a users IP address */

	/* Instantiate Library */
  	include "class/ip.locate.class.php";
	
	/* Create New Object fron library */
	$ip=new ipLocate;

	/* call the locate method, which auto detects the users IP address and then converts it into a location array */
	$resuiplt=$ip->getIP();
 
<h2>Code Sample 2 in PHP</h2>
	
	/* OBJECTIVE */
	/* In this example, we are going to convert a users given IP address into location */
	
	/* Instantiate Library */
  	include "class/ip.locate.class.php";
	
	/* Create New Object fron library */
	$ip=new ipLocate;

	/* call the locate method, and pass in the IP address we want to covert into a location */
	$result=$ip->locate('104.32.52.60');
  	
	/* Decodee JSON into an array */
	$data=json_decode($result);
	
	/* Prase individual data poinst and echo output */
  	echo $location=$data->city . " " . $data->state;
 
<h2>Code Sample 3 in PHP</h2>
	/* OBJECTIVE */
	/* In this example, we are going to get the location for a user visiting for the first time, ie no IP address given */

	/* Instantiate Library */
  	include "class/ip.locate.class.php";
	
	/* Create New Object fron library */
	$ip=new ipLocate;

	/* call locate method with no input, making it auto detect the IP address and then converting into a array of location info* /
	$result=$ip->locate();
  	
	/* Decodee JSON into an array */
	$data=json_decode($result);
	
	/* Prase individual data poinst and echo output */
  	echo $location=$data->city . " " . $data->state;
 
