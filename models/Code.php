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
		if(!empty($_POST["code"])){
			
			$db = Db::getConnection();
			
			$stCode = $_POST["code"];
			
			$arCode = array_diff(preg_split('/\n|\s/', $stCode), array(''));
			
			
			foreach($arCode as $fCode){
				
			$sth = $db->prepare("SELECT code FROM `code` WHERE `code` = '$fCode';");
			$sth->execute();
			$arResult = $sth->fetch(PDO::FETCH_ASSOC);
			
			
			if($fCode !== $arResult['code']){									
			
				$nfCodes[] = $fCode;						
				
			}

				$delCode = $arResult['code'];
				if($delCode){
				$resultDB = $db->query("DELETE FROM `code` WHERE `code` = '$delCode';");	
				}
			
			}
			
			
			return $nfCodes;
			
			// echo '<pre>';
			// var_dump($nfCodes);
			// echo '</pre>';
		}
	}

}