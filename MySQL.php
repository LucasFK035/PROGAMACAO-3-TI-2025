<?php

require_once __DIR__."\Config.php";

class MySQL{
	
	private $connection;
	
	public function __construct(){
		$this->connection = new \mysqli(HOST,USUARIO,SENHA,BANCO);
		$this->connection->set_charset("utf8");
	}

	public function executar($sql){
		$result = $this->connection->query($sql);
		return $result;
	}
	public function consultar($sql){
		$result = $this->connection->query($sql);
		$item = array();
		$data = array();
		while($item = mysqli_fetch_array($result)){
			$data[] = $item;
		}
		return $data;
		}
	}
?>