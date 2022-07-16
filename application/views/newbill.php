<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Billing Logic</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container" style="margin-top:100px;">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-12">
							<h3>Billing System</h3>
						</div>
					</div>
					<hr>
					<form class="" action="createBill" method="post">
            <?php
            for ($i=0; $i <$list ; $i++) {
             ?>
						<div class="row">
							<div class="col-12">
								<label for="">Item No. <?php echo $i+1; ?> </label>
								<input type="text" name="items[]" value="" class="form-control">
							</div>
						</div>
          <?php } ?>
						<div class="row">
							<div class="col-12" style="margin-top:10px;">
								<input type="submit" name="submit" class="btn btn-success">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
