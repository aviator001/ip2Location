ip2Location

/*USAGE 1: IP Address optional*/
/*When no IP is passed, it automatically detects the remote users IP and uses that uip value */

/*USAGE 2: Pass IP Address*/
/*It will provide the location for the IP address passed*/

/*USAGE 3: Pass IP Address*/
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

/*Get Individual data points such as:
1. city
2. state
3. zip
4. lat
5. lng
6. ip
*/
/*Finally,to parse above data, we would do like so:*/

$city=$data->city;
$state=$data->state;
$zip=$data->zip;
$lat=$data->lat;
$lng=$data->lng;
$ip=$data->ip;

<code><pre>

/* CODE, all together is: */
/* Its just 5 line of code, really */


  include "class/ip.locate.class.php";
	$ip=new ipLocate;
	$result=$ip->locate();
  $data=json_decode($result);
  echo $location=$data->city . " " . $data->state;
 </pre>
 </code>
