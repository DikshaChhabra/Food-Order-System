<?php 
class conn{
	private $dbhost='localhost',$dbname='food',$dbuser='root',$dbpass='designer';

	function __construct(){
		global $con;
		$con=$this->connect();
	}
	function connect(){
		try{
			$conn=new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname.'',
		    $db_user=$this->dbuser,$db_pass=$this->dbpass);
		    return $conn;
		}
	    catch(PDOException $err){
	    	die("could not connect to database".$err->getMessage());
	    }
	}
	function Query($query,$con){
	$result=$con->query($query);
	return $result;
}
}

?>
