<?php

// Used to prevent direct script access
DEFINE ("FROM_HOME", true );

// Include required backend files
$includes = [ ];
include "include/Database.php";
include "include/Account.php";


// Begin user session if it doesn't exist
if ( session_status() == PHP_SESSION_NONE)
    session_start();

// Check for user logout
if ( isset ( $_GET['p'] ) && strtolower ( $_GET['p'] ) == "logout" ){
    session_destroy();
    session_start();
    die ( "<script>window.location='index.php';</script>" );
}

// Decide which page to load
// Check if logged in
if ( !Account::isLoggedIn() ) {
    $includes[] = "pages/login.php";
} else {
      $MyAccount = Account::getAccountFromEmail( $_SESSION['email'] );

      $page = "home";
      if ( isset ( $_GET['p'] ) )
            $page = strtolower ( $_GET['p'] );

      switch ( $page ) {
            case "logout":
                  $includes[] = "pages/logout.php";
                  break;

            default:
                  $includes[] = "pages/home.php";
                  break;
      }
}




// Include view files
include "header.php";
foreach ( $includes as $path )
    include ( $path );
include "footer.php";


?>
