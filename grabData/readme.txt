
how to run the code
	1. copy the folder to the server folder
	2. import the database to phpmyadmin
	3. run the code using localhost. localhost/grabData/
	4. click enter new feed list
	5. how to enter new feed list
		a. copy the url of the feed you want to grab data from
		b. fill it in the url input
		c. full in other datas.
run the cron.php file to automatically insert new feeds to database
the cron file insert new feeds after 10 seconds
the file prevent duplication of data

#########################***** description ***#############################
database
there are two tables in the db
	1. feed_list table. the table holds information of the source where the feeds are coming from.
	2. feeds table. hold the data retrieved by feed_list

The project is made up of two section
		backend and frontend
the backend has a two files. one of the file is for adding feed list to database. The data added by this feedlist will be saved to the feed_list table in DB.
the other file display the total feed list availble on the database.

when the source added, the feeds table will be populated automatically within a given period of time. only when connected on internet.

frontend
data are sent to the front end by use of rest api.
to send the data we used PUT function, to display data contained on the data base.
