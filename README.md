# tompham97.github.io
Personal website hosted on github pages

## Step by step to building this website
### Set up local hosting server
Download XAMPP installer and run it. Set permission to allow everyone to read and write all files inside the application folder.
*Important*: make sure to set a specific permission to read only for everyone for the 'my.cnf' file in XAMPP/xamppfiles/etc.
This is done so that mySQL doesn't bug.
### Create a github repository for github pages
Name this new repository as '<username>.github.io'. Clone this repository to the htpdocs folder inside of XAMPP/xamppfiles/htdocs.

### Set up local hosting server (continued)
Open XAMPP, navigate to the 'Manage Servers' tab and select 'Start all'.
In the address bar of a browser, go to 'localhost/phpmyadmin' and create a new database named after the cloned repository with an additional '_db'.
### Set up Wordpress
Download Wordpress and extract the file. Place its contents into the cloned repository.
It is recommended to push this commit. Go to the wp-config.php file in the repository and add "define('FS_METHOD', 'direct');" above the database settings.
Next, go to 'localhost/<repository name>' in the browser and follow the instructions of the setup for Wordpress.
The username should be 'root' and password should be left blank. Create an account and log in with the credentials.
Trash or delete all of the default pages and plugins, the navigate to 'Add new' in the plugin section and install Starter Templates.
Follow [this guide](https://youtu.be/yC6ZfIF-R9k) on how to quickly setup and customize Wordpress.
Once the website is set up, install a new plugin called Simply Static and convert to static files.
