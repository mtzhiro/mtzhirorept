<?php
// License: GNU General Public License v2 or later
// License URI: http://www.gnu.org/licenses/gpl-2.0.html
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title>file uploader</title>
 <link rel="SHORTCUT ICON" href="" />
 <link rel="apple-touch-icon" href="" />
</head>
<body>
<div id="header">
 <h1 class="title"></h1>
</div>
<div id="body">

<?php
echo "";
$uploaddir = '/some/where/upload/file/absolute/path';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

   date_default_timezone_set('UTC');
   $dt = new DateTime();
   $dt_utc = $dt->format('Y/m/d H:i:s');
  echo '<pre>';
$contef = 0;
  $upfurlbase ='/relative/path/to/upload';
  $ifilename = $uploaddir . 'anynameokforindex';
if (isset($_POST['upfsub']) && $_POST['upfsub'] == 'up_file' ) {
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
      echo "File is valid, and was successfully uploaded.<br />\n";
      echo $_REQUEST['textcap'] . "<br />\n";
      $contef = 0;
  } else {
      echo "Possible file upload attack!\n";
echo $_REQUEST['textcap'];
      $contef = 1;
  }
  
  if ($contef == 0) {
  echo 'Here is some more debugging info:';
  print_r($_FILES);

  $fpw2 = fopen($ifilename, 'a');
  fwrite($fpw2, '<a href="https://somewhere.com/relative/path/to/upload' . $_FILES['userfile']['name'] . '"><img src="https://somewhere.com/relative/path/to/upload' . $_FILES['userfile']['name'] . '" width="200"/></a><br />' . $_REQUEST['textcap'] . '<br /><div style="font-size: 7pt; text-align: right;"> ' . $dt_utc . ' (UTC)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div><br /><br /><hr /><br /><br /><br />' . "\n");
  fclose($fpw2);

} else { //contef
  $fpw2 = fopen($ifilename, 'a');
  fwrite($fpw2, '<br />' . $_REQUEST['textcap'] . '<br /><div style="font-size: 7pt; text-align: right;"> ' . $dt_utc . ' (UTC)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div><br /><br /><hr /><br /><br /><br />' . "\n");
  fclose($fpw2);
} //contef
  print "</pre>";
} //file
?>
<form enctype="multipart/form-data" action="/url/etc/to/.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000000" />
    <textarea name="textcap" rows="10" cols="50" ></textarea><br />
    file: <input name="userfile" type="file" /><br /><br />
    <input type="submit" name="upfsub" value="up_file" /><br /><br />

</form>
<hr />
<?php
  $uploaddir = '/some/where/upload/file/absolute/path';
  $filename = $uploaddir . 'filelist';
  $ra = array_reverse($a);
  $j = 0;
  $disp = 12;
?>
</div>
<hr />
<br />
<br />
<br />
<br />
<pre>
  -<a href="https://home.nihongochat.com/hiro/soft/rept_php.zip">rept phps</a>
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html
  -PHP
  -Apache httpd
  -Linux(CentOS)
</pre>
</body>
</html>
