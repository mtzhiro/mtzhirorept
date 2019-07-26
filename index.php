<?php
// License: GNU General Public License v2 or later
// License URI: http://www.gnu.org/licenses/gpl-2.0.html
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
 <link rel="SHORTCUT ICON" href="" />
 <link rel="apple-touch-icon" href="" />
</head>
<body>
<div id="header">
 <h1 class="title">title</h1>
 <br />
<a href="https://creativecommons.org/licenses/by/4.0">CC BY 4.0</a> by <a href="https://home.nihongochat.com/mtzhiro">id:mtzhiro</a><br />
<hr />
</div>

<div id="body">

<?php
  $uploaddir = '/some/where/upload/file/absolute/path';
  $ifilename = $uploaddir . 'anynameokforindex';
  $fp1 = fopen($ifilename, 'r');
   date_default_timezone_set('UTC');
   $dt = new DateTime();
   $dt_utc = $dt->format('Y/m/d H:i:s');
  $fpc = fopen($filename, 'r');
  while( ! feof( $fp1 ) ) {
      $t = fgets( $fp1, 9182);
echo $t;
}
?>
<br />
<br />
<br />
<br />
with help from <a href="https://home.nihongochat.com">nihongochat.com</a><br />
this report(blog) managed with opensources<br />
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
