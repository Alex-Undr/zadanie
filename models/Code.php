<?php

class Code
{
	public static function showCodes()
	{		
		$db = Db::getConnection();
		
		$all = array();
		
		$result = $db->query('SELECT * FROM code');
		
		$result->setFetchMode(PDO::FETCH_ASSOC);
		
		$i=0;
		while($row = $result->fetch()){
			$all[$i] = $row;
			$i++;
		}
		
		return $all;
	}

	public static function createCodes($count)
	{
		$db = Db::getConnection();
						
		$result=array();

		while(count($result)<$count) {
			$value=rand();
			foreach($result as $used) if($used<=$value) $value++; else break;
			$date = date("Y-m-d H:i:s");
			$result[$value]=$date;
			
			//sort($result);
		}
		//shuffle($result);
		foreach($result as $code=>$date){
		$resultDB = $db->query("INSERT INTO `code` (`code`, `date`) VALUES ('$code', '$date');");		
		}
		
		return $result;

	}
	
	public static function removeCodes()
	{
		
	}

}