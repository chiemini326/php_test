<HTML>
<HEAD>
<TITLE>������󥿥��ȥ�</TITLE>
<META http-equiv="Conlent-Type" content="text/html; charset=EUCJP"/>
</HEAD>
<BODY>

<FONT size = "4">�Ĥ֤䤭�ʤ��äơ���<BR></FONT>
<FORM name = "form1" method = "post" action = "chichi.php">
<input type = "text" name = "tweet"> <BR>
<input type= "submit" value="send">
</form>

<?php


//������ƥ���
$chicchi = "chicchi";
print 1+1;
print $chicchi . "<BR>";

$data = 0 & 0;
print $data . "<BR>";

$adult_check = (20 <= 19)?"���":"�Ҷ�";
print $adult_check . "�Ǥ���";

function print_copyright(){
	print "<FONT size=2>";
	print "CopyLight 2011 chicchan All right reserved.";
	print "</FONT>";
	print "<BR>";
}

print_copyright();


$now = time() + ( 60 * 60 * 24) * 7;
$next_week = date('Yǯm��d�� H��iʬs��',$now);
print $next_week . "<BR>";


//�ե�����ν񤭹���
$filename = fopen("test.txt","a");
$contents = $_POST["tweet"] . "<BR>";
fwrite($filename,$contents);
fclose($filename);
print "�񤭹��������������������";

//�ե�������ɤ߹���
$filename = fopen("test.txt","r");
while($line = fgets($filename))
	echo "$line<BR>";
	//print $filename . "is unread.";
fclose($filename);
?>

</BODY>
</HTML>