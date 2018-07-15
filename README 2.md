
# service System

## Cara Install
* Download [service system ](https://github.com/hendra47/service/archive/master.zip) 
##Setting Database ada di file .env  / Disesuaikan ya...

	DB_CONNECTION=mysql
	DB_HOST=localhost
	DB_PORT=3306
	DB_DATABASE=db_service
	DB_USERNAME=root
	DB_PASSWORD=

-----
<a name="feature2"></a>
##Cara Menjalankan 
* Copy folder ke htdocs
* Jalankan xammp : mysql & apache
* import database db_mds.sql ke database mysql
* ketikan di browser  http://localhost/service/public/login

##SPK PGRI:


##Pengguna Aplikasi :
* Administrator  => Username : admin ,password : admin 
##Note :
*php artisan infyom:scaffold driver --fieldsFile=vendor/infyomlabs/laravel-generator/samples/driver.json
*php artisan infyom:scaffold kriteria --fieldsFile=db_generator/setup_kriteria.json



