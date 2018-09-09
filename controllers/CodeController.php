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
		$code = Code::createCodes($_POST['count']);
		
		require_once(ROOT.'/views/generate.php');
		// echo '<pre>';
		// print_r($code);
		// echo '</pre>';		

	}
	
	public function actionDelete()
	{
		$all = array();
		$all = Code::showCodes();
				
		require_once(ROOT.'/views/delete.php');
				
				
		$delete = Code::removeCodes();
		echo $delete;
		
	}
	

}