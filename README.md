# Proyecto hecho en PHP con Laravel framework.

Proyecto desarrollado en la clase de Desarrollo Web Profesional 
IDGS 8-A-II 

## Realizado con

- **Laraver**
- **Composer**


## Librerias 

- **Dropzone**
- **Vite**
- **Laravel-Vite**

### Comandos necesarios 

Una vez clones o instales este repositorio: 

```

npm install (*Si hay dependencias de NPM definidas en el archivo package.json*)

Composer install (*Para crear la carpeta "vendor"*)

npm run build

npm install --save-dev vite laravel-vite-plugin

npm install --save dropzone

```

_Generar una clave (solo si es necesario)

```

php artisan key:generate

```

_Para iniciar el proyecto 

```
npm run dev

php artisan serve

```

### Comando para hacer migración de base de datos

```
    php artisan migrate 

```

_Para incluir o agregar nuevas migraciones

```

php artisan migrate:refresh 

php artisan migrate:fresh  //borra y crea todas las tablas de nuevo

```