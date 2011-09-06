<HTML>
<HEAD>
<TITLE>ちちゃんタイトル</TITLE>
<META http-equiv="Conlent-Type" content="text/html; charset=EUCJP"/>
</HEAD>
<BODY>

<FONT size = "4">つぶやきなすって！！<BR></FONT>
<FORM name = "form1" method = "post" action = "chichi.php">
<input type = "text" name = "tweet"> <BR>
<input type= "submit" value="send">
</form>

<?php


//いろいろテスト
$chicchi = "chicchi";
print 1+1;
print $chicchi . "<BR>";

$data = 0 & 0;
print $data . "<BR>";

$adult_check = (20 <= 19)?"大人":"子供";
print $adult_check . "です。";

function print_copyright(){
	print "<FONT size=2>";
	print "CopyLight 2011 chicchan All right reserved.";
	print "</FONT>";
	print "<BR>";
}

print_copyright();


$now = time() + ( 60 * 60 * 24) * 7;
$next_week = date('Y年m月d日 H時i分s秒',$now);
print $next_week . "<BR>";


//ファイルの書き込み
$filename = fopen("test.txt","a");
$contents = $_POST["tweet"] . "<BR>";
fwrite($filename,$contents);
fclose($filename);
print "書き込んだぜー！いえーい。";

//ファイルの読み込み
$filename = fopen("test.txt","r");
while($line = fgets($filename))
	echo "$line<BR>";
	//print $filename . "is unread.";
fclose($filename);
?>

</BODY>
</HTML>