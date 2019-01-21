Symfony Standard Edition
========================

Version Symfony 3.4

#How to install auction-system

* Clone directory

Type
```
composer install
```

When prompt about mailer_user type (important!): 
```
admin@localhost
```

* Type in root directory
```
bin/console doctrine:database:create
```
* and next type
```
bin/console doctrine:schema:update --force
```
##Ready to go
###run directory web in your web browser

####System is in Polish Language (not translations)
