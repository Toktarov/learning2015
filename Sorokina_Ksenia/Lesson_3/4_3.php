<pre>
<?php
$date = "2015-03-29";
$d1 = strtotime($date); // ��������� �� ������ � ����
$date2 = date("Y-m-d", $d1); // ��������� � ����� ������


echo "���� ��������\n";
echo($date2);
echo "\n";
$enddate = strtotime("+3 day", strtotime(preg_replace('~^(\d+)\.(\d+)\.(\d+)$~', '$3-$2-$1', $date2 ))); 
$date3 = date("Y-m-d", $enddate ); 
echo "���� ����������� �� 3 ���\n";
echo ($date3) ;
?>

</pre>
