<?php


// Prevent hackers
if ( !defined ( "FROM_HOME" ) )
    die ( "No direct script access allowed" );

// Used to display ALL mysql errors
mysqli_report(MYSQLI_REPORT_ERROR);

class Database {
	// Database connection info
	private $host, $user, $pass, $db;

	// Is the database connected?
	private $connected = false;

	// The database connection
	public $connection;

	// Database constructor
	public function __construct ( $host, $user, $pass, $db ) {
		// Set class connection info members
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->db = $db;

		// Try to connect with the given information
		$this->connection = @new mysqli ( $host, $user, $pass, $db );

		// Check if the connection was a success
		if ( $this->connection && !$this->connection->errno )
			// Connection successful
			$this->connected = true;
		else {
			// Connection errored - notify admins
			die ( "There's been a problem with the system. Please try again later." );
		}

		// Return the connection
		return $this->connection;
	}

	// Execute a database query
	public function query ( $str ) {
		if ( !$this->connected )
			return false;

		return $this->connection->query ( $str );
	}

	// Escape a string for save querying
	public function escape ( $str ) {
		return $this->connection->real_escape_string  ( $str );
	}

    // Get the database connection
    public function getConnection() {
        return $this->connection;
    }

    // Close database connection
    public function close ( ) {
        $this->getConnection()->close();
    }
}

// Connect to the database
$Database = new Database ( "localhost", "db_user", "db_pass", "db_name" );

$Database->query ( "CREATE TABLE IF NOT EXISTS `clients` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `account_added` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(50) DEFAULT NULL,
  `rank` int(50) DEFAULT 1,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uid` (`uid`)
)" );
