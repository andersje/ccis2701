<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 6:  CCIS 2701: The VIEW, now with less Star Jones</title>
</head>
<body>
<ul class="lectureslide">
<li>views are virtual tables</li>
<li>create to conglomerate data without denormalizing, or to restrict data access for users</li>
<li>CREATE VIEW viewname AS [some select statement;</li>
<li>CREATE VIEW db_class_assign AS SELECT assignmentid FROM class_assignment WHERE classid=9;</li>
<li>CREATE VIEW db_class_assign AS SELECT assignmentid, note, max_score FROM class_assignment, assignment WHERE classid=9 AND assignmentid = assignment.id;</li>
<li>the view's select statements cannot contain subqueries, only JOINs</li>
<li>once created, just select things as desired from the view</li>
<li>views automatically update, since they are only a window unto the data in the tables</li>
</ol>

<a class="pagelink" href="slide3.php">NEXT</a><br />

<a class="pagelink" href="slide1.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
