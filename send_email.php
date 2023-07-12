<?php

require_once('locale.php');
require_once('configs.php');
$error_msg = '';
$email_body = '';
$email_message = '';
$required_fields = ['name', 'email', 'phone'];

$srvr = strpos($_SERVER['SERVER_NAME'], 'fundingturkey.com') === false ? 'ftportfoy.com' : 'fundingturkey.com';

foreach($_POST as $key => $value) {
    if(in_array($key, $required_fields)){
        empty($value) ? $error_msg=__('please_fill_the_field')." <b>". __( $key ) .'</b>' : '';
    }
    $email_message .= '
          <tr>
            <th>'.__( $key ).':</th>
            <td>'.$value.'</td>
          </tr>';
}

if(empty($error_msg)){

    $userinfo = '<i>Browser</i>: '.@$_SERVER['HTTP_USER_AGENT'].
                '<br> <i>Country IP</i>: <a href="http://whatismyipaddress.com/ip/'.@$_SERVER['REMOTE_ADDR'].'">'.@$_SERVER['REMOTE_ADDR'].'</a>
                 <br> <i>Language</i>: '.@$_SERVER['HTTP_ACCEPT_LANGUAGE'];

    $to = 'pool@ftportfoy.com' ; 
    // $to = $to.',muhammad@propertyturkey.com,osama@propertyturkey.com,casper2105@gmail.com';
    $email_subject = "Contact from : ".$_POST['name'];
    $email_body = '
    
        <table cellpadding="1">
          <tr>
            <th colspan="2">New message from '.$_SERVER['SERVER_NAME'].'</th>
          </tr>
          '.$email_message.'
          <tr>
            <th>Info: </th>
            <td>'.$userinfo.'</td>
          </tr>
        </table>';

    $header_array = [
        "MIME-Version: 1.0",
        "Content-type: text/html; charset=UTF-8",
        "From: noreply@ftportfoy.com",
        "X-Mailer: php",
        "Reply-To: noreply@ftportfoy.com",
        'Cc: muhammad@propertyturkey.com',
        'Bcc: osama@propertyturkey.com',
    ];

    $headers = implode("\r\n", $header_array);

    if(@mail($to, $email_subject, $email_body, $headers)){
        echo json_encode(['status'=>'SUCCESS', 'msg'=>__('email-sent')]); die();
    }else{
        echo json_encode(['status'=>'FAIL', 'msg'=>__('email-fail')]); die();
    }
}else{
    echo json_encode(['status'=>'FAIL', 'msg'=>$error_msg]); die();
}
?>