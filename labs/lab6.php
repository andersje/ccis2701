<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="http://www.linux-classes.com/includes/class_format.css" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>DB Design/SQL php lab 5</title>
</head>
<body>
<ol>
<li>(2 points) Create a view named 'avon_books' which shows all books published by Avon (publisher id 5)</li>
<li>(4 points) Create a view named 'book_count' which shows all publishers and the count of books they have published.</li>
<li>(3 points) Create a view named 'incomplete_book_data' which shows all books which are missing ISBN, title or publisher_id</li>
<li>(3 points) Create a view called 'pub_no_addr' which shows all publishers which are missing any of the following data:  address, city, state, zip.  Your view should display the name of the publisher, and all address information.</li>
<li>(5 points) Create a trigger on the diecast_order table which will update the diecast_car table to have the 'quantity' contained in the order whenever the receive flag is set to 1.  That is, if an order of 250 cars of id 14 are received, simply set the value of quantity in the diecast_car table to be 250</li>
<li>(3 points) Alter the above trigger so that it now adds the quantity contained in the order to the quantity in the diecast_car table.  That is, if the quantity of car id 14 was 100 BEFORE the order, and you've just received 250 more, the new quantity should be 350.</li>
<li>(2 points) email the code for the above two triggers to the instructor</li>
<li>(8 points) Create a stored procedure which takes one argument, and shows the following things:  the square of it, the double of it (e.g. if given 10, it will return 20), and half of the argument.  Call your stored procedure 'contrived_sp'.</li>

</body>
</html>
