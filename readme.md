## Installation

- [Install docker](https://www.docker.com/docker-mac)
- Clone repo `git clone https://github.com/adamjv90/laravel-graphql-test.git && cd laravel-graphql-test`
- Start the app `docker-compose up`
- Seed data `docker-compose exec myapp php artisan db:seed`

## Playing With The Graph

After finishing installation view the [GraphiQL GUI](http://0.0.0.0:3000/graphiql).

Example queries:

Selecting all Lookbook Designers
```
query FetchLookbookDesigners {
  lookbook_designers {
    id
    email
    name
    cover
  }
}
```

Updating a Lookbook Designers name
```
mutation lookbook_designers {
	updateLookbookDesigner(id: "1", name: "Adam Veary") {
		id
		name
	}
}
```
