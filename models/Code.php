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

	public static function createCodes($min, $max, $count)
	{
		$db = Db::getConnection();
						
		  $result=array();
		  if($min>$max) return $result;
		  $count=min(max($count,0),$max-$min+1);
		  while(count($result)<$count) {
			$value=rand($min,$max-count($result));
			foreach($result as $used) if($used<=$value) $value++; else break;
			$result[]=$value;
			sort($result);
		  }
		  shuffle($result);
		  return $result;
	}
	
	public static function removeCodes()
	{
		
	}

}