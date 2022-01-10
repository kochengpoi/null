<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Page Title</title>
	<link rel="shortcut icon" href="favicon.jpg">

	<!-- MDB -->
	<link rel="stylesheet" href="asset/mdb/css/mdb.min.css" />
	<!-- font awesome pro-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body style="background-color: #ddd;">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<form action="" method="post">
							<div class="form-outline">
								<input type="text" id="form12" class="form-control" />
								<label class="form-label" for="form12">anda suka hentai?</label>
							</div>

							<button type="submit" name="submit" class="btn btn-primary mt-2">kirim</button>
						</form>

						<?php if (isset($_POST['submit'])): ?>
							<div class="alert" role="alert" data-mdb-color="primary">
								Ok, saya juga suka Boku no pico.,
							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MDB script -->
	<script type="text/javascript" src="asset/mdb/js/mdb.min.js"></script>
	<script>

	</script>
</body>
</html>