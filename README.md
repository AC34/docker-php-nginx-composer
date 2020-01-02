![LICENSE](https://img.shields.io/github/license/AC34/docker-v3-php-nginx-composer?color=blue)
![docker-version](https://img.shields.io/badge/dynamic/yaml?color=blue&label=docker-version&query=version&url=https%3A%2F%2Fraw.githubusercontent.com%2FAC34%2Fdocker-v3-php-nginx-composer%2Fmaster%2Fdocker-compose.run.yml)
## note
Don't get confused about Docker version.

# About This repository:
This is an examaple of docker-compose usecase with php-fpm, nginx and composer altogether.


## Hot to use:
### 1)use -f option and tell docker-compose.run.yml (or other compose files)
### 2)don't forget to "up"
 e.g. docker-compose -f docker-compose.run.yml up
### 3)accessing the page
```
localhost:8080
```
from your browser.

## Points:
### 3)Composer
When dealing with composer image and composer commands, always use CMD instead of RUN.
```
COPY
```
directive is not used for  
```
composer install
```
in Dockerfile, files are shared by 
```
volumes
```
directive in compose file.
### 4)nginx directory.
```
./code/index/
```
is used for nginx's root directory.
Any files that are on this directory are EXPOSED to public.
In the wild web world, some people are actually exposing their WHOLE APP directory by nginx(which absolutely is not recommended).
