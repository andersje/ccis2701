<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>ALTERing tables in your database</title>
</head>
<body>
<ul class="lectureslide">
<li>ALTER TABLE</li>
<li>ALTER TABLE student ADD COLUMN nickname VARCHAR(30); #add a new column for nickname</li>
<li>ALTER TABLE student ADD COLUMN lockerid INT DEFAULT '0' AFTER oldcol; #add a lockerid column</li>
<li>ALTER TABLE student DROP COLUMN lockerid;</li>
<li>ALTER TABLE student CHANGE COLUMN lockerid locker_id INT; #rename the lockerid column to locker_id</li>
<li>ALTER TABLE student CHANGE COLUMN nickname nickname VARCHAR(50); # expand the nickname field</li>
<li>in all the above examples, 'COLUMN' is optional</li>
<li>ALTER TABLE student ORDER BY lname; # reorder the table's records permanently based on value of lname -- nonpersistant</li>
<li><a href="http://dev.mysql.com/doc/refman/5.0/en/alter-table.html">ALTER TABLE syntax reference</a>
</li>

<a class="pagelink" href="slide5.php">NEXT</a><br />

<a class="pagelink" href="slide3.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
