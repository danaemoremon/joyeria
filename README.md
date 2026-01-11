## Proyecto 2: Joyería Luxoria
Sistema de administración web para gestionar operaciones básicas de una joyería: clientes, inventario de productos y control de ventas.

### 🛠️ Tecnologías
* **Backend:** PHP
* **Base de Datos:** MySQL
* **Frontend:** HTML5, CSS3 (Custom Styles) y Bootstrap
* **Gestión:** Composer (Manejo de dependencias)

### 🚀 Características
**➕ Gestión de Registros**
- Registro y autenticación de usuarios (Login/Registro).
- Alta y edición de productos de joyería con validaciones.

**🔍 Consultas e Informes**
- Visualización de inventario en tablas dinámicas.
- Control de stock y precios de artículos.
- Estructura profesional mediante carpeta `public_html` y lógica en `src`.

### 📂 Estructura del Proyecto
<img src= "https://private-user-images.githubusercontent.com/237490521/534318876-5befa24c-8b97-473a-970e-5c3eee9025ec.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDgwNDUsIm5iZiI6MTc2ODEwNzc0NSwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE4ODc2LTViZWZhMjRjLThiOTctNDczYS05NzBlLTVjM2VlZTkwMjVlYy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNTAyMjVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1jODYwMWFkMTVkNGY4NWZlMjZkOGFkNzY0NDYxMGQ3ZGEwNzJhY2MyZTcwNmEyZDMyYWJiMDNjMGNkMTBjNzEwJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.ZNIh5im3fP-alWcnlhFl2xf_2RzaS1vNT-nQhuYZaM0" />
### 🖼️ Previews

<table>
  <tr>
    <td width="50%">
      <p align="center"><b>Dashboard Joyería</b></p>
      <img src="https://private-user-images.githubusercontent.com/237490521/534316673-138a82a6-c886-4d3a-84eb-d15258edee1c.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDczOTYsIm5iZiI6MTc2ODEwNzA5NiwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE2NjczLTEzOGE4MmE2LWM4ODYtNGQzYS04NGViLWQxNTI1OGVkZWUxYy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNDUxMzZaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kNTI2MjNmNzhiZDZiMzlhNWViNDg2Nzc2MTdjMmI2NzNkZmVjNmMzNzc4YjIxODE2NDUxNTZjNWNiYTY2MjYzJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.KejwtLuBBqcsznZjRfe4QUd9uY_S6J-kddT7Jyr1rzg" width="100%" style="border-radius: 8px;"/>
    </td>
    <td width="50%">
      <p align="center"><b>Login de Acceso</b></p>
      <img src="https://private-user-images.githubusercontent.com/237490521/534316676-32744df6-610e-417d-b445-d4dc34d26a31.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDczOTYsIm5iZiI6MTc2ODEwNzA5NiwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE2Njc2LTMyNzQ0ZGY2LTYxMGUtNDE3ZC1iNDQ1LWQ0ZGMzNGQyNmEzMS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNDUxMzZaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0zODIzZmQ4YjU2ZWZiMjkzYzA3M2ZiYTdjNDU5MDBiMjE2NmQ5ZTA2ZGU5OWE1MGEwMTk3ZmZkZDNhYWVkY2M3JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.eZJvbh25b2wmRO8cXNgCu76O1CCjfjQ-FW4AJrBhL4c" width="100%" style="border-radius: 8px;"/>
    </td>
  </tr>
</table>

### 🔗 Enlaces
* **Código Fuente:** [Repositorio en GitHub](https://github.com/danaemorenmon/Joyeria)
* **Demo en Vivo (Github Pages):** [Tienda de Joyería Web](https://danaemorenmon.github.io/Joyeria/)
* **Demo en Vivo (Hosting):** [Luxoria Shop Web](https://6shk.gt.tc/index.php)
