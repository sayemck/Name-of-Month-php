<form action="" method="get">
    <input type="text" name="char" id="char"/>
    <input type="submit" name="submit" value="submit"/>
</form>
<?php
if(isset($_GET['submit'])){
	$month = $_GET['char'];
	switch($month){
		case 1;
		  print "January";
		  break;
		case 2;
		  print "February";
		  break;
		case 3;
		  print "March";
		  break;
		case 4;
		  print "April";
		  break;
		case 5;
		  print "May";
		  break;
		case 6;
		  print "June";
		  break;
		case 7;
		  print "July";
		  break;
		case 8;
		  print "August";
		  break;
		case 9;
		  print "September";
		  break;
		case 10;
		  print "October";
		  break;
		case 11;
		  print "November";
		  break;
		case 12;
		  print "December";
		  break;
		  default;
		  print "Wrong Choice";
	}
}
?>
