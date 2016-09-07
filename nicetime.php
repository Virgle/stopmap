<?php


    //-------------------------------
	
	//$unixTimestamp_past_UTC = strtotime("-1 week 2 days 4 hours 2 seconds");
	$unixTimestamp_now_UTC = strtotime("now");
	echo "The time-sec on UTC for the present is : ".$unixTimestamp_now_UTC."<br/>";
	
	$unixTimestamp_past_UTC = strtotime("-3 months");
	echo "The time-sec on UTC for the past is : ".$unixTimestamp_past_UTC."<br/>";
	
	echo "Time3 : " . nice_time($unixTimestamp_past_UTC)."<br>"; // 43 weeks 6 days 17 hours 10 minutes and 17 seconds ago.
	
	echo "3 months difference is : ". ($unixTimestamp_now_UTC-$unixTimestamp_past_UTC) ."<br/>";
	
	//-------------------------------
    //$dtstring = "Y" . date("Y", $when) . "M" . date("m", $when) . "D" . date("d", $when) . "T" . date("Hi", $when);
	//echo $dtstring;
	
	//string datetime = "Y-m-d\TH:i:sP";
	//echo $datetime;
	
	echo "UTC time is - seconds : ".time(). "<br>";
	echo "UTC time is - date" . date(" h:i:s A",time()) . "<br>"; // UTC time
	
	// set default timezone
	date_default_timezone_set('UTC');
	//define unix timestamp
	$timestamp = time();
	// output
	echo "UTC time is - date (timezone adjusted)" .date('d M Y H:i:s',$timestamp);
	
	$time_adjust = 3*60*60 + 30*60; // India time adjustment
	
	echo "Today is " . date("Y") . "<br>";
	echo "Today is " . date("M") . "<br>";
	echo "Today is " . date("d") . "<br>";
	
	echo "Today is " . date("Y/m/d") . "<br>";
	echo "Today is " . date("Y.m.d") . "<br>";
	echo "Today is " . date("Y-m-d") . "<br>";
	echo "Today is " . date("Y/M/d") . "<br>";
	echo "Today is " . date("Y.M.d") . "<br>";
	echo "Today is " . date("Y-M-d") . "<br>";
	echo "Today is " . date("l") . "<br>";
	
	echo "The time is " . date("h:i:sa") . "<br>";
	
	//$dt = new DateTime("now", new DateTimeZone('America/New York'));

	//echo $dt->format('m/d/Y, H:i:s');
	
	echo "UTC time is " . date(" h:i:s A",time()) . "<br>"; // UTC time
	echo "The time2 is " . date(" h:i:s A",time() + $time_adjust) . "<br>"; // Adjusted for India time
	echo "The time-hr is " . date("G",time() + $time_adjust) . "<br>";
	echo "The time-hr is " . date("h",time() + $time_adjust) . "<br>";
	echo "The time-min is " . date("i",time() + $time_adjust) . "<br>";
	echo "The time-sec is " . date("s",time() + $time_adjust) . "<br>";
	echo "The time-sec is " . date("A",time() + $time_adjust) . "<br>";
	
	$localtime = localtime();
	$localtime_assoc = localtime(time(), true);
	print_r($localtime);
	print_r($localtime_assoc);
	
	//-------------------------------
	
// 1439552010 is { time(); } output save in database in past.

//echo "Time1 : " . nice_time()."<br>"; // A few seconds ago. // Missing argument 1 for nice_time()
echo "Time2 : " . nice_time(strtotime("now"))."<br>"; //  A few seconds ago.
echo "Time3 : " . nice_time(1439552010)."<br>"; // 43 weeks 6 days 17 hours 10 minutes and 17 seconds ago.

echo "Time4 : " . nice_time(strtotime("10 September 2000"))."<br>"; // 3 years 42 weeks 5 days 6 hours 43 minutes and 47 seconds ago.
echo "Time5 : " . nice_time(strtotime("-1 day"))."<br>"; // 1 day and 1 second ago.
echo "Time6 : " . nice_time(strtotime("-1 week 2 days"))."<br>"; // 5 days ago.
echo "Time7 : " . nice_time(strtotime("-1 week 2 days 4 hours 2 seconds"))."<br>"; // 4 days 19 hours 59 minutes and 58 seconds ago.
echo "Time8 : " . nice_time(strtotime("next Thursday"))."<br>"; // In future
echo "Time9 : " . nice_time(strtotime("last Monday"))."<br>"; // 4 days 6 hours 43 minutes and 48 seconds ago.

echo "TimeStalin : " . nice_time(1466140315)."<br>"; 
//echo "TimeCreatedtime : " . nice_time(UNIX_TIMESTAMP(2016-06-05 21:14:22))."<br>"; 

$unixTimestamp = strtotime('2016-06-18 08:55:44'); // Add 3hrs 30min
echo "TimeCreatedtime : " . nice_time($unixTimestamp - (3*60*60 + 30*60))."<br>"; 

//--------------------
//$mystring = 'abc';
//$findme   = 'a';
$mystring = nice_time($unixTimestamp - (3*60*60 + 30*60));
//$mystring = nice_time(strtotime("-1 week 2 days 4 hours 2 seconds"));

$findme_year   = 'year';
$findme_week   = 'week';
$findme_days   = 'days';
$findme_hours   = 'hours';
$findme_minutes   = 'minutes';
$findme_seconds   = 'seconds';



$pos = strpos($mystring, $findme_year);

// The !== operator can also be used.  Using != would not work as expected
// because the position of 'a' is 0. The statement (0 != false) evaluates 
// to false.
if ($pos !== false) { // Year True means
     echo "The string '$findme_year' was found in the string '$mystring'";
         echo " and exists at position $pos"."<br>";
		 
		//-------------------
		//$mynewstring = substr($mystring, 0, $pos-1)."weeks ago";
		if (substr($mystring, 0, $pos-1) == 1){
			$mynewstring = substr($mystring, 0, $pos-1)." year ago"."<br>";
		} else{
			$mynewstring = substr($mystring, 0, $pos-1)." years ago"."<br>";
		}
		echo $mynewstring;
		echo "My new string is '$mynewstring'"."<br>";
		//echo "1) ".var_export(substr($mystring, 0, $pos), true).PHP_EOL;
        //-------------------

} 
else { // Year False means
     //echo "The string '$findme' was not found in the string '$mystring'"."<br>";
	 
		//----------------------------------------
		$pos = strpos($mystring, $findme_week);

		if ($pos !== false) { // Week True means
			 echo "The string '$findme_week' was found in the string '$mystring'";
				 echo " and exists at position $pos"."<br>";
				 
				//-------------------
				//$mynewstring = substr($mystring, 0, $pos-1)."weeks ago";
				if (substr($mystring, 0, $pos-1) == 1){
					$mynewstring = substr($mystring, 0, $pos-1)." week ago"."<br>";
				} else{
					$mynewstring = substr($mystring, 0, $pos-1)." weeks ago"."<br>";
				}
				echo $mynewstring;
				echo "My new string is '$mynewstring'"."<br>";
				//echo "1) ".var_export(substr($mystring, 0, $pos), true).PHP_EOL;
				//-------------------

		} else { // Week False means
				//echo "The string '$findme' was not found in the string '$mystring'"."<br>";
			 
			 	//----------------------------------------
				$pos = strpos($mystring, $findme_days);

				if ($pos !== false) { // Days True means
					 echo "The string '$findme_days' was found in the string '$mystring'";
						 echo " and exists at position $pos"."<br>";
						 
						//-------------------
						//$mynewstring = substr($mystring, 0, $pos-1)."weeks ago";
						if (substr($mystring, 0, $pos-1) == 1){
							$mynewstring = substr($mystring, 0, $pos-1)." day ago"."<br>";
						} else{
							$mynewstring = substr($mystring, 0, $pos-1)." days ago"."<br>";
						}
						echo $mynewstring;
						echo "My new string is '$mynewstring'"."<br>";
						//echo "1) ".var_export(substr($mystring, 0, $pos), true).PHP_EOL;
						//-------------------

				} else { // Days False means
					 //echo "The string '$findme' was not found in the string '$mystring'"."<br>";
					 
					 //----------------------------------------
					$pos = strpos($mystring, $findme_hours);

					if ($pos !== false) { // Days True means
						 echo "The string '$findme_hours' was found in the string '$mystring'";
							 echo " and exists at position $pos"."<br>";
							 
							//-------------------
							//$mynewstring = substr($mystring, 0, $pos-1)."weeks ago";
							if (substr($mystring, 0, $pos-1) == 1){
								$mynewstring = substr($mystring, 0, $pos-1)." hour ago"."<br>";
							} else{
								$mynewstring = substr($mystring, 0, $pos-1)." hours ago"."<br>";
							}
							echo $mynewstring;
							echo "My new string is '$mynewstring'"."<br>";
							//echo "1) ".var_export(substr($mystring, 0, $pos), true).PHP_EOL;
							//-------------------

					} else { // Days False means
						 //echo "The string '$findme' was not found in the string '$mystring'"."<br>";
						 
						 //----------------------------------------
						$pos = strpos($mystring, $findme_minutes);

						if ($pos !== false) { // Days True means
							 echo "The string '$findme_minutes' was found in the string '$mystring'";
								 echo " and exists at position $pos"."<br>";
								 
								//-------------------
								//$mynewstring = substr($mystring, 0, $pos-1)."weeks ago";
								if (substr($mystring, 0, $pos-1) == 1){
									$mynewstring = substr($mystring, 0, $pos-1)." minute ago"."<br>";
								} else{
									$mynewstring = substr($mystring, 0, $pos-1)." minutes ago"."<br>";
								}
								echo $mynewstring;
								echo "My new string is '$mynewstring'"."<br>";
								//echo "1) ".var_export(substr($mystring, 0, $pos), true).PHP_EOL;
								//-------------------

						} else { // Days False means
							 //echo "The string '$findme' was not found in the string '$mystring'"."<br>";
							 
							  //----------------------------------------
							$pos = strpos($mystring, $findme_seconds);

							if ($pos !== false) { // Days True means
								 echo "The string '$findme_seconds' was found in the string '$mystring'";
									 echo " and exists at position $pos"."<br>";
									 
									//-------------------
									$mynewstring = "Few seconds ago"."<br>";
									//$mynewstring = substr($mystring, 0, $pos-1)."weeks ago";
									//if (substr($mystring, 0, $pos-1) == 1){
										//$mynewstring = substr($mystring, 0, $pos-1)." minute ago"."<br>";
									//} else{
										//$mynewstring = substr($mystring, 0, $pos-1)." minutes ago"."<br>";
									//}
									echo $mynewstring;
									echo "My new string is '$mynewstring'"."<br>";
									//echo "1) ".var_export(substr($mystring, 0, $pos), true).PHP_EOL;
									//-------------------

							} else { // Days False means
								 echo "The string was not found"."<br>";
							}
							//----------------------------------------
						
						}
						//----------------------------------------
					
					}
					//----------------------------------------
				}
				//----------------------------------------
		}
		//----------------------------------------
}


//--------------------

//----------------
//$old = new DateTime($data -> created_at);
//$now = new DateTime(date("Y-m-d H:i:s"));
//$diff = $now->getTimestamp() - $old->getTimestamp();
//$old = new DateTime($data -> created_at);

//echo "strtotimenow".strtotime("now");
//$old = new DateTime(date("2016-06-05 21:14:22"));
//echo "old : ".$now;
//$diff = strtotime("now") - $old->getTimestamp();
//echo "diff : " . nice_time($diff )."<br>";
//----------------

function nice_time($secs) {
    ($secs == null)? $secs = time():null; // Undefined variable: secs
    $secs = time() - $secs;
    if($secs >= 0){
    $ret = null;
    $bit = array(
        ' year' => $secs / 31556926 % 12,  // This time takes the Paris time 3:30 behind
        ' week' => $secs / 604800 % 52,
        ' day' => $secs / 86400 % 7,
        ' hour' => $secs / 3600 % 24,
        ' minute' => $secs / 60 % 60,
        ' second' => $secs % 60
		);

    foreach ($bit as $k => $v) {
        if ($v > 1) {
            $ret[] = $v . $k . 's';
        }
        if ($v == 1) {
            $ret[] = $v . $k;
        }
    }
    if($ret != null){
      if(count($ret) >= 2){
        array_splice($ret, count($ret) - 1, 0, 'and');
      }
    }else{
      $ret[0] ='A few seconds';
    }
      return join(' ',$ret) . ' ago.';
    }else{
      return "In future";
    }
}
?>