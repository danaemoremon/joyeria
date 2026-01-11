## Proyecto 2: Joyería Luxoria
Sistema de administración web para gestionar operaciones básicas de una joyería: clientes, inventario de productos y control de ventas.

### 🛠️ Tecnologías
* **Backend:** PHP
* **Base de Datos:** MySQL
* **Frontend:** HTML5, CSS3 (Custom Styles) y Bootstrap
* **Gestión:** Composer (Manejo de dependencias)

### 🚀 Características
**➕ Gestión de Registros**
- **Autenticación:** Registro e inicio de sesión seguro para usuarios.
- **Control de Acceso:** El ajuste de precios está restringido; solo los usuarios con perfil de **Cliente** pueden realizar modificaciones de costo.
- **Implementación de ORM:** Uso de Mapeo Objeto-Relacional para gestionar la lógica de negocio, permitiendo que los cambios en la base de datos se manejen como objetos PHP, mejorando la seguridad y mantenibilidad.

**🔍 Consultas e Informes**
- **Inventario Dinámico:** Visualización completa de joyas mediante tablas interactivas.
- **Sincronización:** Actualización de stock y precios en tiempo real.
- **Arquitectura Limpia:** Separación de responsabilidades con una carpeta `public_html` para el acceso web y `src` para la lógica interna.

### 📂 Estructura del Proyecto
<img src= "https://private-user-images.githubusercontent.com/237490521/534318876-5befa24c-8b97-473a-970e-5c3eee9025ec.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDgwNDUsIm5iZiI6MTc2ODEwNzc0NSwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE4ODc2LTViZWZhMjRjLThiOTctNDczYS05NzBlLTVjM2VlZTkwMjVlYy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNTAyMjVaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1jODYwMWFkMTVkNGY4NWZlMjZkOGFkNzY0NDYxMGQ3ZGEwNzJhY2MyZTcwNmEyZDMyYWJiMDNjMGNkMTBjNzEwJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.ZNIh5im3fP-alWcnlhFl2xf_2RzaS1vNT-nQhuYZaM0" />
### 🖼️ Previews


 ### 🖼️ Previews


  <tr>
    <td width="50%">
      <p align="center"><b>Página Joyería</b></p>
      <img src="https://private-user-images.githubusercontent.com/237490521/534316673-138a82a6-c886-4d3a-84eb-d15258edee1c.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDczOTYsIm5iZiI6MTc2ODEwNzA5NiwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE2NjczLTEzOGE4MmE2LWM4ODYtNGQzYS04NGViLWQxNTI1OGVkZWUxYy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNDUxMzZaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kNTI2MjNmNzhiZDZiMzlhNWViNDg2Nzc2MTdjMmI2NzNkZmVjNmMzNzc4YjIxODE2NDUxNTZjNWNiYTY2MjYzJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.KejwtLuBBqcsznZjRfe4QUd9uY_S6J-kddT7Jyr1rzg" width="100%" style="border-radius: 8px;"/>
    </td>
    <td width="50%">
      <p align="center"><b>Login de Acceso</b></p>
      <img src="https://private-user-images.githubusercontent.com/237490521/534316676-32744df6-610e-417d-b445-d4dc34d26a31.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDczOTYsIm5iZiI6MTc2ODEwNzA5NiwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE2Njc2LTMyNzQ0ZGY2LTYxMGUtNDE3ZC1iNDQ1LWQ0ZGMzNGQyNmEzMS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNDUxMzZaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0zODIzZmQ4YjU2ZWZiMjkzYzA3M2ZiYTdjNDU5MDBiMjE2NmQ5ZTA2ZGU5OWE1MGEwMTk3ZmZkZDNhYWVkY2M3JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.eZJvbh25b2wmRO8cXNgCu76O1CCjfjQ-FW4AJrBhL4c" width="100%" style="border-radius: 8px;"/>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <p align="center"><b>Crear Cuenta</b></p>
      <img src="https://private-user-images.githubusercontent.com/237490521/534316677-da8b861b-d2c1-4ee1-b608-3453721f9c0b.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDczOTYsIm5iZiI6MTc2ODEwNzA5NiwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE2Njc3LWRhOGI4NjFiLWQyYzEtNGVlMS1iNjA4LTM0NTM3MjFmOWMwYi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNDUxMzZaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kZGY0YWVmMzg2NmRlNTZiYzE2YmQyOTRiNDMyZmYwZDdmZWZiNDNiNGMwMzEwMTI5MjlmMmMyNjY1MWI2MmMxJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.hb4Eyqq9uHjlpmD6wjp2ZwcAqbZjXzdlqhYBwRp00p0" width="100%" style="border-radius: 8px;"/>
    </td>
    <td width="33%">
      <p align="center"><b>Tablas</b></p>
      <img src="https://private-user-images.githubusercontent.com/237490521/534316675-e8daf862-aac4-4c1e-860a-918f846da6fc.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDczOTYsIm5iZiI6MTc2ODEwNzA5NiwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE2Njc1LWU4ZGFmODYyLWFhYzQtNGMxZS04NjBhLTkxOGY4NDZkYTZmYy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNDUxMzZaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT03ZjI0ODBmOGEyMTg3ODA1MjY0ZTc4ZTc1ODQ1YWUzN2UzYzE2MjQ4NWRmNTQxNjE2MTM3NmEwMDBkZTFkOWMwJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.2Q1cRCQqYYfj6lN94kKOG17_dsZV7VdlPhYK3yKkkHM" width="100%" style="border-radius: 8px;"/>
    </td>
    <td width="33%">
      <p align="center"><b>Productos</b></p>
      <img src="https://private-user-images.githubusercontent.com/237490521/534316674-3864e68f-4169-4b0b-85a3-b99c3619ca38.png?jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3NjgxMDczOTYsIm5iZiI6MTc2ODEwNzA5NiwicGF0aCI6Ii8yMzc0OTA1MjEvNTM0MzE2Njc0LTM4NjRlNjhmLTQxNjktNGIwYi04NWEzLWI5OWMzNjE5Y2EzOC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjYwMTExJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI2MDExMVQwNDUxMzZaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0zYmFkMzlhNjliODAyMTYyNmQ4YjU2ZmUwZTEwMmJmNjM1NDZjMTE3NzhjMWNlMGJiZTFkZDZlZTJhMmNhZDY5JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCJ9.Q2NNKbUuitEoawYevYpllkB_R6zHWydCbPJfjveWNLc" width="100%" style="border-radius: 8px;"/>
    </td>
  </tr>
    
  </tr>


### 🔗 Enlaces
* **Código Fuente:** [Repositorio en GitHub](https://github.com/danaemorenmon/Joyeria)
* **Demo en Vivo (Github Pages):** [Tienda de Joyería Web](https://danaemorenmon.github.io/Joyeria/)
* **Demo en Vivo (Hosting):** [Luxoria Shop Web](https://6shk.gt.tc/index.php)
