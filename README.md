# valed-kids fall lp 2023
## 1. lunch docker container
```bash
docker run --name="valedkids-fall-lp-2023" -p 8127:80 -v ${PWD}:/var/www/html -d php:apache
```

## 2. phpmailer, monologなど必要vendorのインストール
```
composer install
```


## 3. install mbstring
```bash
docker exec -it valedkids-fall-lp-2023 bash
apt-get update
apt-get install -y libpq-dev libonig-dev
docker-php-ext-install mbstring
```


## 4. copy env file for your environment
```bash
cd config
cp mail.dev.php mail.php
```