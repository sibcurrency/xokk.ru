<?php
if((isset($_POST['message'])&&$_POST['message']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['name'])&&$_POST['name']!="")){
        $to = 'info@xokk.ru';
        $subject = 'WEB MESSAGE XOKK.RU';
        $message = $_POST['message']." \r\n".$_POST['name'];
        $headers  = "Content-type: text/plain; charset=utf-8 \r\n";
        $headers .= "From: ".$_POST['email']."\r\n";
        mail($to, $subject, $message, $headers);
}
echo '<script type="text/javascript">
           window.location = "http://xokk.ru"
      </script>';
?>
