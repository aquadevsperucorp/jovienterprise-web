# JOVI Enterprise — Web v3.0

Sitio web oficial de JOVI Enterprise, empresa peruana de suplementos naturales.

## Estructura del proyecto

```
jovi_enterprise/
├── index.php                   # Página principal
├── includes/
│   ├── header.php              # Cabecera + nav reutilizable
│   └── footer.php              # Pie de página reutilizable
├── pages/
│   ├── productos.php           # Catálogo de productos
│   ├── nosotros.php            # Quiénes somos
│   └── contacto.php            # Formulario de contacto
└── assets/
    ├── css/
    │   ├── variables.css       # Tokens de diseño (colores, fuentes, etc.)
    │   ├── base.css            # Reset, layout, nav, footer, componentes globales
    │   ├── index.css           # Estilos exclusivos de la página principal
    │   ├── productos.css       # Estilos exclusivos de la página de productos
    │   ├── nosotros.css        # Estilos exclusivos de la página nosotros
    │   └── contacto.css        # Estilos exclusivos del formulario de contacto
    ├── js/
    │   └── main.js             # JS global (nav, countdown, AOS, etc.)
    └── images/                 # Imágenes del proyecto
```

## Requisitos

- PHP 7.4+
- Servidor web (Apache / Nginx) o `php -S localhost:8000`

## Desarrollo local

```bash
cd jovi_enterprise
php -S localhost:8000
# Abre http://localhost:8000
```

## Envío de emails (PHPMailer)

El formulario de contacto simula el envío por defecto.
Para activar el envío real, sigue los pasos en `pages/contacto.php`.

## Escalabilidad

Añadir una nueva página:
1. Crea `pages/nueva-pagina.php`
2. Define `$page_title`, `$page_desc` y `$extra_css` (nombre del CSS)
3. Crea `assets/css/nueva-pagina.css` con los estilos específicos
4. Incluye `header.php` y `footer.php`
