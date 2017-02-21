<?php 


if(!class_exists("APIBase")) require_once "APIBase.php";



	// Database class
	class ORMAPI extends APIBase {
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
				mail("braydon.davis@mtchs.org","MTCHS STUDENT WORK ERROR", "Database error: " . mysql_error() ."\n\nFix as soon as possible!");
				die ( "<h1>ERROR ESTABLISHING DATABASE CONNECTION</h1><br/>Please try again later, a developer has been notified!" );
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
	}
