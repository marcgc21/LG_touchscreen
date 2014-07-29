Install phpMyAdmin
The easiest way to install phpmyadmin is through apt-get:

sudo apt-get install phpmyadmin


During the installation, phpMyAdmin will walk you through a basic configuration. Once the process starts up, follow these steps:

Select Apache2 for the server
Choose YES when asked about whether to Configure the database for phpmyadmin with dbconfig-common
Enter your MySQL password when prompted
Enter the password that you want to use to log into phpmyadmin
After the installation has completed, add phpmyadmin to the apache configuration.

sudo nano /etc/apache2/apache2.conf
Add the phpmyadmin config to the file.

Include /etc/phpmyadmin/apache.conf
Restart apache:

sudo service apache2 restart
