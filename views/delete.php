<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Delete codes</title>
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
		 <form action="/zadanie/delete/" method="post">		  
		  <textarea rows="10" cols="45" name="code" required></textarea>
		  <input type="submit"></p>
		 </form>	
	</div>

</body>
</html>