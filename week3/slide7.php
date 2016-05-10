<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 3:  CCIS2701 DB Design:  Not-so-simple joins</title>
</head>
<body>
<ul class="lectureslide">
<li><img src='multi-table-join-dia.png'></li>
<li><span class='unix'>SELECT firstname, surname, class.name FROM student   LEFT JOIN assignment_score ON     student.id = assignment_score.studentid JOIN class_student ON class_student.studentid = student.id JOIN class ON class_student.classid = class.id WHERE assignment_score.studentid IS NULL </span></li>
<li>lets go through the above...</li>
<li>finds everyone who doesn't have ANY score listed...</li>
</ul>

<a class="pagelink" href="index.php">INDEX</a><br />

<a class="pagelink" href="slide6.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
