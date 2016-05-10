<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 6:  CCIS 2701: Stored Procedures</title>
</head>
<body>
<ul class="lectureslide">
<pre>
DELIMITER |
CREATE PROCEDURE square(num INT)
	BEGIN
	  DECLARE x INT;
	  SET x=num*num;
	  SELECT x;
	END|
DELIMITER ;
</pre>
<li>why do this?</li>
<li>CALL procedure(arguments)</li>
<li>Worth a whole week by itself...a bit out of scope for tonight</li>
</ol>

<a class="pagelink" href="index.php">INDEX</a><br />

<a class="pagelink" href="slide4.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>