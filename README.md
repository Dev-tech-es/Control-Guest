DEVELOPING
=============

Control-Guest
=============

Management analysis of website visits by PHP programming.

```
require 'control.class.php';

//We called the class.
$log = new Control_guest(/*Indicate the type of record.*/);
```
Types of records:
 1. Local
 2. Remote
 3. txt

-The option 'Local' is directed to developing local scope .
-The option 'Remote' is directed to online projects.
-The option ' txt ' is aimed for any type of project because it creates log files of users ' .txt ' ;

Enable IP geolocation
=============
```
$log -> geo();
```
Enabled  time zone.
=============
Determine the date and time of the visit.

```
$log ->time();
```
Create the record.
=============
The optional parameter is :
The name of the file type if you 
determine in case the parameter 'txt'.

```
//We called to method
$log -> createLog(/*May indicate an optional parameter.*/);
```
If you have chosen the type ' txt ' if you
do not enter any name the default is 'log' .
Information on time zones .

=============
Then leave a link to see him spelling of your time zone.
[+info: Time zones](http://php.net/manual/es/timezones.php)
