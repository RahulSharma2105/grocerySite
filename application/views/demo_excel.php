<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="<?php echo base_url('home/demo_excel')?>" method="POST">
		<div class="container">
			<div class="row">
				<label for="">Select</label>
				<select name="class_name" id="">
					<option value="">Select</option>
					<option value="1">5</option>
					<option value="2">6</option>
					<option value="3">7</option>
					<option value="4">8</option>
					<option value="5">9</option>
				</select>
				<label for="">Submit</label>
				<input type="submit">
			</div>
		</div>
	</form>

</body>

</html>