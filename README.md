# 🍄 Mystical Herbarium: Dockerized LEMP Stack

Este proyecto es una implementación profesional de un entorno **LEMP** (Linux, Nginx, MariaDB, PHP) orquestado con **Docker Compose**. Está diseñado como un herbario místico para la gestión y visualización de especímenes fúngicos, combinando una arquitectura robusta con una interfaz de usuario temática.

---

## Descripción del Proyecto

El **Mystical Herbarium** funciona como una enciclopedia digital de micología. Utiliza una base de datos relacional para almacenar información sobre diversos hongos, la cual es consultada mediante **PHP** y presentada en una interfaz web estilizada como un pergamino antiguo.

Este proyecto fue desarrollado bajo los estándares de **Virtualización de Tecnologías**, aplicando conceptos de aislamiento de servicios, persistencia de datos y seguridad de credenciales.

---

## Stack Tecnológico

| Componente | Tecnología | Versión |
| :--- | :--- | :--- |
| **Servidor Web** | Nginx | Latest |
| **Lenguaje** | PHP-FPM | 8.2 |
| **Base de Datos** | MariaDB | Latest |
| **Gestión BD** | phpMyAdmin | Latest |
| **Orquestación** | Docker Compose | 3.8 |

---

## Características Principales

* **Seguridad con Variables de Entorno:** Uso de un archivo `.env` para desacoplar las credenciales sensibles (usuarios y contraseñas) del código fuente.
* **Persistencia de Datos:** Implementación de **Docker Volumes** para asegurar que los registros de los hongos persistan incluso si los contenedores se detienen o eliminan.
* **Monitoreo y Logs:** Configuración de bind mounts para el almacenamiento de logs de Nginx y PHP en la máquina host, facilitando el debugging.
* **Optimización de PHP:** Configuración personalizada mediante `custom.ini` para extender el límite de subida de archivos a **128MB**.
* **Diseño de Fantasía:** Interfaz desarrollada con CSS avanzado para simular un pergamino antiguo con efectos de "glow" y tipografía clásica.

---

## Estructura de Archivos

```text
PRACTICA_DOCKER_COMPOSE/
├── html/               # Código fuente (index.php)
├── nginx/              # Configuración de default.conf
├── php/                # Dockerfile y custom.ini
├── logs/               # Logs de acceso y error
├── .env                # Variables de entorno (No incluido en el repo)
└── docker-compose.yml  # Orquestador de servicios
