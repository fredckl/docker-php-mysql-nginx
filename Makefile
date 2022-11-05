.PHONY: up down clean

up:
	./composer install -noa
	docker-compose up -d --build

down:
	docker-compose down

clean:
	docker-compose stop
	docker-compose rm -f
	rm -rf _data vendor