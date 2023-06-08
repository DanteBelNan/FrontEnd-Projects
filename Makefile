.PHONY:

migrate:
    php artisan migrate

copy_env:
    cp .env .env.example

build: 
	migrate