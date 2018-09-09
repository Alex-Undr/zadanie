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
		
		<form class="gen-form" style="margin-top: 2%;" action="/zadanie/generate/" method="post">						
						<input class="btn-green" type="submit" value="Generate">
						<input type="number" min="1" max="100"  name="count" required> codes (max 100)			  						
				</form>	
				
				<div class="btn-green" style="margin-top: 2%;"><a href="/zadanie/delete/">Delete codes</a></div>
	</div>

</body>
</html>