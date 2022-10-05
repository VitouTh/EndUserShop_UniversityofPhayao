<?php
	session_start();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $line = $_POST['line'];
        $details = $_POST['details'];


        $sToken = "cowFenlsvUX1qygtR9hb5FGNXTV7aQAFMiE6EtW96S0";
	    $sMessage = "มีรายชื่อคนโกงมาใหม่\n";
        $sMessage .= "ชื่ออคนโกง: ".$name."\n";
        $sMessage .= "เบอร์คนโกง: ".$tel."\n";
        $sMessage .= "ไอดีไลน์คนโกง: ".$line."\n";
        $sMessage .= "รายละเอียด: ".$details."\n";

	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	if($result){
		$_SESSION['success'] = "ส่งรายชื่อคนโกงเสร็จแล้ว!";
		header("location: http://localhost/land/manage/line.php");
	}else{
		$_SESSION['error'] = "ส่งรายชื่อคนโกงไม่สำเร็จ!";
		header("location: http://localhost/land/manage/line.php");
	}


    }



?>