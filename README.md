# localwpdevelopment

Been kicking around and playing with docker .. these are my notes.

To Run  Core Stack .. apache / php / etc

## Configuration

### Apache

If you have any other server running using the default ports of
80 and 443 you will need to comment out or change to port number of them, or the container will not be able to run.

The following configuration just exposes port 3000 so it can be reached at:
[http://localhost:3000/](http://localhost:3000/)

```yml
ports:
      # - "80:8080" 
      - "3000:8080"
      # - "443:443"
```

There are a some ports that you cannot use, so [use this page](https://www.browserstack.com/question/39572) as a reference if needed.

### db

If you have another container in docker called __db__ you might need to change the name and references to it, or it may not run.

## Your content

Add your content to the __./public_html folder__

___

## Starting the containers

```sh
docker-compose up -d # runs in detached mode 
# or
docker-compose up  # keeps the terminal active and exits when command line is closed
```

## WP CLI tool

To run WP CLI tool

```sh
docker-compose run --rm cli bash
```

then

```sh
wp core download <--- download current core Wp release
```
