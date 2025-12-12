# Commande docker

## Créer un conteneur

```bash
    docker run <nom de l\'image>
```

## Lister les conteneurs

```bash
    docker ps
```

```bash
    docker container ps
```

### Lister tous les conteneurs

```bash
    docker ps -a
```

```bash
    docker container ps -a
```

## Lister les images

```bash
    docker image ls
```

```bash
    docker images
```

## Supprimer un conteneur

```bash
    docker rm <id du container>
```

```bash
    docker container rm <id du container>
```

## Supprimer une image

```bash
    docker image rm <id de l\'image>
```

```bash
    docker rmi <id de l\'image>
```

## Créer un conteneur et interagir

```bash
    docker run -it <nom de l'\image: version>
```

## Créer et supprimer un conteneur lors de la sortie

```bash
    docker run -it --rm <nom de l'\image: version>
```

## Redémarrer un conteneur

```bash
    docker start <Id conteneur>
```

## Arreter un conteneur

```bash
    docker stop <Id conteneur>
```

## Entrée et intéragir

```bash
    docker exec -it <Id conteneur> bash
```

## Redémarrer un conteneur et intéragir

```bash
    docker start -ai <Id conteneur>
```

## Créer un volume mapper

### docker run -it --rm -v C:/Users/yann1/Desktop/Docker/test:/test-container ubuntu

```bash
    docker run -it --rm -v <Chemin dossier local> : <Chemin dossier conteneur> <nom image>
```

## Créer un volume managés

```bash
    docker volume create <nom du volume>
```

## Supprimer un volume managés

```bash
    docker volume rm <nom du volume>
```

## Lister les volumes

```bash
    docker volume ls
```

## Lier un volume managé

```bash
    docker run -it --rm -v <nom du volume> : <Chemin dossier conteneur> <nom image>
```

## Information du volume managé

```bash
    docker volume inspect <nom du volume>
```

## Mappage des ports

```bash
    docker run --rm -p <port local> : <port conteneur> <nom de l\'image>
```

## Il faut installer iproute2 && iputils-ping dans les conteneurs à connecter

```bash
    apt update
```

```bash
    apt install -y iputils-ping
```

```bash
    apt install -y iproute2
```

```bash
    apt update && apt install -y iputils-ping iproute2
```

## List des réseaux celtak/ubuntu-ping-ip

```bash
    docker network ls
```

```bash
    docker network inspect <nom du réseau>
```

## Afficher l'ip

```bash
    ip -c a
```

## Isoler un conteneur

```bash
    docker run --rm -it --network=none <nom de l\'image>
```

## Créer un réseau bridge

```bash
    docker network create --driver=bridge <nom du réseau>
```

## Créer un conteneur et le connecter à un réseau

```bash
    docker run -it --rm --network=<nom du réseau> --name=<nom du conteneur> <nom de l\'image>
```

## Créer un conteneur et après le connecter à un réseau

```bash
    docker run -it --rm --name=<nom du conteneur> <nom de l\'image>
```

```bash
    docker network connect <nom du réseau> <nom du conteneur>
```

```bash
    docker network disconnect  <nom du réseau> <nom du conteneur>
```

```bash
    docker network rm  <nom du réseau> <nom du conteneur>
```

## Dockerfile

## Construire

```bash
    docker build -t <nom de l\'image> .
```

## Ajouter l'image au DockerHub

```bash
    docker tag <nom de l\'image> <nom du repository>
```

## Pousser une image dans le DockerHub

```bash
    docker push <nom du repository>
```

### composoe.yml

### compose.yml simple

```docker
services:
    <nom du service>:
        image:<nom de l'image>
        container_name: <nom du contener>
```

## Lancer le compose.yml

```bash
    docker compose up -d
```

### Interagir avec le conteneur

```docker
services:
    <nom du service>:
        image:<nom de l'image>
        container_name: <nom du contener>
        stdin_open: true
        tty: true
```

```bash
    docker exec -it <id ou nom du conteneur> bash
```

### Volume mappé compose.yml

```docker
services:
    <nom du service>:
        image:<nom de l'image>
        container_name: <nom du contener>
        stdin_open: true
        tty: true
    volumes: 
        - <chemin du dossier local> : <chemin du dossier conteneur>
```

### Volume mangé compose.yml

```docker
services:
    <nom du service>:
        image:<nom de l'image>
        container_name: <nom du contener>
        stdin_open: true
        tty: true
    volumes: 
        - <nom du volume> : <chemin du dossier conteneur>

volumes:
    <nom du volume>
```

### Réseau compose.yml

```docker
services:
    <nom du service1>:
        image:<nom de l'image>
        container_name: <nom du contener1>
        stdin_open: true
        tty: true
        networks:
            - <nom du reseau>
    <nom du service2>:
        image:<nom de l'image>
        container_name: <nom du contener2>
        stdin_open: true
        tty: true
        networks:
            - <nom du reseau>

    <nom du service3>:
        image:<nom de l'image>
        container_name: <nom du contener3>
        stdin_open: true
        tty: true        
        networks:
networs:
    <nom du reseau>:
    driver: <type de réseau> bridge
```

## httpd:2.4

## C:/Users/yann1/Desktop/Docker/app

## /usr/local/apache2/htdocs/index.html
