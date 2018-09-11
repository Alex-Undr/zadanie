<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Select action</title>
	<link href="template/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="border">
		<div class="content" style="height: auto;">
						
				 <div class="btn-green"><a href="/zadanie/all/">Show all codes</a></div>
				
				<form class="gen-form" action="/zadanie/generate/" method="post">						
						<input class="btn-green" type="submit" value="Generate">
						<input type="number" min="1" max="100"  name="count" required> codes (max 100)			  						
				</form>	
				
				<div class="btn-green" style="margin-bottom: 15%;"><a href="/zadanie/delete/">Delete codes</a></div>
				
		</div>
	</div>

</body>
</html>