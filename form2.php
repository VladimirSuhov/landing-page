<?php
$phone2 = mysql_real_escape_string(trim($_POST['phone-inpt2']));
$site2 = mysql_real_escape_string(trim($_POST['site-inpt2']));
$name2 = mysql_real_escape_string(trim($_POST['text-inpt2']));

if(!empty( $phone2) && !empty($site2) && !empty($name2))
{
$to2 = "";
$from2 = '';
$subject2 = "�������� �����";
$message2 = '���: '.$name2.'; �������: '.$phone2.'; ����:'.$site2.'';
$headers2 = "Content-type: text/html; charset=UTF-8 \r\n";
$headers2 .= "From: ";
$result2 = mail($to2, $subject2, $message2, $headers2);

    if ($result2){ 
        echo "<p class='zakazat-result'>C�������� ������� �����������. </p>
		";
		
    }
    else{
        echo "<p class='zakazat-result'>C�������� �� �����������. ����������, ��������� ��� ���</p>";
    }
}
else {
echo "<p class='zakazat-result'>������������ ���� �� ���������.</p>";
}
?>