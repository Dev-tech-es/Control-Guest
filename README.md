[![download](http://daigaku.chabudai.es/css/img/classic_web_buttons_one.png)](https://github.com/brimo300/Control-Guest.git) 
Control-Guest [ver.1.0]
=============


##Management analysis of website visits by PHP programming.

Configuration
=============
Before using "Control-Guest" should you configure the connection data from the database .
* TypeRecord / local.php
* TypeRecord / remote.php

```
//Example
$host_remote = 'localhost';//Insert your domain	
$user_remote = 'user';//Insert your user
$pass_remote = 'password'; //Insert your pass_user
$db_remote 	 = 'logs'; //Insert your name database
```
Start "Control-Guest"
=============
After that you can use the class "Control -Guest ".
```
require 'control.class.php';

//We called the class.
$log = new Control_guest(/*Indicate the type of record.*/);
```
Types of records:
 1. Local
 2. Remote
 3. txt

* The option 'Local' is directed to developing local scope .
* The option 'Remote' is directed to online projects.
* The option ' txt ' is aimed for any type of project because it creates log files of users ' .txt ' ;

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
Then leave a link to see him spelling of your time zone.
[+info: Time zones](http://php.net/manual/es/timezones.php)
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

Example txt file.
=============
```
Visit of the day 15-12-14 to 06:14:26
Browser: Google Chrome
Operating System: Linux
Robot: Unknown
City: Mountain View
Ip: 74.125.195.147
Country code: US
Continent Code: NA
Alt: 37.4192
Long: -122.0574
Asn: Unknown
Isp: Google Inc.
Time zone: America/Los_Angeles
#######################################
```
