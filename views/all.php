<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Show all codes</title>
        <style type="text/css">
		body{			
			background: url(../images/login-bg.jpg) repeat;	
		}
		
		.border{
			margin: 30%;
		    border-radius: 27px;
		    padding: 10px;
			text-align: center;
			width: 40%;	
			box-shadow: 0 25px 53px 9px rgba(0,0,0,.77), inset 0 -1px 0 0 #2d3238;
		}
		.content{
		    background-color: #dde7e9;
			border-radius: 17px;			
			position: relative;
		}
		
		.divtable{
			border: 1px solid black;
			border-radius: 17px;
			overflow: scroll;
		}		
		.table_blur {
			border-collapse: collapse;		
			margin: auto;
			width: 100%;
		}		
		td{			
			padding: 10px;
		}
		td:nth-child(1n+2){			
			border-left: 1px solid black;
		}
		tr:nth-last-child(1n+2){		
			border-bottom: 1px solid black;
		}
		th{			
			padding: 10px;
			border-bottom: 1px solid black;			
		}
		th:nth-child(1n+2){			
			border-left: 1px solid black;
		}


        </style>
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