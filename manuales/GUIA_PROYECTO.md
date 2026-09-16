# Crear proyecto en Laravel
composer create-project laravel/laravel:^13.0 mi-app

# Inicializar Laravel
php artisan serve

# Crear un Controlador
php artisan make:controller ClienteController

# Crear un Modelo
php artisan make:model Cliente

# ---- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --  
# Configurar API en Laravel 13 
# Paso 1. Instalar/habilitar la estructura API con el siguiente comando:
php artisan install:api
# Paso 2. Durante la instalación apare lo siguiente:
One new database migration has been published. Would you like to run all pending database migrations? (yes/no) [yes]: > no
# Paso 3. Si aparece el error de bootstrap/cache, Comprobar si existe: 
mkdir bootstrap\cache 
Si responde: Ya existe el subdirectorio o el archivo bootstrap\cache quiere decir que esta bien, si no se crear la carpeta.
# Paso 4. Comprobar atributos con el siguiente comando:
attrib bootstrap\cache
Si aparece: A    R    bootstrap\cache la R significa solo lectura.
# Paso 5. Quitar solo lectura:
attrib -R bootstrap\cache
# Paso 6. Comprobar nuevamente:
attrib bootstrap\cache
Debe quedar sin R: A bootstrap\cache
# Paso 7. Comprobar que PHP pueda escribir:
php -r "var_dump(is_writable('bootstrap/cache'));"
Debe aparecer: `bool(true)`
# Paso 8. Iniciar Laravel
php artisan serve