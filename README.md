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


#### Your content

Add your content to the __./public_html folder__
___

## Starting the containers

### ! Important

The first time you run your docker stack you will need to make sure all the docker files have been rebuilt, if this step is not done, you will find your debug (xdebug) is probably not working.

```sh
docker compose up --build -d
```

After the initial install you can restart the stack using the following.

```sh
docker compose up -d # runs in detached mode 
# or
docker compose up  # keeps the terminal active and exits when command line is closed
```

You should now have the following in your Docker Desktop environment.

![Alt text](images/image1.png)

## WP CLI tool

To run WP CLI tool

```sh
docker compose run --rm cli bash
```

then

```sh
wp core download # download current core Wp release
```
