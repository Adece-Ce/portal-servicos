# Inicia os serviços Docker em modo detached
up:
	docker compose up -d

# Para os serviços Docker
stop:
	docker compose stop

# Para e remove os serviços Docker
down:
	docker compose --profile '*' down

# Compila os arquivos do frontend
compile_frontend:
	docker compose exec -T php bash -c "php bin/console tailwind:build --minify"
	docker compose exec -T php bash -c "php bin/console asset-map:compile"
