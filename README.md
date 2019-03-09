ip2Location

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
<h4>Data Elements</h4>
<div><i>city</i></div>
<div><i>state</i></div>
<div><i>zip</i></div>
<div><i>lat</i></div>
<div><i>lng</i></div>
<div><i>ip</i></div>

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
<h4>Data Elements</h4>
<ul>
<li><i>city</i></li>
<li><i>state</i></li>
<li><i>zip</i></li>
<li><i>lat</i></li>
<li><i>lng</i></li>
<li><i>ip</i></li>
</ul>
<h1>Sample Output</h1>


<h1>Sample Code</h1>
<h2>Code Samples in PHP</h2>

	/* Instantiate Library */
  	include "class/ip.locate.class.php";
	
	/* Create New Object fron library */
	$ip=new ipLocate;

	/* call the locate method, which auto detects the users IP address and then converts it into a location array */
	$result=$ip->locate();
  	
	/* Decodee JSON into an array */
	$data=json_decode($result);
	
	/* Prase individual data poinst and echo output */
  	echo $location=$data->city . " " . $data->state;
 
