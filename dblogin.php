<html>
<body background=gambar/background3.jpg><center>
<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("latihan")or die (mysql_error());

$result=mysql_query("select*from anggota where user_name='$user' and user_pass='$pass'")or die(mysql_error());

$record=mysql_fetch_array($result);
if (($_POST['user']=="") AND ($_POST['pass']==""))
{
echo '<center><font color=white>Maaf, User Name dan Password harus di isi<br><a href=login.html><font color=blue>Login</font> </a>kembali';
}
else{
if(($_POST['user']==$record['user_name']) AND ($_POST['pass']==$record['user_pass']))
{
echo '<center><font size=6 color=white><b>Welcome '.$user.'</b><br><font color=white size=4>tetap <a href=signin.html><font color=blue>Login</font></a><font color=white> atau <br>kembali ke <a href=index.php target=_parent><font color=blue>halaman utama</font></a>';
}
else
{
echo '<center>Maaf,User Name atau Password yang anda masukan salah,<br><a href=login.html><font color=blue>Login</font></a> kembali';
}
}
?> 
