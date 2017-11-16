<?php
	include('subject_fetch.php');
	$row_count = mysqli_num_rows($result);
	$afzal={"4","afzal",2};
	echo $afzal;		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>Jaan meri
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="background-color: yellow;text-align: center;">
				<h2 class="text-success">Assignment of EXAMPREPRATIONONLINE.COM</ELEMENT></h2>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h4>Select Name
				<form action="display_question.php" method="post">
				<select name="topic">
					<?php
						for($i=0;$i<$row_count;$i++){
							$data = mysqli_fetch_array($result);
					?>
					<option><?php echo $data['topic']?></option>
					<?php } ?>
				</select></h4>
			</div>
			<div class="col-lg-8">
				<h3 class="text-primary">Post a Question</h3>
				
					<table class="table">
						<tr>
							<td><label>Your Question</label></td>
							<td><textarea rows="7" name="ques" style="width: 600px"></textarea></td>
						</tr>
						<tr>
							<td><label>Answer</label></td>
							<td><textarea rows="4" name="answer" style="width: 500px"></textarea></td>
						</tr>
						<tr>
							<td><label>Explanation</label></td>
							<td><textarea rows="4" name="exp" style="width: 500px"></textarea><br></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn btn-primary" name="submit"></td>
						</tr>
					</table>
				</form>				
			</div>
		</div>
	</div>
</body>
</html>