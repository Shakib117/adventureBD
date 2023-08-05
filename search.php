 <?php 
	session_start();
	error_reporting(0);
 	include'includes/config.php'; 
 ?> 

<html>
	<head>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.css" rel="stylesheet">
		<style>
			.my-5{
				margin : 3rem auto;
			}
		</style>
	</head>

	<body>
		<?php include'includes/header.php'; ?>
		<div class="container my-5">
			<form action="" method="post">
				<input type="text" name="search"/>
				<button type="submit" class="btn btn-primary" name="sub"> Search </button>
			</form>

			<div class="container my-5">
				
			</div>

			<?php
				if(isset($_POST['search'])){
					$search=$_POST['search'];

					$sql = "Select * from `tbltourpackages` where PackageName like '%$search%' 
					OR PackageLocation like '%$search%' OR PackageType like '%$search%'";

					$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0){
	foreach($results as $result){	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features:</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>Taka <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }}} ?>
			
		</div>
		
	</body>
</html>
