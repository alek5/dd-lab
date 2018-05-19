<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Instagram test task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Kaushan+Script|Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<? include 'add_user2.php' ?>
	<header>
		<div class="container">
			<div class="row justify-content-center">
				<img src="<?=$profile_picture?>" alt="">
				<div class="users">
					<div>
						<h4>Имя пользователя: <?=$full_name?></h4>
					</div>
				<div>
					<p>Количество добавленных фото: <?=$counts?></p>
				</div>
				</div>
        	</div>       	
		</div>
    </header>

    <div id="results"></div>
    <div class="text-center">
    	<button id="add_next" class="btn btn-success">Загрузить ещё</button>
    </div>
    <br>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	
	function addImages (next, count) {
		$.ajax({
  			url: "add_image.php",
  			type: 'GET',
  			data: {
  				next: next,
  				count: count
  			},
  			success: function(data){
    			$("#results").html(data); 		
  			}	
		});
	};

	var count = 5;
	addImages(false, count);

	$("#add_next").click(function() {
		count += 5;
		addImages(true, count);
	});

</script>	
</body>
</html>
