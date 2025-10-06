# Inicia os serviços Docker em modo detached
up:
	docker compose up -d

# Para os serviços Docker
stop:
	docker compose stop

# Para e remove os serviços Docker
down:
	docker compose --profile '*' down