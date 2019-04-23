
# Health Care Monitoring System Guide

 First thing first
 =================
 
 
1.Download latest "wampserver" from this link http://www.wampserver.com/en/
  and install it
  
2.Run warmserver and wait for the icon to become green in color in system tray

3.From system tray click on warmserver icon and choose 'Localhost'

4.A page will open in your default browser, from there click on 'phpmyadmin' under 'Tools' section

5.A login page will open, now type 'root' (without quotes) as the username and leave the password field as blank and click on 'Go'

6.Now click on 'useraccounts', then click on 'edit privileges' in which row, username is as 'root'

7.Now click on 'change password' and enter the password as '1234' (excluding quotes) retype the same, 1234 and finally click on 'Go'

8.Now click on 'Databases', it will ask you to login again, this time type 'root' (excluding quotes) as username and password as '1234' (excluding quotes) and click on 'Go'.

9.Now click on 'Databases' then 'New' then type 'db_hc' (without quotea) in the field of 'Database name' and click on 'Create' button

10.Leave the browser window as it is now go to this directory  C:\wamp64\www  (using 'File Explorer') and make a folder named as 'My_site' (without quotes)

11.now open the folder just created (My_Site) and copy the following folders and files in it
  i)    bodybg
  ii)   color
  iii)  css
  iv)   Database File
  v)    doctors
  vi)   font-awesome
  vii)  fonts
  vii)  img
  viii) js
  ix)   php
  x)    plugins
  xi)   don't copy the folder named 'pages' instead of, copy all the files which are inside that folder to My_Site
  
  and go back to the browser window
  
  
12.Now click on the 'db_hc' (from the left most panel) and then click on 'import' (from the top bar) and browse to this path
C:\wamp64\www\My_Site\Database File
and select the file (db_hc.sql) and click on 'Go' button

13.Now you are all set, just type the following address in url bar of your browser
http://localhost/my_site/home.php   (this will open the home page of the project)


Note: Bookmark following urls to access home page of the project and phpmyadmin login page to access the datadabe
http://localhost/my_site/home.php       (to access the project's home page)
http://localhost/phpmyadmin/index.php   (to access the datadabe and tables)



