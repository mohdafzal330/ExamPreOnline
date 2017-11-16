<?php
	include('connection.php');
	if(isset($_POST['submit'])){
		$topic = $_POST['topic'];
		$ques = $_POST['ques'];
		$answer = $_POST['answer'];
		$exp = $_POST['exp'];
		$q1 = "insert into questions values('$topic','$ques','$answer','$exp')";
		mysqli_query($con,$q1);
	}
		$topic = $_POST['topic'];
		$q = "select * from questions where topic='$topic' ";
		$result = mysqli_query($con,$q);
		$row_count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
	<script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="background-color: yellow;text-align: center;">
				<h2 class="text-success">Assignment of EXAMPREPRATIONONLINE.COM</h2>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="container">
		<?php for($i=1;$i<$row_count;$i++){
						$data = mysqli_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-primary">Display Questions</h3>
					
					<table class="table">
						<tr>
							<td><label>Question</label></td>
							<td><?php echo $data['que']?></td>
						</tr>
						<tr>
							<td><label>Answer</label></td>
							<td><?php echo $data['answer']?></td>
						</tr>
						<tr>
							<td><label>Explanation</label></td>
							<td><?php echo $data['exp']?></td>
						</tr>
					</table>
				</div>
		</div>
		<?php } ?>
	</div>
</body>
</html>