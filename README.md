# bodegaAPI
Back-end de prueba técnica de postulación a Mundo.

**Autor: Alejandro Farías**

## Instalación

Para comenzar, es necesario tener `Git` y `Composer` instalado en el sistema.

De ser así, lo primero que hay que hacer es clonar el repositorio:

`git clone https://github.com/fariascl/bodegaAPI.git`

Luego, se accede al directorio donde fue clonado el proyecto:

`cd /donde/esta/el/repo`

Estando en el directorio del repositorio, se accede a la carpeta donde está el código fuente:

`cd bodegaAPI/`

Y allí se procede a instalar los paquetes de laravel, que están descritos en el `package.json`

`composer install`

Después de instalar las depedencias, se procede a copiar y renombra el archivo que contiene las variables de entorno `.env.example`, con el comando de a continuación:

`cp .env.example .env`

```
DB_DATABASE=<nombre_base_datos>
DB_USERNAME=<usuario_base_datos>
DB_PASSWORD=<contraseña_base_de_datos>
```

Para finalizar, se deben ejecutar las migraciones:

`php artisan migrate`

Y poblar la base de datos:

`php artisan db:seed`

Si todo resulta satisfactoriamente, se puede levantar la API con:

`php artisan serve`

Y se podrá visualizar a través de `http://localhost:8000/api`

# Rutas

## Bodegas
En base al enunciado de la prueba, se pide mostrar bodegas, dispositivos, modelos y marcas, por lo que se define que las rutas que corresponden a esto son las siguientes:

**Descripción: Listar las marcas (id, nombre)**

Ruta: `/api/marcas/all`

Método: GET

**Descripción: Listar modelos de una marca (id, nombre, marca)**

Ruta: `/api/modelos/getbymarca/{:id_marca}`

Método: GET


**Descripción: Listar dispositivos de un modelo o marca**

**Por marca**:

Ruta: `/api/dispositivos/getbymarca/{:id_marca}`

Método: GET


**Por modelo**:

Ruta: `/api/dispositivos/getbymodelo/{:id_modelo}`

Método: GET


**Descripción: Listar los dispositivos existentes en una bodega**

Ruta: `/api/dispositivos/getbybodega/{id}`

Método: GET


## Resto de rutas:

**Marcas**:

Ruta: `/api/marcas/get/{:id_marca}` 

Método: GET

Ruta: `/api/marcas/save`

Método: POST

``` json
{
    "nombre": :nombre
}
```

Ruta: `/api/modelos/all` 

Método: GET

**Modelos**:

Ruta: `api/modelos/get/{id}` 

Método: GET

Ruta: `/api/modelos/save`

Método: POST

``` json
{
    "nombre": :nombre,
    "marca_id": :marca_id
}
```

**Bodegas**:

Ruta: `/api/bodegas/all`

Método: GET

Ruta: `/api/bodegas/get/{id}`

Método: GET

Ruta: `/api/bodegas/save`

Método: POST

``` json
{
    "nombre": :nombre
}
```

**Dispositivos**:
Ruta: `/api/dispositivos/all`

Método: GET

Ruta: `/api/dispositivos/get/{:bodega_id}/{:modelo_id}`

Método: GET

Ruta: `/api/dispositivos/get/{id}` 

Método: GET

Ruta: `/api/dispositivos/save` 

Método: POST

``` json
{
    "nombre": :nombre,
    "modelo_id": :modelo_id,
    "bodega_id" :bodega_id
}
```
