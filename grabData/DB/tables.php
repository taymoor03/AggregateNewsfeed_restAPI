<?php
include "DB/donnect.php";

$query = $conn->query("CREATE TABLE newsfeed(
	id int not null auto_increment,
	title varchar(255) not null,
	pubDate varchar(255) not null,
	description text not null,
	link varchar(255) not null,
	author varchar(255) not null,
	log_date datetime not null,
	PRIMARY KEY(id),
	UNIQUE KEY 'title' ('title')
));


?>