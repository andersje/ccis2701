<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>multi-table SELECTs</title>
</head>
<body>
<ul class="lectureslide">
<li>SELECT t1.col1, t2.col1 FROM t1, t2 WHERE t1.col1 = 'someval'; #onscreen demo</li>
<li>SELECT truck.license FROM truck, driver WHERE driver.name = LIKE '%dav%' AND driver.id = truck.driverid;</li>
<li>SELECT truck.id, driver.fname, driver.lname FROM truck, driver WHERE truck.year < 1998 and driver.id = truck.driverid;</li>
<li><a href="http://dev.mysql.com/doc/refman/5.0/en/select.html">SELECT syntax reference</a>
</li>

<a class="pagelink" href="slide6.php">NEXT</a><br />

<a class="pagelink" href="slide4.php">PREVIOUS</a><br />

<a class="pagelink" href="../index.php">Master Index</a><br />

</body>
</html>
