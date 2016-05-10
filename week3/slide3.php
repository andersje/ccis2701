<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 3:  CCIS2701 DB Design:  LEFT JOIN</title>
</head>
<body>
<ul class="lectureslide">
<li>LEFT JOIN shows all rows in the left-hand table, even if no match exists in the right</li>
<li><span class='unix'>SELECT firstname, surname, score FROM student LEFT JOIN assignment_score on student.id = assignment_score.studentid;</span></li>
<li>this beats a standard JOIN by showing people who don't yet have scores</li>
<li>Also beats multi-table SELECT in the same way</li>
<li>Also called a LEFT OUTER JOIN</li>
</ul>

<a class="pagelink" href="slide4.php">NEXT</a><br />

<a class="pagelink" href="slide2.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
