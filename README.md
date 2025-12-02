
# 📺 Streambox – Plataforma de Streaming estilo Netflix

**Streambox** es un proyecto educativo que simula una plataforma de streaming similar a Netflix o Disney+.
Su objetivo es practicar **Laravel**, **Relaciones complejas en bases de datos**, y despliegue con **Docker**.

---

## 🚀 Tecnologías utilizadas

* Laravel 12
* PHP 8.3
* MySQL 8
* Docker + Docker Compose
* phpMyAdmin
* Composer
* Apache
* Blade Templates

---

## 🧱 Arquitectura Docker

El proyecto está formado por 3 contenedores:

| Servicio               | Rol                             |
| ---------------------- | ------------------------------- |
| `streambox-web`        | PHP + Apache ejecutando Laravel |
| `streambox-db`         | Base de datos MySQL             |
| `streambox-phpmyadmin` | Interfaz gráfica para MySQL     |

---

# 🗂️ Modelo de Datos

Streambox implementa relaciones **1:1**, **1:N**, y **N:M**, simulando una plataforma real de streaming.

---

## 🔵 Relación 1:1 — Usuario ↔ PerfilUsuario

```
┌───────────┐      1:1      ┌────────────────┐
│  Usuario  │──────────────▶│ PerfilUsuario │
└───────────┘               └────────────────┘
```

---

## 🟩 Relación 1:N — Categoría → Películas

```
┌──────────────┐      1:N      ┌──────────────┐
│  Categoría   │──────────────▶│   Película   │
└──────────────┘               └──────────────┘
```

---

## 🟣 Relación N:M — Películas ↔ Etiquetas

```
┌──────────────┐        N:M        ┌──────────────┐
│   Película   │◀───────────────▶ │   Etiqueta   │
└──────────────┘   pelicula_etiqueta  └──────────────┘
```

---

## 🟠 Relación 1:N — Usuario → Listas

```
┌───────────┐        1:N        ┌──────────┐
│  Usuario  │──────────────────▶│  Lista   │
└───────────┘                   └──────────┘
```

---

# 🗃️ Tablas principales

### **usuarios**

* id
* nombre
* email
* contraseña

### **perfil_usuarios**

* id
* usuario_id (FK)
* nickname
* avatar
* edad

### **categorias**

* id
* nombre

### **peliculas**

* id
* titulo
* descripcion
* categoria_id (FK)
* año
* duración
* portada

### **etiquetas**

* id
* nombre

### **pelicula_etiqueta** (pivote)

* pelicula_id
* etiqueta_id

### **listas**

* id
* usuario_id (FK)
* nombre

---

# 🐳 Cómo ejecutar el proyecto con Docker

### 1️⃣ Clonar el repositorio

```
git clone https://github.com/ArkaitzAmostegi/Streambox.git
cd Streambox
```

### 2️⃣ Construir y levantar contenedores

```
docker-compose up -d --build
```

### 3️⃣ Instalar dependencias

```
docker exec -it streambox-web composer install
```

### 4️⃣ Copiar archivo .env

```
cp streambox/.env.example streambox/.env
```

### 5️⃣ Generar clave de Laravel

```
docker exec -it streambox-web php artisan key:generate
```

### 6️⃣ Ejecutar migraciones

```
docker exec -it streambox-web php artisan migrate
```

### 7️⃣ Acceder a la aplicación

| Servicio           | URL                                            |
| ------------------ | ---------------------------------------------- |
| Aplicación Laravel | [http://localhost:8081](http://localhost:8081) |
| phpMyAdmin         | [http://localhost:8082](http://localhost:8082) |

---

# 📌 Estado del proyecto

* ✔ Docker configurado
* ✔ Migraciones iniciales
* ✔ Estructura del dominio
* ⏳ Implementación de modelos
* ⏳ CRUDs completos
* ⏳ Catálogo visual estilo Netflix
* ⏳ Listas personalizadas por usuario
* ⏳ Seeders de películas

---

# 🧭 Roadmap

* Implementar autenticación
* Añadir sistema de perfiles tipo Netflix
* Crear CRUD de películas / categorías / etiquetas
* Implementar búsquedas y filtrados
* Añadir interfaz tipo carruseles
* Soporte para múltiples listas por usuario

---

# 📜 Licencia

Proyecto de uso educativo. Libre para modificar y extender.

