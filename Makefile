docker-connect:
	docker exec -it qlks-fe-app-web-1 bash
deploy:
		rsync -avhzL --chmod=777 -O --delete \
    				--no-perms --no-owner --no-group \
    				--exclude .git \
    				--exclude .idea \
    				--exclude .env \
    				--exclude node_modules \
    				--exclude /vendor \
    				--exclude bootstrap/cache \
    				--exclude storage/logs \
    				--exclude storage/framework \
    				--exclude storage/app \
    				--exclude public/storage \
    				--exclude composer.json \
                    --exclude composer.lock \
    				. ubuntu@54.179.45.200:/var/www/html/qlks_fe
