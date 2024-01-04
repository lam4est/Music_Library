<?php 

if($_SERVER['SERVER_NAME'] == "localhost")
{
	define("ROOT", "http://localhost:8888/music_website/public");

	define("DBDRIVER", "mysql");
	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBNAME", "music_website_db");

}else{
	echo "Error";
}
