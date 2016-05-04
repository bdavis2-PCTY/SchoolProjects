<?php

/* Prevent direct script access */
if ( !defined ( "FROM_HOME" ) )
    die ( "No direct script access allowed" );



interface iAccount {

    /**
     * emailExists
     * Check if an email is already in use in the database
     * @static
     * @param	string		$email		The email address to check for
     * @return boolean
    */
    public static function emailExists ( $email );


    /**
     * getAccountFromEmail
     * Return an account based on the email
     * @param	string		$email		The email address to get the account for
     * @static
     * @return Account
    */
    public static function getAccountFromEmail ( $email );


    /**
     * combinationExists
     * Check to see if an account and password combination exists
     * @static
     * @param	string		$email		The account email address
     * @param   string      $pass       The account password
     * @return  boolean
    */
    public static function combinationExists ( $email, $pass );


    /**
     * tryLogin
     * Try to log into an account
     * @static
     * @param	string		$email		The account email address
     * @param   string      $pass       The account password
     * @return boolean
    */
    public static function tryLogin ( $email, $pass );


    /**
     * isLoggedIn
     * Check if the current user is logged in
     * @static
     * @return boolean
    */
    public static function isLoggedIn ( );


    /**
     * getID
     * Get the account ID
     * @return integer
    */
    public function getID ( );


    /**
     * getName
     * Return the first and last name of the account
     * @return string
    */
    public function getName ( );


    /**
     * getFirstName
     * Get the first name of the account
     * @return string
    */
    public function getFirstName ( );


    /**
     * getLastName
     * Get the last name of the account
     * @return boolean
    */
    public function getLastName ( );


    /**
     * getEmail
     * Get the account email
     * @return string
    */
    public function getEmail ( );


    /**
     * getPasswordHash
     * Get the SHA256 hash of the account password
     * @return string
    */
    public function getPasswordHash ( );


    /**
     * getRank
     * Get the account rank
     * @return int
    */
    public function getRank ( );

}




/**
* Account class -
* Used for account objects
*
* Constructor: $id, $name, $email, $password, $rank
* @implements iAccount
* @param    $id         Integer representing the acocunt ID
* @param    $name       String representing the accounts client name
* @param    $email      String representing the account email
* @param    $password   String hash representing the account password
* @param    $rank       Integer representing the permission set for the account
**/
class Account implements iAccount {
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $rank;

    public function __construct  ( $id, $first_name, $last_name, $email, $password, $rank ){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->rank = $rank;

    }

    public static function emailExists ( $email ) {
        global $Database;

        $stmt = $Database->getConnection()->prepare("SELECT email FROM clients WHERE LOWER( email ) = LOWER( ? ) LIMIT 1;");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $result = $stmt->num_rows == 0 ? false : true;
        $stmt->free_result();
        $stmt->close();
        return $result;
    }

    public static function getAccountFromEmail ( $email ) {
        global $Database;
        // Verify the account exists
        if ( !self::emailExists ( $email ) )
            return false;

        // Query the data
        $stmt = $Database->getConnection()->prepare ( "SELECT uid, first_name, last_name, email, password, rank FROM clients WHERE LOWER ( email ) = LOWER ( ? ) LIMIT 1" );
        $stmt->bind_param ( "s", $email );
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($uid, $first_name, $last_name, $email, $password, $rank);
        $stmt->fetch();
        $stmt->close();
        return new Account ( $uid, $first_name, $last_name, $email, $password, $rank );
    }

    public static function combinationExists ( $email, $pass ) {
        global $Database;

        $email = strtolower ( $email );
        $pass = hash ( "sha256", $pass );

        $stmt = $Database->getConnection()->prepare("SELECT email FROM clients WHERE LOWER( email ) = LOWER( ? ) AND password = ? LIMIT 1;");
        $stmt->bind_param("ss", $email, $pass );
        $stmt->execute();
        $stmt->store_result();
        $result = $stmt->num_rows == 0 ? false : true;
        $stmt->free_result();
        $stmt->close();

        return $result;
    }

    public static function tryLogin ( $email, $pass ) {
        if ( self::isLoggedIn() )
            self::logout();

        if ( !self::combinationExists ( $email, $pass ) )
            return false;

        global $Database;

        $_account = self::getAccountFromEmail  ( $email );
        $_SESSION['firstName'] = $_account->getFirstName();
        $_SESSION['lastName'] = $_account->getLastName();
        $_SESSION['email'] = $_account->getEmail();
        $_SESSION['rank'] = $_account->getRank();

        $Database->getConnection()->query("UPDATE clients SET last_login=NOW(), last_ip='{$_SERVER['REMOTE_ADDR']}' WHERE uid={$_account->getID()};");

        die ( "<script>window.location='index.php';</script>" );
    }

    public static function isLoggedIn ( ) {
        if( isset ( $_SESSION['firstName'], $_SESSION['lastName'], $_SESSION['email'], $_SESSION['rank'] ) ){
            return true;
        }else{
            return false;
        }
    }

    /* Getter Functions */
    public function getID ( ){
        return $this->id;
    }
    public function getName ( ) {
      return $this->first_name." ".$this->last_name;
    }

    public function getFirstName ( ){
        return $this->first_name;
    }

    public function getLastName( ) {
        return $this->last_name;
    }

    public function getEmail ( ) {
        return $this->email;
    }

    public function getPasswordHash ( ) {
        return $this->password;
    }

    public function getRank ( ) {
        return $this->rank;
    }

}
