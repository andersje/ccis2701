<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>DB Design/SQL Production Test 1</title>
</head>
<body>
<p>Several tables have been added to your database.  You can learn about them using the DESC command.  They are named diecast_manufacturer, diecast_order, diecast_car and diecast_scale.  All answers to the questions below must be contained in a file named test1.answers.  This portion of the test is worth a total of 40 points.  Since the test is only worth 100 points total, the extra ten points are to be considered extra credit.</p>
<p>You will have two hours to complete the test.  When you begin, AFTER you begin the session by entering your 'tee' command, enter the following command:  'SELECT NOW();' .  Do this again when you have finished the test.</p>
<ol>
<li>(5 points) display a listing of all diecast car models, makes, years, production years, color, quantity, manufacturer name (retrieved from the diecast_manufacturer table), and description of scale (retrieved from the diecast_scale table</li>
<li>(5 points) Show all cars on order, along with manufacturer name.  You need not display the scale of the car.</li>
<li>(2 points) Alter the above query so that only car orders which have not yet been received ('order_received is 0') are displayed.</li>
<li>(2 points) Alter the above query to show a total of how many cars are currently on order.</li>
<li>(2 points) Alter your answer to the first question so that only cars manufacturer by Ertl corporation are shown.</li>
<li>(2 points) Alter your answer to the first question so that all cars which are red are display.</li>
<li>(2 points) Alter the answer to the first question so that only cars with a quantity of less than 10 are displayed.</li>
<li>(2 points) Alter the answer to the first question so that cars are displayed in order of manufacturer name.</li>
<li>(2 points) Alter the answer to the first question so that only cars from before 1960 are showed (look at the value in the year column, not the value in the production_year column)</li>
<li>(2 points) Alter the answer to the first question so that only 1/18th scale and 1/24th scale cars are displayed.</li>
<li>(2 points) Alter the answer to the first question so that only cars manufactured before 2000 are displayed.</li>
<li>(7 points) Modify the diecast_manufacturer table to have a country_code column, which is an integer.  Have it default to '1'.  Also, create a table called 'country_code', which a field for country name, and a field for the countryID.  Add a row with the values of '1','USA'.  Also, add a row with '2','China', and '3', 'Hong Kong'.</li>
<li>(5 points) Show a total of all cars received in inventory, and all cars on order but not yet received.</li>

</body>
</html>
