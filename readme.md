Kur Karşılaştırma Programı

Sql için exchange_rate şemanısını oluşturduktan sonra

create table exchange_rate
(
	id int auto_increment,
	exchange_urls varchar(255) null,
	adapter_name varchar(255) null,
	created_at timestamp default now() null,
	updated_at timestamp null,
	deleted_at timestamp null,
	constraint exchange_rate_pk
		primary key (id)
);

yapıştırdığınızda. Sql'imiz programımıza uygun bir şekilde oluşmuş olacaktır.


Programımız /var/www/html klasörüne attıktan sonra 

localhost/exchangerate yazdığımızda browserimiz çalışmaktadır.

--
Yeni bir adapter eklenmek istediğinde terminalden klasörümüze girip,

php artisan import:exchange_url {link} {adapter_name}

{link} için ilgili link yazılmadır.
{adapter} için adapter patternin ismi yazılmalıdır.


