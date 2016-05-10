<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 4:  CCIS2701 DB Design:  Table Engines</title>
</head>
<body>
<ul class="lectureslide">
<li>CREATE TABLE ...... ENGINE = whatever</li>
<li>MyISAM<ul><li>Fast</li><li>non-transactional</li><li>high-speed</li><li>machine architecture independent</li><li>64 indexes per table</li><li>16 columns per index</li></ul></li>
<li>ACID: Atomicity, Consistency, Isolation, Durability</li>
<li>InnoDB<ul><li>ACID compliant:  Transaction-safe</li><li>row-level locking</li><li>supports foreign keys!</li></ul></li>
</ul>

<a class="pagelink" href="index.php">INDEX</a><br />

<a class="pagelink" href="slide1.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
