## about
   simple ticket system with mail tracker

## setup
  * get clone the project
  * handle your .env file like Database and mail
  * edit Database config in docker compose
  * run in CMD docker-compose up --build -d
  * and run docker exec -it main sh
  * and run php artisan migrate

## test API
  * you can find CRUD of ticket in api/ticket   
  * you can find CRUD of reply in api/reply   

## steps
  * create model and migration file for ticket and reply
  * create relation one to many between ticket and Reply
  * create request and Controller for both
  * create notifications to send mail when create
