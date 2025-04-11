# DockerAPI
API RESTful basica criada com PHP puro usando Docker

## 🔧 Tecnologias

- PHP 8.1
- Docker

## Como rodar o projeto com Docker

Builde com 
    docker build -t php-api .

rode com
    docker run -p 8000:8000 php-api

Ex de chamada
    http://localhost:8000/usuarios
