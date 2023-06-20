<?php
include "includes/header.php";
?>

<?php
echo "<pre>";
echo "loaded";
echo "</pre>";

// session_start();
require_once 'includes/Facebook/autoload.php';
$fb = new Facebook\Facebook([
    'app_id' => '970447440940101',
    'app_secret' => '1e590f7c5b533e5bb5db3f132ce3dd1a',//app my jaa kr setting>advance>.. h
    'default_graph_version' => 'v12.0'
]);

try {
    echo "<pre>";

    $response = $fb->get('/me', 'EAANyneb9jEUBAF3MDhJvuMO4qvhJlpahbmZC75IEzijNIHZARKwO705lNbZCIoQj4ZBlPyTGDboxS7qbLj7y7kJAycvrtxMUv32sIpKlkf67C4964MZATFgGwDFlZBcwMqiWofgWyoZCoO7yCx43wOVp2UEb0KD7ToyVDbYykoZBCdlw8ubWQrOsY2SfIw5YkZBQRmmD4wAaO2lshHcR2xszsYz0Roob2mu5QgdI8ZBOthozgWyVItgfsjV3WYZCErPF2sZD');//access token location : tools>graph api explorer
    
    print_r( $response);
    echo "\n \n \n \n \n \n \n \n";
    print_r( $response->getheaders());//agr koi bhi protected header chiye to get k sath name e.g getheader() , getbody() ,getdecodedBody()
    
    $user = $response->getGraphUser();
    // print_r( $user);

    echo "</pre>";
    echo 'Name: ' . $user->getName();
    echo 'Email: ' . $user->getEmail();
} catch (\Throwable) {
    echo 'hi';
};


echo "<pre>";
// print_r($fb);
echo "</pre>";



?>



</body>

</html>