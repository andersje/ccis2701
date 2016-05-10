<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 3:  CCIS2701 DB Design:  Simple joins</title>
</head>
<body>
<ul class="lectureslide">
<li><img src='2-table-join-dia.png'></li>
<li><span class='unix'>SELECT firstname, surname, score from student, assignment_score WHERE student.id = assignment_score.studentid</span></li>
<li><span class='unix'>SELECT firstname, surname, score FROM student JOIN assignment_score on student.id = assignment_score.studentid;</span></li>
<li>What's the point?  well...there isn't.  Yet.</li>
<li>Finds all matched rows.  Also called an INNER JOIN</li>
<li>Multi-table JOINs come along in a bit</li>
</ul>

<a class="pagelink" href="slide3.php">NEXT</a><br />

<a class="pagelink" href="slide1.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
