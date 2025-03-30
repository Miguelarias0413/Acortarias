# Acortador de URL con Mensajes Filosóficos

Este es un acortador de URL desarrollado en Laravel que, en lugar de mostrar publicidad entre la redirección, permite que el creador de la URL acortada agregue un mensaje o filosofía personalizada. De esta manera, cada vez que un usuario accede al enlace acortado, primero verá el mensaje antes de ser redirigido a la URL de destino.

## Características
- Acortar URLs de manera rápida y sencilla.
- Cada URL acortada muestra un mensaje personalizado antes de la redirección.
- Panel de administración para gestionar enlaces y mensajes.
- Implementado en Laravel, utilizando Eloquent para la base de datos.

## Instalación
Sigue estos pasos para clonar y ejecutar el proyecto en tu entorno local.

### 1. Clonar el repositorio
```bash
 git clone https://github.com/tu-usuario/tu-repositorio.git
 cd tu-repositorio
```

### 2. Instalar dependencias
```bash
 composer install
 npm install && npm run dev
```

### 3. Configurar el entorno
```bash
 cp .env.example .env
```
Edita el archivo `.env` y configura la conexión a tu base de datos.

### 4. Generar la clave de aplicación
```bash
 php artisan key:generate
```

### 5. Iniciar el servidor
```bash
 php artisan serve
```

Ahora puedes acceder al proyecto en `http://127.0.0.1:8000/`.

## Uso
1. Regístrate o inicia sesión en la plataforma.
2. Ingresa la URL original y el mensaje que deseas mostrar.
3. Obtén un enlace corto y compártelo.
4. Cuando alguien acceda al enlace, verá primero el mensaje antes de ser redirigido.

## Contribución
Si deseas contribuir al proyecto, puedes hacer un fork del repositorio y enviar un pull request con tus mejoras.

## Licencia
Este proyecto está bajo la licencia MIT.

