# Demo website

This demo website is used to demo test scripting with Selenium and Appium.

## Docker
This demo is compose of 3 dockers :
* Frontend demo website and Backend demo website
* MySql Server
* PhpMyAdmin

### A few Docker command

#### Rebuild
```
sh rebuild.sh
```

#### Remove all images
```
sh remove-all-docker.sh
```

#### Build
```
docker-compose build
```

#### Start
```
docker-compose up -d
```

#### Stop
```
docker-compose down
```