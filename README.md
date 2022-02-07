# examenPHP
examen Fonf

Para instalar esta app es necesario:

1.- Instalar Xampp y activar las opciones de "Apache" y "MySQL"
2.- Generar un git clon en la carpeta requerida
3.- Crear una BD llamada exaphp en MySQL con los siguientes parametros:
    --Crear una tabla llamada "menus" con las siguientes columnas:
        ->id int(11)    AUTO_INCREMENT	PK
		->id_fonda	varchar(10)	utf8mb4_general_ci		
        ->nomPlatillo	varchar(250)	utf8mb4_general_ci		
	    ->descripcion	longtext	utf8mb4_general_ci		
	    ->ingredientes	longtext	utf8mb4_general_ci	
	    ->costo	varchar(250)	utf8mb4_general_ci
    
    --Crear una segunda tabla llamada "servicios" con las siguientes columnas:
        ->id int(11) AUTO_INCREMENT	PK
        ->nombre	varchar(250)	utf8mb4_general_ci	
        ->calle	varchar(100)	utf8mb4_general_ci	
        ->ne	varchar(50)	utf8mb4_general_ci	
        ->ni	varchar(50)	utf8mb4_general_ci	
        ->cp	varchar(50)	utf8mb4_general_ci	
        ->colonia	varchar(50)	utf8mb4_general_ci	
        ->municipio	varchar(50)	utf8mb4_general_ci	
        ->ciudad	varchar(50)	utf8mb4_general_ci
        ->edo	varchar(50)	utf8mb4_general_ci	
        ->pais	varchar(50)	utf8mb4_general_ci	

4.- Si tu usuario de Mysql no es "root" y tu password no es "", en el archivo de modelo.php en la carpeta de models encontraras el contruct, donde colocaras tu configuracion de usuario y password personalizada
5.-Ejecutar con ayuda de xampp la app en el localhost