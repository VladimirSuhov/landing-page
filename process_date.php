<?
$day = date("j");
$month =date("n");
$year = date("Y");
	$now = time();
	$target = mktime(
		$config['targetDate']['hour'], 
		$config['targetDate']['minute'], 
		$config['targetDate']['second'], 
		$config['targetDate']['month'], 
		$config['targetDate']['day'], 
		$config['targetDate']['year']
	);


	$config = array(

	'targetDate' => array(	// Дата для обратного отсчета
		'day'				=> $day,
		'month'				=> $month,
		'year'				=> $year,
		'hour'				=> 24,
		'minute'			=> 0,
		'second'			=> 0
	)
);
	
?>