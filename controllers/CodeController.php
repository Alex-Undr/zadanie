<?php

include_once ROOT.'/models/Code.php';

class CodeController
{
	
	public function actionAll()
	{
		$all = array();
		$all = Code::showCodes();
		
		echo '<pre>';
		print_r($all);
		echo '</pre>';
		
		return true;
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
		
		return true;
	}
	
}