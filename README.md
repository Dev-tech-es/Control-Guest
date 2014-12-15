DEVELOPING
=============

Control-Guest
=============

Management analysis views .

```
<?php 
require 'control.class.php';

//We called the class.
$log = new Control_guest(/*Indicate the type of record.*/);
?>
```
Types of records:
 1. Local
 2. Remote
 3. txt

The option 'Local' is directed to developing local scope .
The option 'Remote' is directed to online projects.
The option ' txt ' is aimed for any type of project because it creates log files of users ' .txt ' ;

```
<?php 
//We called to method
$log -> createLog(/*May indicate an optional parameter.*/);

/*
The optional parameter is :
The name of the file type if you 
determine in case the parameter 'txt'.

If you have chosen the type ' txt ' if you
do not enter any name the default is 'log' .
*/
 ?>
```
Complementary method .
=============
Determine your time zone.

```
<?php
$log ->time(/*Show time zone.*/);
//Default value: Europe/Madrid
?>
```
Information on time zones .
=============
Then leave a link to see him spelling of your time zone.
[+info: Time zones](http://php.net/manual/es/timezones.php)
