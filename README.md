# lumen
Implementación de lumen, escribir comando: 
		composer create-project --prefer-dist laravel/lumen proyectoLumen
	
modificar el archivo .env
		DB_HOST = localhost
		DB_DATABASE = db_ejercicio
		DB_USERNAME = root
		DB_PASSWORD = tu contraseña
	
descomentar en /bootstrap/app.php 
		linea 26 $app->withFacades();
		linea 28 $app->withEloquent();

	/routes/web.php	
	$router->get('/clientes', ['uses' => 'ClienteController@ObtenerClientes']);
	$router->get('/cliente/{id}', ['uses'=>'ClienteController@ObtenerClientePorId']);
	
Revisar el codigo en estos archivos
	definir el controller en app/Http/Controllers/ClienteController.php
	definir el model en app/Models/Cliente.php
	
	comando: php -S localhost:8000 -t public
	abrir server
	cambiar ruta agregando /clientes y presionar enter
	luego /cliente/1 y presionar enter.
	
Script de base de datos, sql para la tabla de prueba
		CREATE TABLE `db_ejercicio`.`clientes` ( `id` INT NULL AUTO_INCREMENT , `cli_nombre` 
		VARCHAR(100) NOT NULL , `cli_apellido` VARCHAR(100) NOT NULL , `cli_telefono` INT NOT NULL , 
		PRIMARY KEY (`id`)) ENGINE = InnoDB;
	
sql para insertar un cliente
		INSERT INTO `clientes`
			(`id`, `cli_nombre`, `cli_apellido`, `cli_telefono`) 
		VALUES 
			('1','juan','royal','123456')
