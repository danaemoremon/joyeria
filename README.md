# Luxoria — Sistema de Gestión de Joyería 💎

Luxoria es una plataforma web integral diseñada para la administración de una tienda de joyería fina. El sistema permite gestionar catálogos de productos de plata 925, controlar inventarios y manejar roles diferenciados para clientes y administradores/vendedores.

---

## 🛠️ Tecnologías y Herramientas

### 1. Backend y Lógica de Negocio
* **PHP 8.x:** Motor principal para el procesamiento de la lógica del servidor.
* **Doctrine ORM (v3.5):** Implementación de mapeo objeto-relacional de alto nivel para una gestión de base de datos segura y limpia.
* **Symfony Cache:** Utilizado para optimizar el rendimiento y la velocidad de procesamiento de datos.
* **Composer:** Gestor de dependencias para la administración automatizada de librerías.

### 2. Base de Datos y Persistencia
* **MariaDB / MySQL:** Motor relacional para el almacenamiento de productos, ventas y usuarios.
* **MySQLi:** Empleado específicamente para el módulo de autenticación mediante consultas preparadas.

### 3. Frontend y Experiencia de Usuario
* **HTML5 & CSS3:** Diseño elegante y minimalista con tipografía **Poppins**.
* **Efectos Visuales:** Implementación de sombreados dinámicos y diseño responsivo para una experiencia premium.

### 4. Seguridad Crítica
* **Sentencias Preparadas (Prepared Statements):** Blindaje contra ataques de Inyección SQL.
* **BCRYPT:** Algoritmo de encriptación de grado bancario para la protección de contraseñas.

---

## 🚀 Características Principales

* **Control de Roles:** Sistema diferenciado entre `Cliente` (solo lectura de precios) y `Admin` (gestión total).
* **Gestión de Precios en Tiempo Real:** Interfaz administrativa para actualizar costos de venta de forma dinámica.
* **Catálogo Especializado:** Clasificación de joyas por tipo (Anillos, Collares, Pulseras) y material (Plata 925).
* **Módulo de Inventario:** Control detallado de stock disponible y relación con proveedores.
* **Historial de Transacciones:** Registro de ventas y compras a proveedores con integridad referencial.

---

## 📊 Arquitectura de Datos (Modelo Relacional)

El sistema cuenta con una estructura robusta de 7 tablas interconectadas:
* **`productos`**: Almacena información detallada y costos.
* **`usuarios`**: Manejo de credenciales y roles (`enum('cliente','admin')`).
* **`ventas` & `detalle_venta`**: Registro transaccional de salidas.
* **`proveedores` & `compras_proveedor`**: Gestión de suministros y logística.
* **`inventarios`**: Control histórico de existencias.

---

## 🖼️ Previews

<div align="center">
  <img src="ACA_VA_EL_LINK_DE_TU_IMAGEN_image_464122.png" alt="Vista Principal Luxoria" width="800" style="border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);"/>
</div>

<br>

<table>
  <tr>
    <td width="50%">
      <p align="center"><b>Registro de Usuarios</b></p>
      <img src="ACA_VA_EL_LINK_DE_TU_IMAGEN_image_46417f.png" alt="Crear Cuenta" width="100%" style="border-radius: 8px;"/>
    </td>
    <td width="50%">
      <p align="center"><b>Portal de Inicio de Sesión</b></p>
      <img src="ACA_VA_EL_LINK_DE_TU_IMAGEN_image_464160.png" alt="Login" width="100%" style="border-radius: 8px;"/>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <p align="center"><b>Panel de Administración (Edición de Precios)</b></p>
      <img src="ACA_VA_EL_LINK_DE_TU_IMAGEN_image_464142.png" alt="Gestión de Precios" width="800" style="border-radius: 8px;"/>
    </td>
  </tr>
</table>

---

## 🔗 Enlaces del Proyecto

* **Repositorio de Código:** [https://github.com/danaemoremon/joyeria<img width="442" height="44" alt="image" src="https://github.com/user-attachments/assets/2ad568a7-e156-46f7-94aa-10eb3656a2d0" />
]

* **Demo en Vivo (Web):** [[Link a tu hosting aquí](https://steelblue-meerkat-544740.hostingersite.com/)]
* **Documentación Estática:** [Link a GitHub Pages aquí]

---

## 📝 Licencia
Este proyecto fue desarrollado bajo estándares académicos para el curso de Bases de Datos 2026-I.
Copyright (c) 2026 - Luxoria Joyería.
