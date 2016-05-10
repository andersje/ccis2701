<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>Lecture 5:  CCIS 2701: GRANT</title>
</head>
<body>
<ul class="lectureslide">
<li>GRANT is how we add users, and GRANT permissions</li>
	<pre>
	mysql>GRANT priv_type [(column_list)] [, priv_type [(column_list)] ...]
		ON {tbl_name | * | *.* | db_name.*}
		TO user_name [IDENTIFIED BY 'password']
		[, user_name [IDENTIFIED BY 'password'] ...]
		[WITH GRANT OPTION]
	</pre>
<li>making sense of the above</li>
<li>multi-level privileges:  tables, column, db, global</li>
<li>*.* == global, db.* == database</li>
<li>what can a username be?</li>
<li>why care what host the user connects from?</li>
<li>FLUSH PRIVILEGES;</li>
<li>REVOKE</li>
<li>SHOW GRANTS</li>
</ul>

<a class="pagelink" href="slide2.php">NEXT</a><br />

<a class="pagelink" href="index.php">INDEX</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
