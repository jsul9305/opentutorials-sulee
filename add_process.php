<?php
// 1. 데이터베이스 서버에 접속
$link=mysql_connect('localhost','root','111111');
if(!$link) {
die('Could not connect: '.mysql_error());
}
// 2. 데이터베이스 선택
mysql_select_db('opentutorials');
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

if(!empty($_POST['title'])) {
$sql="INSERT INTO topic(title,description) values('".$_POST['title']."','".$_POST['description']."')";
$result = mysql_query($sql);
//$topic = mysql_fetch_assoc($result);
}
echo "result = ".$result;
if($result){
?>
	<script type="text/javascript">alert("정상적으로 입력이 되었습니다.");location.href="./index.php?id=<?=mysql_insert_id()?>"</script>
<?php
} else {
?>
	<script type="text/javascript">alert("입력 도중에 오류가 발생 되었습니다.");</script>
<?php
}
?>
