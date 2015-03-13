<?php
/*
DQSEGDB - Convert segdb-format data to DQSEGDB.
*/

// Set constants.
class Constants {
	
	public $host;
	public $db;
	public $db_segdb;
	public $db_user;
	public $db_pass;

	public $log_file;
	
	public $source_dir;
	
	// DB & server connection constants.
	public function db_connection_constants() {
		$this->host = "localhost";
		$this->db = "dqsegdb_geo";
		$this->db_user = "admin";
		$this->db_pass = "lvdb_11v35";
	}

	// Source file constants.
	public function source_constants() {
		$this->source_dir = "/root/imports/geosegdb/Feb112015/";
	}
}

?>