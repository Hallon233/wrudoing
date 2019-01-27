<!--本程式于GitHub以GPL v3.0协议开源-->
<!--GitHub地址:https://github.com/Hallon233/wrudoing/-->
<?php
$status=$_GET['status'];
//$myfile = fopen("status.txt", "w") or die("Unable to open file!");
$eat = "吃饭中";
$homework = "写作业中";
$rest = "休息中";
$play = "玩游戏中";
$out = "外出";
$null = "其他(未指定)";
//fwrite($myfile, $rest);
//fclose($myfile);
?>
<html>
	<head>
		<title>状态控制台</title>
		<link rel="shortcut icon" href="https://mhchz.oss-cn-hangzhou.aliyuncs.com/photo/web/bitbug_favicon.ico" />
	</head>
	<body>
	<!--控制台界面-->
		控制台:<br />
		<a href="?status=rest"><input type="button" value="休息中" /></a>
		<a href="?status=homework"><input type="button" value="写作业中" /></a>
		<a href="?status=eat"><input type="button" value="吃饭中" /></a>
		<br />
		<br />
		<a href="?status=out"><input type="button" value="外出" /></a>
		<a href="?status=play"><input type="button" value="玩游戏中" /></a>
		<a href="?status=null"><input type="button" value="其他(未指定)" /></a>
	<!--控制台界面-->
		<br /><br /><hr />
		<a href="https://github.com/Hallon233/">
		<svg height="32" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
		</a>
	</body>
</html>
<?php
if($status=="rest"){
$myfile = fopen("status.txt", "w") or die("Unable to open file!");
fwrite($myfile, $rest);
fclose($myfile);
}
if($status=="homework"){
$myfile = fopen("status.txt", "w") or die("Unable to open file!");
fwrite($myfile, $homework);
fclose($myfile);
}
if($status=="eat"){
$myfile = fopen("status.txt", "w") or die("Unable to open file!");
fwrite($myfile, $eat);
fclose($myfile);
}
if($status=="play"){
$myfile = fopen("status.txt", "w") or die("Unable to open file!");
fwrite($myfile, $play);
fclose($myfile);
}
if($status=="out"){
$myfile = fopen("status.txt", "w") or die("Unable to open file!");
fwrite($myfile, $out);
fclose($myfile);
}
if($status=="null"){
$myfile = fopen("status.txt", "w") or die("Unable to open file!");
fwrite($myfile, $null);
fclose($myfile);
}
?>