<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


	</head>
	<body>
		

		<div class="container-fluid">
			<form action="notification/index.php" method="POST" class="form-horizontal" class="form">
			<!--  -->
					<div class="form-group">
						<legend>Form title</legend>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input type="text" name="nama" id="nama" class="form-control" >
						</div>
					</div>
			
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input type="text" name="notif" id="notif" class="form-control" >
						</div>
					</div>
					
			
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<button type="submit" id="tombol-action" class="btn btn-primary">Submit</button>
						</div>
					</div>
			</form>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script >
 		// $(document).ready(function(){
 		// 	$("#tombol-action").click(function(){
 		// 		var data 
 		// 	});

 		// });

 			// function submit(){
 			// 	var url = "http://localhost:8000/push_pusher.php";
 			// 	var data = $('.form').serialize();

 			// 	$.ajax({
 			// 		url : url,
 			// 		type : "POST",
 			// 		data : data,
 			// 		success : function(data){
 			// 			alert("Sukses");
 			// 		}


 			// 	});
 			// }

 		</script>
	</body>
</html>