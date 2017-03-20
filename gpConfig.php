<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '717843473074-tdvv482v405fc098gsui29p6dalr2tte.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'iAuwE-HnE2dW815PtLJd5OgV'; //Google client secret
$redirectURL = 'http://apiproject.com/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login via Google');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>