# ✈️ AirBooker - Sistema de Reservación de Vuelos

## 📝 Descripción

AirBooker es una plataforma web moderna y completa para la reservación de vuelos, desarrollada con Laravel. El sistema permite a los usuarios buscar, comparar y reservar vuelos de diferentes aerolíneas, gestionar sus reservas y aprovechar ofertas especiales. Incluye un panel administrativo completo para la gestión integral del negocio.

## ✨ Características principales

### 👤 Para Usuarios
- 🔍 **Búsqueda avanzada de vuelos** con múltiples filtros (origen, destino, fecha, aerolínea, precio)
- 🛒 **Carrito de compras** para gestionar múltiples reservas
- 💳 **Sistema de créditos** integrado para pagos
- 👜 **Gestión de reservas** personales (pendientes, confirmadas, canceladas)
- 📧 **Newsletter** para recibir ofertas y promociones
- 📱 **Diseño responsive** para todos los dispositivos

### 👨‍💼 Para Administradores
- 📊 **Dashboard analítico** con métricas de negocio
- ✈️ **Gestión completa de vuelos** (CRUD completo)
- 🏢 **Administración de aerolíneas** con logos personalizados
- 🎫 **Control de ofertas y descuentos** con fechas de vigencia
- 👥 **Gestión de usuarios** con roles (Cliente/Administrador)
- 📋 **Administración de reservas** con estados personalizables
- 💰 **Reportes de ingresos** por mes

### 🔐 Seguridad
- 🔒 **Autenticación robusta** con Laravel Auth
- 🛡️ **Validación de datos** en frontend y backend
- 🔑 **Protección CSRF** en todos los formularios
- 👮 **Control de acceso** basado en roles

## 📸 Capturas de pantalla

### 🏠 Página Principal
```
![image](https://github.com/user-attachments/assets/bfea3afa-7809-4d83-839d-b55ef202c95e)
```

### 🔍 Resultados de Búsqueda
```
[Insertar captura de la página de vuelos disponibles con filtros]
```

### 🛒 Carrito de Compras
```
[Insertar captura del carrito con vuelos agregados]
```

### 📊 Panel de Administración
```
[Insertar captura del dashboard administrativo]
```

## 🛠️ Tecnologías utilizadas

### Backend
- ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white) **Laravel 10.x** - Framework PHP
- ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white) **PHP 8.2+**
- ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=flat&logo=mysql&logoColor=white) **MySQL** - Base de datos relacional

### Frontend
- ![Blade](https://img.shields.io/badge/Blade-FF2D20?style=flat&logo=laravel&logoColor=white) **Blade** - Motor de plantillas
- ![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black) **JavaScript** - Interactividad
- ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white) **CSS3** - Estilos
- ![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=flat&logo=bootstrap&logoColor=white) **Bootstrap** - Framework CSS

### Herramientas
- ![Composer](https://img.shields.io/badge/Composer-885630?style=flat&logo=composer&logoColor=white) **Composer** - Gestor de dependencias PHP
- ![NPM](https://img.shields.io/badge/NPM-CB3837?style=flat&logo=npm&logoColor=white) **NPM** - Gestor de paquetes
- ![Git](https://img.shields.io/badge/Git-F05032?style=flat&logo=git&logoColor=white) **Git** - Control de versiones

## 🚀 Instalación y uso

### 📋 Requisitos previos
- PHP >= 8.2
- Composer
- MySQL
- Node.js y NPM
- Git

### ⚙️ Pasos de instalación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/tu-usuario/airbooker.git
   cd airbooker
   ```

2. **Instalar dependencias de PHP**
   ```bash
   composer install
   ```

3. **Instalar dependencias de JavaScript**
   ```bash
   npm install
   ```

4. **Configurar el entorno**
   ```bash
   cp .env.example .env
   ```

5. **Generar clave de aplicación**
   ```bash
   php artisan key:generate
   ```

6. **Configurar la base de datos**
   - Crear una base de datos MySQL
   - Actualizar las credenciales en el archivo `.env`:
   ```env
   DB_DATABASE=airbooker
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
   ```

7. **Ejecutar migraciones y seeders**
   ```bash
   php artisan migrate --seed
   ```

8. **Compilar assets**
   ```bash
   npm run dev
   ```

9. **Iniciar el servidor**
   ```bash
   php artisan serve
   ```

10. **Acceder a la aplicación**
    - 🌐 URL: `http://localhost:8000`
    - 👤 Usuario admin: `admin@airbooker.com` / `123456`
    - 👤 Usuario cliente: `cliente@airbooker.com` / `123456`

## 📁 Estructura del proyecto

```
airbooker/
├── 📂 app/
│   ├── 📂 Http/
│   │   ├── 📂 Controllers/       # Controladores de la aplicación
│   │   │   ├── 📂 Auth/         # Controladores de autenticación
│   │   │   ├── AdminController.php
│   │   │   ├── VueloController.php
│   │   │   └── ...
│   │   └── 📂 Middleware/       # Middlewares personalizados
│   └── 📂 Models/               # Modelos Eloquent
│       ├── User.php
│       ├── Vuelo.php
│       ├── Reserva.php
│       └── ...
├── 📂 database/
│   ├── 📂 migrations/           # Migraciones de base de datos
│   └── 📂 seeders/              # Seeders con datos de prueba
├── 📂 public/
│   ├── 📂 css/                  # Archivos CSS
│   ├── 📂 js/                   # Archivos JavaScript
│   └── 📂 images/               # Imágenes y logos
│       ├── 📂 aerolinias/       # Logos de aerolíneas
│       └── 📂 Destinos/         # Imágenes de destinos
├── 📂 resources/
│   └── 📂 views/                # Vistas Blade
│       ├── 📂 admin/            # Vistas del panel admin
│       ├── 📂 auth/             # Vistas de autenticación
│       ├── 📂 layouts/          # Plantillas base
│       └── home.blade.php
├── 📂 routes/
│   └── web.php                  # Definición de rutas
└── 📄 .env.example              # Configuración de ejemplo
```

### 📊 Modelo de datos principal

- **👤 Users**: Usuarios del sistema (clientes y administradores)
- **✈️ Vuelos**: Información de vuelos disponibles
- **🏢 Aerolíneas**: Compañías aéreas registradas
- **🎫 Reservas**: Reservas realizadas por usuarios
- **🛒 Carrito**: Items en proceso de compra
- **💰 Ofertas**: Descuentos aplicables a vuelos
- **❓ FAQs**: Preguntas frecuentes
- **📧 Newsletter**: Suscriptores al boletín

## 👥 Autores / Colaboradores

### 👨‍💻 Desarrollador Principal
- **Nombre**: [Tu nombre]
- **GitHub**: [@tu-usuario](https://github.com/tu-usuario)
- **LinkedIn**: [Tu perfil](https://linkedin.com/in/tu-perfil)

### 🤝 Contribuciones
¡Las contribuciones son bienvenidas! Por favor, lee las [guías de contribución](CONTRIBUTING.md) antes de enviar un Pull Request.

## 📄 Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.

```
MIT License

Copyright (c) 2025 AirBooker

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction...
```

## 📞 Contacto para empresas / Colaboraciones

### 🏢 Para oportunidades de negocio
- 📧 **Email corporativo**: business@airbooker.com
- 📱 **Teléfono**: +1 (555) 123-4567
- 🌐 **Website**: [www.airbooker.com](https://www.airbooker.com)

### 💼 Servicios disponibles
- 🔧 Personalización del sistema
- 🎨 Desarrollo de características a medida
- 📊 Integración con sistemas externos
- 🔒 Auditorías de seguridad
- 📈 Consultoría y soporte empresarial

### 🤝 ¿Interesado en colaborar?
Si estás interesado en contribuir al proyecto o tienes una propuesta de colaboración, no dudes en contactarnos:

- 💬 **Discord**: [AirBooker Community](https://discord.gg/airbooker)
- 🐦 **Twitter**: [@AirBookerDev](https://twitter.com/airbookerdev)
- 📧 **Email**: dev@airbooker.com

---

<div align="center">
  
⭐ **¿Te gusta el proyecto? ¡Dale una estrella!** ⭐

Hecho con ❤️ por el equipo de AirBooker

</div>
