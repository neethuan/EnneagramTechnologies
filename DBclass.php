<?php
class Database {
	protected $_link;
	protected $_result;
	protected $_numRows;
	private $_host = "localhost";
	private $_username = "root";
	private $_password = "";
	private $_database = "test_1";
	
	// Establish connection to database, when class is instantiated
	public function __construct() {
		$this->_link = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
		if(mysqli_connect_errno()) {
			echo "Connection Failed: " . mysqli_connect_errno();
			exit();
		}
	}
	
	// Sends the query to the connection
	public function Query($sql) {
		$this->_result = $this->_link->query($sql) or die(mysqli_error($this->_result));
		$this->_numRows = mysqli_num_rows($this->_result);
	}
	
	// Inserts into databse
	public function UpdateDb($sql) {
		$this->_result = $this->_link->query($sql) or die(mysqli_error($this->_result));
		return $this->_result;
	}
	
	// Return the number of rows
	public function NumRows() {
		return $this->_numRows;
	}
	
	// Fetchs the rows and return them
	public function Rows() {
		$rows = array();
		
		for($x = 0; $x < $this->NumRows(); $x++) {
			$rows[] = mysqli_fetch_assoc($this->_result);
		}
		return $rows;
	}
	
	// Used by other classes to get the connection
	public function GetLink() {
		return $this->_link;
	}
	
	// Securing input data
	public function SecureInput($value) {
		return mysqli_real_escape_string($this->_link, $value);
	}
}
?>