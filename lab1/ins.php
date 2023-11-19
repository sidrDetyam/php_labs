<?php

$mysql_user = "root";
$conn = mysqli_connect("mysql_db", $mysql_user, "pass");

if (!$conn) {
    die("?? ??????? ???????????? ? MySQL");
}

$query = "create database sample";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$database = "sample";
mysqli_select_db($conn, $database)
or die("?? ??????? ??????? ???? ?????? $database");

# ???????? ??????? sal
$query = "create table sal
  (snum int(4) NOT NULL,
   sname varchar(10) NOT NULL,
   city  varchar(10) NOT NULL,
   comm  double(7,2) NOT NULL,
   PRIMARY KEY (snum))";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

# ???????? ??????? cust
$query = "create table cust
  (cnum int(4) NOT NULL,
   cname varchar(10) NOT NULL,
   city  varchar(10) NOT NULL,
   rating int(6) NOT NULL,
   snum int(5),
   PRIMARY KEY (cnum))";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

# ???????? ??????? ord
$query = "create table ord
  (onum int(4) NOT NULL,
   amt  double(7,2) NOT NULL,
   odate varchar(10) NOT NULL,
   cnum int(4),
   snum int(4),
   PRIMARY KEY (onum))";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

# ??????? ?????? ? ??????? sal
$query = "INSERT INTO sal (snum, sname, city, comm)
  VALUES (1001, 'Peel', 'London', 0.12)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO sal (snum, sname, city, comm)
  VALUES (1002, 'Serres', 'San Jose', 0.13)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO sal (snum, sname, city, comm)
  VALUES (1004, 'Motica', 'London', 0.11)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO sal (snum, sname, city, comm)
  VALUES (1007, 'Rifkin', 'Barcelona', 0.15)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO sal (snum, sname, city, comm)
  VALUES (1003, 'Axelrod', 'New York', 0.10)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

# ??????? ?????? ? ??????? cust
$query = "INSERT INTO cust (cnum, cname, city, rating, snum)
  VALUES (2001, 'Hoffman', 'London', 100, 1001)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO cust (cnum, cname, city, rating, snum)
  VALUES (2002, 'Giovanni', 'Rome', 200, 1003)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO cust (cnum, cname, city, rating, snum)
  VALUES (2003, 'Liu', 'San Jose', 200, 1002)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO cust (cnum, cname, city, rating, snum)
  VALUES (2004, 'Grass', 'Berlin', 300, 1002)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO cust (cnum, cname, city, rating, snum)
  VALUES (2006, 'Clemens', 'London', 100, 1001)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO cust (cnum, cname, city, rating, snum)
  VALUES (2008, 'Cisneros', 'San Jose', 300, 1007)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO cust (cnum, cname, city, rating, snum)
  VALUES (2007, 'Pereira', 'Rome', 100, 1004)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

# ??????? ?????? ? ??????? ord
$query = "INSERT INTO ord
  VALUES (3001, 18.69,   '03-OCT-90', 2008, 1007)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
  VALUES (3003, 767.19,  '03-OCT-90', 2001, 1001)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
  VALUES (3002, 1900.10, '03-OCT-90', 2007, 1004)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
  VALUES (3005, 5160.45, '03-OCT-90', 2003, 1002)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
  VALUES (3006, 1098.16, '03-OCT-90', 2008, 1007)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
    VALUES (3009, 1713.23, '04-OCT-90', 2002, 1003)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
   VALUES (3007, 75.75,   '04-OCT-90', 2004, 1002)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
    VALUES (3008, 4723.00, '05-OCT-90', 2006, 1001)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
  VALUES (3010, 1309.95, '06-OCT-90', 2004, 1002)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

$query = "INSERT INTO ord
  VALUES (3011, 9891.88, '06-OCT-90', 2006, 1001)";

$result = mysqli_query($conn, $query)
or die("<p>??????: " . mysqli_error($conn));

echo "???????? ? ??????? ?????? ? ??????? ???????";

?>
