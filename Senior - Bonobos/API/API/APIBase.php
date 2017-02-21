<?php 

if(!class_exists("ORMAPI.php")) require_once "ORMAPI.php";


class APIBase {
	
	
	
}



// connect to the database
$Database = new ORMAPI ( "localhost", "braydond_worktrk", "WorkTrackerPassword123", "braydond_work_tk" );