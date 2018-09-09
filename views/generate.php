<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Generate codes</title>
	<link href="../template/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="border">
		<div class="content">
			<div class="divtable">
				<table class="table_blur">
				  <tr>
					<th>№</th>
					<th>Code</th>
					<th>Date</th>
				  </tr>
				<?php $i = 0;
				foreach($code as $code => $date){
					$i++;?>			
				  <tr>
					<td><?php echo $i;?></td>
					<td><?php echo $code;?></td>
					<td><?php echo $date;?></td>
				  </tr>
				<?php }	?>
				</table>
			</div>	
		</div>
		
		<div class="btn-green" style="margin-top: 2%;"><a href="/zadanie/all/">Show all codes</a></div>
		<div class="btn-green" style="margin-top: 2%;"><a href="/zadanie/delete/">Delete codes</a></div>
		
	</div>

</body>
</html>