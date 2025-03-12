<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>financial record trip</title>
</head>
<body>
<form method="POST">
	<label>TRIP ID</label>
	<select name="tid" required>
	<option value="">Select Trip Id...</option>
		<?php
$selecttrip=mysqli_query($con,"select * from trip_detail;");
while ($fetchtrip=mysqli_fetch_array($selecttrip)) {
?>
<option value="<?php $fetchtrip['trip_id'];?>"><?php $fetchtrip['trip_location'];?></option>
<?php
}
?>
	</select><br><br>
<label>FUEL COST</label>
<input type="number" name="fuelcost" required><br><br>
<label>MAINTENANCE COST</label>
<input type="number" name=mcost""><br><br>
<label>DESCRIPTION ON MAINTENANCE</label>
<input type="text" name="description"><br><br>
<input type="submit" name="sub" value="RECORD MAINTENANCE">
</form>
<?php
if (isset($_POST['sub'])) {
	$TRIPID=$_POST['tid'];
	$FUELCOST=$_POST['fuelcost'];
	$MAINTENANCE=$_POST['mcost'];
	$description=$_POST['description'];
	$maintenancerecord=mysqli_query($con,"insert into financial_record_trip values('','$TRIPID','$FUELCOST','$MAINTENANCE','$description')");
	if ($maintenancerecord) {
		echo "recorded Successfully";
	}
	else{
		echo "Failed";
	}
}
?>
</body>
</html>