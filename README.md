# About This repository:
This is an examaple of docker-compose usecase with php-fpm, nginx and composer altogether.

note:docker-compose files are on version 3.

## Hot to use:
### 1)use -f option and tell docker-compose.run.yml (or other compose files)
### 2)don't forget to "up"
 e.g. docker-compose -f docker-compose.run.yml up
### 3)accessing the page
	localhost:8080 from your browser.

## Points:
### 3)Composer
	When dealing with composer image and composer commands, always use CMD instead of RUN.
	"COPY" directive is not used for  "composer install" in Dockerfile, files are shared by "volumes" in compose file.
### 4)nginx directory.
	./code/index/ is used for nginx's root directory.
	Any files that are on this directory are EXPOSED to public.
	In the wild web world, some people are actually exposing their WHOLE APP directory by nginx(which absolutely is not recommended).
