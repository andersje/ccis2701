<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 3:  CCIS2701 DB Design:  UNIONs</title>
</head>
<body>
<ul class="lectureslide">
<li>need to bond two queries together?  UNIONize!</li>
<li><span class='unix'> (SELECT firstname, surname FROM student JOIN class_student ON class_student.studentid = student.id JOIN class ON class_student.classid = class.id WHERE class.name = 'PHP') UNION (SELECT firstname, surname FROM student JOIN class_student on class_student.studentid = student.id JOIN class ON class_student.classid = class.id WHERE class.name = 'Linux Admin 3');</span></li>
<li>or, if you don't feel like typing all that:</li>
<li><span class='unix'> SELECT firstname, surname FROM student JOIN class_student ON class_student.studentid = student.id JOIN class ON class_student.classid = class.id WHERE (class.name = 'PHP' OR class.name = 'Linux Admin 3');</span></li>
<li>In a properly normalized and designed database, not all that useful</li>
</ul>

<a class="pagelink" href="slide6.php">NEXT</a><br />

<a class="pagelink" href="slide4.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>