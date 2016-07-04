<?php 
	header("content-type:text/html;charset=utf-8");
	// get the year
	@$year=$_GET['y']?$_GET['y']:date('Y');

	// get the month
	@$month=$_GET['m']?$_GET['m']:date('m');

	// get the day number of the month
	$days=date('t', strtotime("{$year}-{$month}-1"));
	
	// get the week
	$week=date('w', strtotime("{$year}-{$month}-1"));

	echo "<center>";
	echo "<h2> {$year} year {$month} month </h2>";
	echo "<table width='700px' border='1px'>";
	echo "<tr>";
	echo "<th>Sunday</th>";
	echo "<th>Monday</th>";
	echo "<th>Tuesday</th>";
	echo "<th>Wednesday</th>";
	echo "<th>Thursday</th>";
	echo "<th>Friday</th>";
	echo "<th>Saturday</th>";
	echo "</tr>";

	//set schedule
	for (@${i}=1-$week; @${i} <=$days;) { 
		echo "<tr>";
		for (@$j=0; $j <7 ; $j++) { 
			if($i>$days || $i<1){
				echo "<td>&nbsp;</td>";
			} else {
				echo "<td>{$i}</td>";
			}
			$i++;
		}
	}
	echo "</table>";
	// last month calculate
	if($month==1){
		$prevyear=$year-1;
		$prevmonth=12;
	} else {
		$prevyear=$year;
		$prevmonth=$month-1;
	}

	if($month==12){
		$afteyear=$year+1;
		$aftemonth=1;
	} else {
		$afteyear=$year;
		$aftemonth=$month+1;
	}

	// last month | next month
	echo "<h2><a href='index.php?y={$prevyear}&m={$prevmonth}'>last month</a> | <a href='index.php?y={$afteyear}&m={$aftemonth}'>next month</a></h2>";
	echo "<br>";


	$lastyear=$year-1;
	$nextyear=$year+1;


	// last year | next year
	echo "<h2><a href='index.php?y={$lastyear}&m={$month}'>last year</a> | <a href='index.php?y={$nextyear}&m={$month}'>next year</a></h2>";
	echo "</center>";
?>
