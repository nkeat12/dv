
if [ ! -d "htdocs/wp-admin" ]; then
	echo 'Installing WordPress (release version) in compliance/htdocs...'
	if [ ! -d "./htdocs" ]; then
		mkdir ./htdocs
	fi
	cd ./htdocs
	wp core download --locale=en_US --allow-root 
	wp core config --dbname="compliance" --dbuser=wp --dbpass=wp --dbhost="localhost" --dbprefix=wp_ --locale=en_US --allow-root --extra-php <<PHP
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);
PHP
	wp core install --url=compliance.dev --title="compliance" --admin_user=admin --admin_password=password --admin_email=admin@localhost.dev --allow-root
	
	
  
  
	
	
	cd -

fi


