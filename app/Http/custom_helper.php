<?php
// ON ADDING FUNCTION TO THIS FILE RUN "composer dump-autoload"
function testing() {
	return 'helllooo';
}

function send_mail($to_email, $send_data, $subject) {
	$to      =  $to_email;
    $subject =  $subject;
    $message =  $send_data;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	// Additional headers
	// $headers .= 'To: '. $to . "\r\n";
	$headers .= 'From: BRC <no-reply@brc.com>' . "\r\n";
	// $headers .= 'From: Terry Kyle <no-reply@cloudboss.pro>' . "\r\n";
    mail($to, $subject, $message, $headers);
}

 function get_main_categories(){
 	return DB::table('service_main_category')->select('id','service_category')->where('user_id',1)->get();

 }
function getUserName($user_id,$col='name',$table='users',$w1='id'){
	
  $data =  DB::table($table)->select($col)->where($w1,'=',$user_id)->get();
  if(count($data)>0 && isset($data[0])) {
    return $data[0]->$col;
  }
}










