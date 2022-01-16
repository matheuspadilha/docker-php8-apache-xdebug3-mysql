# Ambiente docker para desenvolvimento com PHP 8 apache, Xdebug 3 e MySql 8

![Docker](https://img.shields.io/badge/Docker-2CA5E0?style=for-the-badge&logo=docker&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![Apache](https://img.shields.io/badge/apache-%23D42029.svg?style=for-the-badge&logo=apache&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![PhpStorm](https://img.shields.io/badge/phpstorm-143?style=for-the-badge&logo=phpstorm&logoColor=black&color=black&labelColor=darkorchid)

## Requisitos
✔️ Docker  
✔️ docker-compose  
✔️ Idea utilizada PhpStorm  

### Informações importantes
**Pasta raiz do projeto** `src` "Adicione dentro desta pasta os arquivos `.php`"  
**_Observação_**: Nesta pasta contém um arquivo `index.php`, ao subir o container é feita uma verificação do acesso ao banco de dados MySql.  

Instalando extensões no php, no arquivo Dockerfile (`docker/Dockerfile`), no comando `RUN docker-php-ext-install mysqli pdo_mysql` é possivel adicionar novas extensões exemplo: `RUN docker-php-ext-install pdo_mysql json`  
**_Observação_**: Algumas extensões precisam de uma configuração, atente-se.

**php.ini** no arquivo php-additional.ini (`docker/php/php-additional.ini`), é possivel adicionar ou remover configurações referentes ao php e ao xdebug.

A estrutura conta com uma pasta dump (`docker/dump`), onde é possivel subir junto com o container. Basta adicionar o arquivo `.sql`

### Passo 1
Antes de subir o projeto faça uma copia do arquivo `env.example` e renomeio para `.env`  
Após isto preencha as variaveis de ambiente:  
`MYSQL_DB_DATABASE=nome_do_banco`  
`MYSQL_DB_USER=nome_do_usuario`  
`MYSQL_DB_PASS=senha_do_banco`

### Passo 2
Com tudo pronto, execute no terminal o seguinte comando: `docker-compose up` para subir os containers  
**_Observação_**: Caso não queira ver o log execute `docker-compose up -d`, após subir os containers o terminal é liberado e fica rodando em background.

### Passo 3
Acesse no navegador [http://localhost](http://localhost)
Se der tudo certo aparecerá a seguinte mensagem:  
`Current PHP version: 8.0.10`  
`Database connected successfully!`

### Stop da Aplicação
Parando os containers, no terminal execute o seguinte comando: `docker-compose stop`
