# Toucantech Demo App

This is a simple app to demonstrate how Laravel, Vue.JS, Inertia, Bootstrap, MySQL can be used to add, view data to a web application.

## Build the app


This app requires following softwares installed in your computer.
- [Composer](https://getcomposer.org/download/). Check whether `composer` command is available on your terminal.
```
composer -V
```

- [Docker desktop](https://www.docker.com/products/docker-desktop/)

- Check whether `make` command is available on your terminal. Install it if it is not found.
```
make -v
```
- This app will use the ports 80, 5173, 3306 on your computer, hence they should be available and NOT being used by any of the computer's programs
```
git clone git@github.com:chamithlkml/toucantech-demo.git
cd toucantech-demo
make up
```
This should download the Docker images and build the app from scratch.

### Run tests
```
make test
```
This will run the tests and give you the results.

### Stop containers
```
make down
```