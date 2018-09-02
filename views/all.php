<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Show all codes</title>
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
				foreach($all as $result){
					$i++;?>			
				  <tr>
					<td><?php echo $i;?></td>
					<td><?php echo $result['code'];?></td>
					<td><?php echo $result['date'];?></td>
				  </tr>
				<?php }	?>
				</table>
			</div>	
		</div>
	</div>

</body>
</html>