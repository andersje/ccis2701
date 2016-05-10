<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Class 1:  Making new tables</title>
</head>
<body>
<ul class="lectureslide">
<li>CREATE [database] -- DBA only</li>
<li>CREATE TABLE mytablename (id int, fname varchar(30), surname varchar(30));</li>
<li>CREATE TABLE mytablename (id int UNIQUE AUTO_INCREMENT, fname varchar(30), surname varchar(30) NOT NULL, PRIMARY KEY(id))</li>
<li>CREATE TABLE mytablename (id int UNIQUE AUTO_INCREMENT, fname varchar(30) DEFAULT 'jorge', surname varchar(30) NOT NULL, PRIMARY KEY(id))</li>
<li><a href="http://dev.mysql.com/doc/refman/5.0/en/create-table.html">CREATE TABLE syntax reference</a>
</li>

<a class="pagelink" href="slide5.php">NEXT</a><br />

<a class="pagelink" href="slide3.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
