up:
	docker-compose up -d
build:
	docker-compose build
stop:
	docker-compose stop
destroy:
	docker-compose down --rmi all --volumes
l10dev:
	docker-compose exec l10dev-app bash
fresh:
	docker-compose exec l10dev-app php artisan migrate:fresh --seed
seed:
	docker-compose exec l10dev-app php artisan db:seed
test:
	docker-compose exec l10dev-app php ./vendor/bin/phpunit
stan:
	docker-compose exec l10dev-app ./vendor/bin/phpstan analyse
cbf:
	docker-compose exec l10dev-app ./vendor/bin/phpcbf -s --standard=PSR12 ./l10dev-app
pint:
	docker-compose exec l10dev-app ./vendor/bin/pint
cache:
	docker-compose exec l10dev-app composer dump-autoload -o
	docker-compose exec l10dev-app php artisan optimize:clear
	docker-compose exec l10dev-app php artisan optimize
cache-clear:
	docker-compose exec l10dev-app php artisan optimize:clear
cs:
	docker-compose exec l10dev-app ./vendor/bin/phpcs
ide_helper:
	docker-compose exec l10dev-app php artisan ide-helper:models -M
	docker-compose exec l10dev-app php artisan ide-helper:meta
db:
	docker-compose exec db bash
sql:
	docker-compose exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
npm:
	docker-compose exec node npm install
	docker-compose exec node npm run dev
