cg-php-demo
===========
A demo of the CheddarGetter api and PHP library as a simple service


To set up, clone the repo and set up a virtualhost to point to index.php
in the root of the project.

Then, edit the main config file located in protected/config to pass your
CheddarGetter API information to the CG component. You should have an 
array that looks something like
````
    'cheddar'=>array(
    			'class'=>'CheddarGetterClient',
    			'cgurl'=>'www.cheddargetter.com',
    			'cgemail'=>'you@youremail.com',
    			'cgpass'=>'hunter2',
    			'cgapp'=>'APP_NAME',
    		),
````			
so we can make API calls on your behalf. You should also edit the db credentials
to properly point to your preferred database.

Finally, run the SQL in protected/modules/user/data/schema.mysql.sql through
your favorite SQL program so we can properly create and track users.