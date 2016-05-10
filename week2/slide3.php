<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>eliminating entire tables</title>
</head>
<body>
<ul class="lectureslide">
<li>DROP [database] -- DBA only</li>
<li>DROP TABLE mytablename; # mytablename is now gone</li>
<li>DROP TABLE IF EXISTS mytablename; # mytablename is now gone, and you won't get a warning if it wasn't there in the first place</li>
<li>DROP TABLE IF EXISTS car, manufacturer, service_call;</li>
<li><a href="http://dev.mysql.com/doc/refman/5.0/en/drop-table.html">DROP TABLE syntax reference</a>
</li>

<a class="pagelink" href="slide4.php">NEXT</a><br />

<a class="pagelink" href="slide2.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
