# 🛒 POS + E-Commerce System

<p align="center">
 
</p>

<p align="center">
  <strong>Sistema de Punto de Venta (POS) + E-Commerce desarrollado en PHP, Blade y MySQL.</strong>
</p>

---

## 📌 Descripción

Este proyecto es un **sistema integral de Punto de Venta (POS) combinado con una plataforma de E-Commerce**, diseñado para gestionar ventas físicas y en línea en un solo sistema.

Permite administrar productos, inventario, clientes, pedidos y ventas tanto en tienda como en línea, ofreciendo una solución completa para negocios modernos.

---

## 🚀 Características

### 🏪 Punto de Venta (POS)
- Registro de ventas en tiempo real  
- Gestión de caja  
- Control de inventario  
- Generación de tickets  

### 🌐 E-Commerce
- Catálogo de productos en línea  
- Carrito de compras  
- Gestión de pedidos  
- Registro de clientes  

### 📊 Administración
- Panel administrativo  
- Reportes de ventas  
- Control de usuarios  
- Gestión de productos  

---

## 🛠 Tecnologías utilizadas

| 🔥 Lenguajes | 📌 Backend | 📌 Frontend | 📌 Base de Datos |
|-------------|------------|------------|----------------|
| <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/> | Laravel | Blade | <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white"/> |
| <img src="https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white"/> | REST API | CSS | |
| <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/> | | | |

---

## 📊 Estadísticas del proyecto

- PHP: 64.4%  
- Blade: 33.8%  
- HTML: 1.5%  
- Otros: 0.3%  

---

## 💻 Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/isairey/PuntodeVentas.git
cd PuntodeVentas
2. Instalar dependencias
composer install
npm install
3. Configurar entorno
cp .env.example .env
php artisan key:generate

Configura en .env:

DB_DATABASE=pos
DB_USERNAME=root
DB_PASSWORD=
4. Migraciones
php artisan migrate --seed
5. Ejecutar proyecto
php artisan serve

👉 Accede en:

http://localhost:8000
