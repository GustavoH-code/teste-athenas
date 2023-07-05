# Teste Athenas
## _Introdução_

Este teste consiste em uma aplicação de autenticação JWT e CRUD e usuários.

## Instalação

Esta aplicação requires [Node.js](https://nodejs.org/) v10+ para funcionar.

Clone o repositório e inicie o server.

```sh
git clone https://github.com/GustavoH-code/teste-athenas.git
php artisan serve
```

Feito isso, abra outro terminal e rode o banco de dados com as seeders

```sh
php artisan migrate --seed
```

# API

## Autenticação
Para ter acesso a API é necessário um token JWT válido.
Existe um usuário pré cadastrado no banco de dados aonde é possível adquirir este token.
```
{
	"email": "admin@admin.com",
	"password": "admin123"
}
```
#### Response
```
{
	"status": "success",
	"user": {
		"id": 15,
		"name": "admin",
		"email": "admin@admin.com",
		"category_id": 1,
		"created_at": "2023-01-30T16:25:32.000000Z",
		"updated_at": "2023-01-30T16:25:32.000000Z"
	},
	"authorisation": {
		"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L3Rlc3RlLWF0aGVuYXMvcHVibGljL2FwaS9hdXRoL2xvZ2luIiwiaWF0IjoxNjc1MTE1MDE0LCJleHAiOjE2NzUxMTg2MTQsIm5iZiI6MTY3NTExNTAxNCwianRpIjoidHVqTnh1dHAxNlhpbDlOcCIsInN1YiI6IjE1IiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.pA-j6txd565Bo4aF59cqKnHHdpkp2v8D0ZKw1pDcCs4",
		"type": "bearer"
	}
}
```
Copie o campo o código do campo "token" e cole no header da requisição para acessar as rotas.


## Rotas
### Novo usuário
```
POST http://localhost/teste-athenas/public/auth/register HTTP/1.1
Content-Type: multipart/form-data
Accept: application/json
```
#### Corpo do envio
```
{
	"name" : "Teste Usuário",
	"email" : "teste@teste.com.br",
	"category" : 2,
	"password" : "1234"
}
```
#### Listar usuários

```
GET http://localhost/teste-athenas/public/api/users HTTP/1.1
Content-Type: multipart/form-data
Accept: application/json
```

#### Listar um usuário

```
GET http://localhost/teste-athenas/public/api/users/{id} HTTP/1.1
Content-Type: multipart/form-data
Accept: application/json
```

#### Editar usuário

```
PUT http://localhost/teste-athenas/public/api/users/{id} HTTP/1.1
Content-Type: multipart/form-data
Accept: application/json
```
#### Corpo do envio
```
{
	"name" : "Name Edit",
	"email" : "edit@edit.com",
	"category" : 3,
	"password" : "abcd"
}
```
#### Deletar um usuário

```
DELETE http://localhost/teste-athenas/public/api/users/{id} HTTP/1.1
Content-Type: multipart/form-data
Accept: application/json
```



