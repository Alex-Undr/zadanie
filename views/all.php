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
			padding: 22px 33px 24px;
			position: relative;
		}
		.table_blur {
		  background: #f5ffff;
		  border-collapse: collapse;
		  text-align: center;
		  width: 100%;
		}
		.table_blur th {
		  border-top: 1px solid #777777;	
		  border-bottom: 1px solid #777777; 
		  box-shadow: inset 0 1px 0 #999999, inset 0 -1px 0 #999999;
		  background: linear-gradient(#9595b6, #5a567f);
		  color: white;
		  padding: 10px 15px;
		  position: relative;
		}
		.table_blur th:after {
		  content: "";
		  display: block;
		  position: absolute;
		  left: 0;
		  top: 25%;
		  height: 25%;
		  width: 100%;
		  background: linear-gradient(rgba(255, 255, 255, 0), rgba(255,255,255,.08));
		}
		.table_blur tr:nth-child(odd) {
		  background: #ebf3f9;
		}
		.table_blur th:first-child {
		  border-left: 1px solid #777777;	
		  border-bottom:  1px solid #777777;
		  box-shadow: inset 1px 1px 0 #999999, inset 0 -1px 0 #999999;
		}
		.table_blur th:last-child {
		  border-right: 1px solid #777777;
		  border-bottom:  1px solid #777777;
		  box-shadow: inset -1px 1px 0 #999999, inset 0 -1px 0 #999999;
		}
		.table_blur td {
		  border: 1px solid #e3eef7;
		  padding: 10px 15px;
		  position: relative;
		  transition: all 0.5s ease;
		}
		.table_blur tbody:hover td {
		  color: transparent;
		  text-shadow: 0 0 3px #a09f9d;
		}
		.table_blur tbody:hover tr:hover td {
		  color: #444444;
		  text-shadow: none;
		}		

        </style>
    </head>

<body>
	<div class="border">
		<div class="content">
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

</body>
</html>