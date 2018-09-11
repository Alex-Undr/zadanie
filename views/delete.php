<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Delete codes</title>
	<link href="../template/css/style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
		  <textarea rows="10" cols="45" name="code" required 
		  placeholder="<?php
			if(!empty($nfCodes)){
			foreach($nfCodes as $nfCode){
			  echo "'$nfCode' is not found in DB
";
			  
				}
			}else{
				echo 'Write the code through a space or an enter';
			}
		  ?>"></textarea><br>
		  <input class="btn-green" type="submit" value="Delete"></p>
		  
		 </form>	
		 		<form class="gen-form" style="margin-top: 2%;" action="/zadanie/generate/" method="post">						
						<input class="btn-green" type="submit" value="Generate">
						<input type="number" min="1" max="100"  name="count" required> codes (max 100)			  						
				</form>	
				
				<div class="btn-green" style="margin-top: 2%;"><a href="/zadanie/all/">Show all codes</a></div>
	</div>

</body>
	<script>
		$(function() {
		
			$.ajax(
			{
				type: "POST",
				url: "/zadanie/delete/",	
			
				success: function (data){
					var table = $(data).find( ".divtable" );
					console.log(table);
					$(".content").html(table);

				}
			});
		
        });

	</script>
</html>