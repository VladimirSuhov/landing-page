<?php
$phone = trim($_POST['phone-inpt']);
$site = trim($_POST['site-inpt']);
$name = trim($_POST['text-inpt']);

if(!empty( $phone) && !empty($site) && !empty($name))
{
$to = "";
$from = '';
$subject = " ";
$message = ': '.$name .'; : '.$phone.'; :'.$site.'';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: ";
$result = mail($to, $subject, $message, $headers);

    /*if ($result){ 
        echo "<p class='zakazat-result'>C�������� ������� �����������. </p>
		";
		
    }
    else{
        echo "<p class='zakazat-result'>C�������� �� �����������. ����������, ��������� ��� ���</p>";
    }*/
}
/*else {
echo "<p class='zakazat-result'>������������ ���� �� ���������.</p>";
}*/
?>