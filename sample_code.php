<?
/* Code Sample 1 in PHP */
/* OBJECTIVE */
/* In this example, we are going to detect a users IP address */

/* Instantiate Library */
include "class/ip.locate.class.php";

/* Create New Object fron library */
$ip=new ipLocate;

/* call the locate method, which auto detects the users IP address and then converts it into a location array */
try {
    $resuiplt=$ip->getIP();
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

/* Debug Output */
$ip->show($data);

/* Code Sample 2 in PHP */
/* OBJECTIVE */
/* In this example, we are going to convert a users given IP address into location */

/* Instantiate Library */
include "class/ip.locate.class.php";

/* Create New Object fron library */
$ip=new ipLocate;

/* call the locate method, and pass in the IP address we want to covert into a location */
try {
    $result=$ip->locate('104.32.52.60');
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

/* Decodee JSON into an array */
$data=json_decode($result);

/* Prase individual data poinst and echo output */
echo $location=$data->city . " " . $data->state;

/* Debug Output */
$ip->show($data);

/* Code Sample 3 in PHP */
/* OBJECTIVE */
/* In this example, we are going to get the location for a user visiting for the first time, ie no IP address given */

/* Instantiate Library */
include "class/ip.locate.class.php";

/* Create New Object fron library */
$ip=new ipLocate;

/* call locate method with no input, making it auto detect the IP address and then converting into a array of location info* /
try {
    $result=$ip->locate();
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

/* Decodee JSON into an array */
$data=json_decode($result);

/* Prase individual data poinst and echo output */
echo $location=$data->city . " " . $data->state;

/* Debug Output */
$ip->show($data);
