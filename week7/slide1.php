<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 6:  CCIS 2701: Transactions</title>
</head>
<body>
<ul class="lectureslide">
<li>BEGIN</li>
<li>COMMIT or ROLLBACK</li>
<li>AUTOCOMMIT is default behavior, requiring BEGIN</li>
<li>SET AUTOCOMMIT=0; # will require an explicit COMMIT transaction to register changes</li>
<li>LOCK IN SHARE MODE:  this prevents rows from being updated while you are working on it.  If there is uncommitted data, then your process will wait until it has been committed before continuing.</li>
<li>Specify your tables as InnoDB to ensure transactions work as you expect.</li>
</ol>

<a class="pagelink" href="slide2.php">NEXT</a><br />

<a class="pagelink" href="index.php">INDEX</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
