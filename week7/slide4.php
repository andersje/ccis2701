<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 6:  CCIS 2701: Using Triggers</title>
</head>
<body>
<ul class="lectureslide">
<li>CREATE TABLE grade_mod (username varchar(60) ,activity enum('delete','insert','update'), studentid int, assignmentid int, mod_time datetime, primary key(username,datetime));</li>
<li>CREATE TRIGGER add_value AFTER INSERT ON assignment_score FOR EACH ROW INSERT INTO grade_mod SET activity='insert',studentid=NEW.studentid,assignmentid=NEW.assignmentid,username=USER(),mod_time=NOW();</li>
<li>CREATE TRIGGER grade_update AFTER UPDATE ON assignment_score FOR EACH ROW INSERT INTO grade_mod SET username=USER(),activity='update',studentid=NEW.studentid,assignmentid=NEW.assignmentid,mod_time=NOW();</li>
<li>voila, the beginning of an audit trail.</li>
</ol>

<a class="pagelink" href="slide5.php">NEXT</a><br />

<a class="pagelink" href="slide3.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>