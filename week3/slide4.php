<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 3:  CCIS2701 DB Design:  RIGHT JOIN</title>
</head>
<body>
<ul class="lectureslide">
<li>inverse of LEFT JOIN is RIGHT JOIN:  Show all records from right-hand table which don't have a match</li>
<li><span class='unix'>select class.name, studentid from class_student RIGHT JOIN class ON class.id = class_student.classid;</span></li>
<li>Which to use, right or left?  Whichever table has the unmatched entries you want to see</li>
<li>LEFT JOINs are preferred, as they result in code which is more portable between DBs</li>
<li>any guesses as to the other name of a RIGHT JOIN?</li>
</ul>

<a class="pagelink" href="slide5.php">NEXT</a><br />

<a class="pagelink" href="slide3.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
