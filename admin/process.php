<?php

// ini_set('display_startup_errors',1);
// ini_set('display_errors',1);
// error_reporting(-1);

// echo "<pre>" ; print_r($_POST); die;
//facebook code

if(isset($_POST['submit']) && $_POST['submit'] != ''){
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['action'] = $_POST['action'];
    //check numer exist in post
    if(isset($_POST['phone'])){
        $data['phone'] = $_POST['phone'];
    }
    else{
        $data['phone'] ='N/A';
    }
    //check numer message in post
    if(isset($_POST['message'])){
        $data['message'] = $_POST['message'];
    }
    else{
        $data['message'] ='N/A';
    }
    //check the action type form/gooogle/facebook
    if($_POST['action'] == 2){
        $data['subject'] = $_POST['submit'].' Logged In User Info';
    }
    elseif($_POST['action'] == 1){
        $data['subject'] = $_POST['submit'].' Logged In User Info';
    }
    else{
        $data['subject'] = 'Website User In User Info';
    }
    //check the action type form/gooogle/facebook
    if(($_POST['action'] == 2) || ($_POST['action'] == 1)){
         $mailResp = sendNewMail($data);
        if($mailResp){
            echo '200';
            
        }else{
            	echo '400';
        }
    }
    else{
        $mailResp = sendNewMail($data);
        if($mailResp){
            echo '<script type="text/javascript">alert("Your request has been recieved to PNB Group. Our team will contact you soon !");window.location = "https://www.grouppnb.com";</script>';
            
        }else{
            	echo '<script type="text/javascript">alert("Sorry, Error in processing your request. Please try later!");window.location = "https://www.grouppnb.com";</script>';
        }
    }
    
    
}

// if((isset($_POST['submit'])) && $_POST['submit'] == 'Submit') {
//     $red = 'http://grouppnb.com/';
//     $to = "it@grouppnb.com"; // this is your Email address
//     $from = $_POST['email']; // this is the sender's Email address
//     $name = $_POST['name'];
//     $subject = "Pop Up Form Submission";
//     $message = $name . " wrote the following:" . "\n\nNAME: " . $_POST['name'];
//     $message .= "\nName: " . $_POST['name'];
//     $message .= "\nE-MAIL: " . $_POST['email'];
//     $message .= "\nCONTACT: " . $_POST['phone'];
//     $message .= "\nMESSAGE: " . $_POST['message'];
//     $headers = "From:" . $from;
//     $headers2 = "From:" . $to;
//     if(mail($to,$subject,$message,$headers)){
//         // die;
// 			echo '<script type="text/javascript">alert("Your request has been recieved to PNB Group. Our team will contact you soon !");window.location = "'.$red.'";</script>';

// 		}
// 		else{
// 		    	echo '<script type="text/javascript">alert("Sorry, Error in processing your request. Please try later!");window.location = "'.$red.'";</script>';

// 		}
// }

function sendNewMail($data){
    // echo "In send mail";
    $to = "newcodder05@gmail.com"; // this is your Email address
    $from = $data['email']; // this is the sender's Email address
    $name = $data['name'];
    $subject = $data['subject'];
    $message = $name . " wrote the following:" . "\n\nNAME: " . $_POST['name'];
    $message .= "\nE-MAIL: " . $data['email'];
    $phone = $data['phone'];
    $mes = $data['message'];

    $headers = "From: ".$from."\r\n";
    $headers .= "Reply-To:".$from."\r\n";
    $headers .= "Return-Path:".$to."\r\n";
    $headers .= "CC: info@grouppnb.com\r\n";
    $headers .= "BCC: it@grouppnb.com\r\n";
    $message = "\nNAME: " . $name;
    $message .= "\nEmail: " . $from;
    $message .= "\nContact: " . $phone;
    $message .= "\nMESSAGE: " . $mes;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(mail($to,$subject,$message,$headers)){
        return true;
	}
	else{
	    return false;
	}
}

/*
echo "inside the page";
require 'PHPMailerAutoload.php';

// 			require 'credential.php';
			$mail = new PHPMailer;
			$mail->SMTPDebug = 4;                               // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers






			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'it@grouppnb.com';                 // SMTP username
			$mail->Password = 'PNBgroup08#';                           // SMTP password
			$mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			$mail->Host = 'tls://smtp.gmail.com:587';
			$mail->setFrom('it@grouppnb.com', 'Website Visitor');
			$mail->addAddress('test@gmail.com');     // Add a recipient
			$mail->addReplyTo('it@grouppnb.com');

			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'subjectfkldsjfl';

			$mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
			$mail->AltBody = 'message1123';
			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
*/
