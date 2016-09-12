<?php

include('bddconnect.php');

$req = 'SELECT id, standard_resolution FROM instagram';

foreach ($bdd->query($req) as $url) {
    $http = curl_init($url[1]);
    curl_setopt($http,  CURLOPT_RETURNTRANSFER, TRUE);

    $response = curl_exec($http);
    $httpCode = curl_getinfo($http, CURLINFO_HTTP_CODE);

    if ($httpCode === 404) {
        $delReq = 'DELETE FROM instagram WHERE id = '.$url[0] ;
        $bdd->query($delReq);
    }
}
