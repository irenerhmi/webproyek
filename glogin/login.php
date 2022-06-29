<?php
require_once 'vendor/autoload.php';
include "../koneksidb.php";

$clientID = '433040861074-3snpsunu8gcepvoc4kjf1jj6ouflpepf.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUrl = 'http://localhost/webproyek/glogin/login.php';

//Membuat client request ke google
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUrl);
$client->addScope('profile');
$client->addScope('email');

if(isset($_GET['code'])){
    $token=$client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    //Mengambil profile user
    $gauth = new Google_Service_Oauth2($client);
    $google_info = $gauth->userinfo->get();
    $email = $google_info->email;
    $name = $google_info->name;

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['namaa'] = $name;

    $sql = "SELECT * FROM user WHERE u_email = '".$_SESSION['email']."' ";
    $hit1 = mysqli_query($conn, $sql);
    $countw = $hit1->num_rows;

    if($countw > 0){
        header ("location: ../pembeli/index.php");

    } else {

        $sql = "INSERT INTO user (u_username, u_email, u_nama) VALUES ('lala','" . $_SESSION['email'] . "', '" . $_SESSION['namaa']. "')";

        if ($conn->query($sql) === TRUE) {
            header ("location: ../pembeli/index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    };

    //echo "Met malem " .$name." You are registered using email: ".$email;
    //ini buat login pake revoketoken
    //echo "<a href='".$client->revokeToken()."'>Logout</a>";

} else {
    echo "<a href='".$client->createAuthUrl()."'>Login with Google</a>";
}

?>