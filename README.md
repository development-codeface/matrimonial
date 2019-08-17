# mplan
<h2>Matrimonial </h2>
Project Name: Matrimonial site

<b>Descripation :</b>
<p> This is matrimonial site </p>     
<h2> Installation </h2>
Step - 1:

Create one data base in MySql and import matrimonial.sql file.

Step - 2:

Go to mplan>application>config here find a database.php file and change all MySQL detail.
Line number - 51

	$db['default']['hostname'] = 'localhost';
	
	$db['default']['username'] = 'root';
	
	$db['default']['password'] = '';
	
	$db['default']['database'] = 'mplan';
Step - 2

Go to mplan->.httaccess file change this file.

Find this line /

		<IfModule mod_rewrite.c>
    		RewriteEngine On
    		RewriteBase /mplan/
    
    and change "mplan" this is a folder name where save your project:
	
