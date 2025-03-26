# Estudiante 
Juan Dennis Herrera Lurita

# Video de presentacion
[Ver video de presentación](https://drive.google.com/drive/folders/1OdNbk0q9qNYhiCDtK6IsoyLC2qnyKMcs?usp=sharing)

# patroclo-store-premiun
Página Web con el curso de taller de programación Web Laravel

# Requisitos
- Node.js 18 o superior (validar con `node -v`)
- PHP
- Instalar Composer: [https://getcomposer.org/](https://getcomposer.org/)

# Pasos iniciales para la instalación

1. Crear el archivo `.env` con el contenido de `.env.example`.
2. Configurar base de datos PostgreSQL en `.env` (nombre de la BD, usuario y clave).
3. Ejecutar:
   ```sh
   npm install
   ```
4. Ejecutar:
   ```sh
   composer install
   ```
5. Generar la clave de la aplicación:
   ```sh
   php artisan key:generate
   ```
6. Ejecutar migraciones:
   ```sh
   php artisan migrate
   ```
7. Poblar la base de datos con datos iniciales:
   ```sh
   php artisan db:seed
   ```

# Pasos para ejecutar el proyecto (en paralelo en ambas terminales)

- En una terminal, ejecutar:
  ```sh
  npm run dev
  ```
- En otra terminal, ejecutar:
  ```sh
  php artisan serve
  ```

# Comandos más usados

- Crear un controlador:
  ```sh
  php artisan make:controller CategoriaController
  ```
- Crear un modelo:
  ```sh
  php artisan make:model Categoria
  ```
