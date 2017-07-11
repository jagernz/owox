<?php

class Db
{	
	
	private $result;
	
	private $db;
	
	private static $instance = null;
	
	private function __construct()
	{
		$config = parse_ini_file('config/db.ini');
		
		if (!empty($config)){
		$this->db=mysqli_connect($config['host'],$config['user'],$config['password'],$config['db']);
		}
	}
	
	public function query($sql)
	{
        $this->result = mysqli_query($this->db,$sql);
	}
	
	public function fetch_all()
	{	
		$dbresult=[];
		while ($row = mysqli_fetch_assoc($this->result)){
			$dbresult[] = $row;
		}
		return $dbresult;
	}

	public static function getInstance()
	{
		if (is_null(self::$instance)){
			self::$instance = new self();
		} 
		return self::$instance;
	}
	
	private function __clone(){}
}