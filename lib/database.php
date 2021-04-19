<?php 
/**
*Database Class
*/
class Database{
	public  $host 		= DB_HOST;
	public  $user 		= DB_USER;
	public  $pass 		= DB_PASS;
	public  $dbname 	= DB_NAME;
	
	public $link;
	public $error;
	

	function __construct() {
		$this->connectDB();
		
	}
	private function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if (!$this->link){
			$this->error = "Connction fail.".$this->link->connect_error;
			
		}
	}

	//insert data
	public function insert($data){
		$insert_row = $this->link->query($data) or die ($this->link->error.__LINE__);
		if ($insert_row) {
			return $insert_row;
		} else {
			return false;
		}
	}
	//select data
	public function select($data) {
		$results = $this->link->query($data) or die ($this->link->error.__LINE__);
		if ($results->num_rows > 0) {
			return $results;
		} else {
			return false;
		}
		
	}
	//update data
	public function update($query){
		$update_row = $this->link->query($query) or die ($this->link->error.__LINE__);
		if ($update_row) {
			return $update_row;
		} else {
			return false;
		}
	}
	//delete data
		public function delete($query){
		$delete_row = $this->link->query($query) or die ($this->link->error.__LINE__);
		if ($delete_row) {
			return $delete_row;
		} else {
			return false;
		} 
	}
	
}

?>
