<?php


include_once ROOT.'/models/Code.php';

class CodeController
{
	
	public function actionAll()
	{
		$all = array();
		$all = Code::showCodes();
		
		require_once(ROOT.'/views/all.php');
		// echo '<pre>';
		// print_r($all);
		// echo '</pre>';
		
		
		


	}

	
	public function actionGenerate()
	{

		$code = array();
		$code = Code::createCodes(10);
		
		echo '<pre>';
		print_r($code);
		echo '</pre>';		

	}
	
	public function actionDelete()
	{
		$del = Code::removeCodes();
		
		echo $del;
		
		var_dump($_POST);
		return true;
	}
	

}