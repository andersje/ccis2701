<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>DB Design/SQL Production Final Test</title>
</head>
<body>
<p>For this series of exercises, we will be working with the diecast car tables that we used for the midterm.  Note that you now have a graphical map of these tables available, however.  It can be accessed at <a href='data_map.pdf'>data_map.pdf</a>.</p>
<p>To check your answers, you can compare your results to those in the <a href='results.txt'>results.txt</a> file</p>
<p>Several tables have been added to your database.  You can learn about them using the DESC command.  They are named diecast_manufacturer, diecast_order, diecast_car and diecast_scale.  All answers to the questions below must be contained in a file named finaltest.answers.  This portion of the test is worth a total of 40 points.  Since the test is only worth 100 points total, the extra ten points are to be considered extra credit.</p>
<ol>
<li>(3 points) display a list of all cars in the diecast_car table which have a quantity greater than zero.  Your display must include the following information:  make, model, year, color, production_year and quantity</li>
<li>(3 points) the <b>last_order_placed</b> column in the diecast_car table has been superceded by the diecast_order table.  Eliminate that column from the table</li>
<li>(3 points) The column named <b>year</b> in the diecast_car table has an ambiguous name.  Renamed it to be <b>model_year</b></li>
<li>(3 points) Show all columns from all rows in the diecast_order table which have not yet been received.</li>
<li>(6 points) Modify the answer to the above question so that it also displays the car's manufacturer, make, model, color, production year and year</li>
<li>(3 points) Take the answer to the previous question and turn it into a view named <b>on_order</b></li>
<li>(5 points) Create a view named <b>car_with_manuf</b> that contains the following information from the diecast_car and diecast_manufacturer tables:  manufacturer name, make, model, color, quantity, production year, scale_code</li>
<li>(5 points) Create a view named <b>diecast_car_with_scale</b> which contains all columns from the diecast_car table EXCEPT for the scale code.  Instead, show the description from the diecast_scale table.  Make sure the view is ordered by first the model_year of the car, then scale.</li>
<li>(3 points) show the select statement to display only 1/18 scale cars from the diecast_car_with_scale view.</li>
<li>(3 points) Create a view which shows everything that the answer to number 8 does, except only display cars which are 1/43 scale.  Call this view <b>diecast_car_43</b>.</li>
<li>(3 points) Create a select statement which only selects cars made by Ertl from the answer to number 9.</li>

</body>
</html>
