<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 6:  CCIS 2701: The VIEW from on high</title>
</head>
<body>
<ul class="lectureslide">
<li>let's diagram this:  CREATE VIEW db_grades AS SELECT assignment_score.studentid, score, max_score, score/max_score AS percentage from assignment_score, assignment, class_assignment WHERE assignment.id = assignment_score.assignmentid AND assignment.id = class_assignment.assignmentid AND class_assignment.classid = 9 ORDER BY assignment.id;</li>
<li>Large select statements can be created as views to simplify the lives of your end users (and you!)</li>
<li>the midterm's problem of multiple quantities, solved semi-permanently:</li>
<pre>
	CREATE VIEW quant AS SELECT SUM(quantity) AS quantity FROM diecast_car UNION SELECT SUM(quantity) AS quantity from diecast_order;
	SELECT SUM(quantity) from quant;
</pre> 
<li>this query is now available to all users who have permission to see it.</li>
<li>this particular view is non-updateable, because it contains the product of mathematical functions</li>
</ol>

<a class="pagelink" href="slide4.php">NEXT</a><br />

<a class="pagelink" href="slide2.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
