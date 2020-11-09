<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>

## Sobre

- Api para cadastrar e retornar informações do campeonato de futsal

## Rodar projeto

    ```bash
        1 Navegar até a pasta laradock dentro do projeto
        2 Clonar o repositório https://github.com/laradock/laradock
        3 Duplicar o arquivo env-exemple dentro da pasta laradock renomea-lo para .env
        4 Fazer todas configurações NGINX, MYSQL, PHPMYADMIN dentro do arquivo .env
        5 OBS: lembrar de usar portas que não estejam sendo usada no seu ambiente
        6 Rodar o comando -> (docker-compose up -d nginx mysql phpmyadmin) dentro da pasta laradock
    ```
## Função da Api

- Cadastrar e retorn Times
- Cadastrar e listar Jogadores
- Cadastra e listar Partidas

## Rotas

- Cadastrar Times
    ```bash
    Method -> POST
    Endpoint -> /time
    Parametros ->
        {
            "nome": ""
        }
    ```
- Retorna Times
    ```bash
    Method -> GET
    Endpoint -> /time/id
    ```
- Editar Times
    ```bash
    Method -> PUT
    Endpoint -> /time/id
    ```

- Cadastrar Jogadores
    ```bash
    Method -> POST
    Endpoint -> /jogadores
    Parametros ->
        {
            "nome": "",
            "cpf": "",
            "numero_camisa": ,
            "id_time": 
        }
    ```
- Retorna Jogador
    ```bash
    Method -> GET
    Endpoint -> /jogadores/id
    ```
- Editar Jogador
    ```bash
    Method -> PUT
    Endpoint -> /jogadores/id
    ```

- Cadastrar Patidas 
    ```bash
    Method: POST
    Endpoint -> /partida
    Parametros ->
        {
            "hora_inicio": "2020-11-08 16:00:00",
            "hora_termino": "2020-11-08 18:00:00",
            "placar_casa": "",
            "placar_fora": "",
            "id_artilheiro": "",
            "id_time_fora": ,
            "id_time_casa": ,
            "quantidade_gol_artilheiro": "",
            "quantidade_gol_partida": ""
        }
    ```
- Retorna Partida
    ```bash
    Method -> GET
    Endpoint -> /partida/id
    ```

- Editar Partida
    ```bash
    Method -> PUT
    Endpoint -> /partida/id
    ```
