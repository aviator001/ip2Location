ip2Location

<h1>USAGE</h1>
<h2>Example 1</h2>
<h3>Function Name</h3>
<div>Object->locate(<i>Optional IP Address</i>)</div>
<h4>Description</h4>
<div>When no IP is passed, it automatically detects the remote users IP and uses that uip value</div>

<h3>Input Parameter</h3>
<h4>Type</h4>
<div><i>Users IP Address</i></div>
<h4>Format</h4>
<div><i>String</i></div>


<h3>Output</h3>
<h4>Type</h4>
<div><i>Location Object</i></div>
<h4>Format</h4>
<div><i>JSON String</i></div>
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
<div><i>Location Object</i></div>
<h4>Format</h4>
<div><i>JSON String</i></div>
<h4>Data Elements</h4>
<div><i>city</i></div>
<div><i>state</i></div>
<div><i>zip</i></div>
<div><i>lat</i></div>
<div><i>lng</i></div>
<div><i>ip</i></div>



<h1>USAGE 2</h1>
<H2>IP Address required</H2>
<div>To lookup a users location, we can pass their IP address to the object, which will then return the users loxation</div>

/*USAGE 2: Pass IP Address*/
/*It will provide the location for the IP address passed*/

/*Instantiate Library*/
  include "class/ip.locate.class.php";
	$ip=new ipLocate;
<br><br><br>
/*CODE USAGE 1:*/
	$result1=$ip->locate();

/*CODE USAGE 2:*/
  $result2=$ip->locate('8.8.8.8');

/*CODE USAGE 3:*/
  $result3=$ip->locate('45.56.150.112');

/*Thats all the code thats needed to get results.*/
/* HANDLING RETURN DATA: */

/*Convert returned JSN string into an associative array*/

$data=json_decode($result1)[0];

/*or*/

$data=json_decode($result2)[0];

/*or*/

$data=json_decode($result3)[0];

/* Get Individual data points such as:
1. city
2. state
3. zip
4. lat
5. lng
6. ip

*/

/*
Finally,to parse above data, we would do like so:
*/

$city=$data->city;
$state=$data->state;
$zip=$data->zip;
$lat=$data->lat;
$lng=$data->lng;
$ip=$data->ip;

<code><pre>

/*
  	CODE, all together is:
	Its just 5 line of code, really
*/

  	include "class/ip.locate.class.php";
	$ip=new ipLocate;
	$result=$ip->locate();
  	$data=json_decode($result);
  	echo $location=$data->city . " " . $data->state;
 
 </pre></code>
