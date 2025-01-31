# **RaiDur Web Page**

Este es mi intento de hacer un *"ReadMe"* que sea util, aqui pondre toda la informacion que crea necesaria para que sepan
como trabajar en este projecto. **-Fer**

---

## **Tabla de contenidos**
1. [Project Overview](#project-overview)
2. [Prerequisitos](#prerequisitos)
3. [Instrucciones para el Set Up](#instrucciones-para-el-set-up)
4. [Recursos utiles](#instrucciones-para-el-set-up)

---

## **Project Overview**
Este proyecto es una aplicación web construida con:
- **Backend**: Laravel (framework PHP) para el manejo de solicitudes API y operaciones de base de datos.
- **Frontend**: React (librería JavaScript) para construir la interfaz de usuario.


---

## **Prerequisitos**
Antes de configurar el proyecto, asegúrate de tener instalado lo siguiente:
- [Laragon](https://laragon.org/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [Git](https://git-scm.com/)

Si han seguido todo lo que hemos echo con el profe ya deberian tener todo esto.

---

## **Instrucciones para el Set Up**

### **1. Inicia Laragon**
Abre la terminal de laragon y escribes los siguientes comandos para copiar el projecto:
```bash
git clone https://github.com/Fer8_8/RaiDurWeb.git
cd RaiDur
```
Antes de hacer esto creo que necesitan si o si enviarme su nombre de usuario para agregarlos al repositorio.

Creo que no es necesario pero por si acaso tambien usen estos comandos para instalar todas las dependencias necesarias.

```bash
composer install
npm install
```

Pueden abrir el projecto en VSCode con el siguiente comando  
```bash
code .
```

### **2. Configura el archivo .env**

Agrega tu contraseña entre comillas para poder acceder a mySql

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=RaiDur
DB_USERNAME=root
DB_PASSWORD= "Tu contraseña :D"
```

Agrega la info para la API de correos

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=03191c
MAIL_PASSWORD=b6fadd
MAIL_ENCRYPTION=tls
```
Es lo que sacamos de de la pagina de [mailtrap](https://mailtrap.io).

### **3. Migra la base de datos**

Escribe el siguiente comando en la terminal de laragon.

```bash
php artisan migrate
```
### **4. Acceder a la web**

 Si tienen activado Laragon pueden acceder a la pagina web en la que estan trabajando a travez del siguiente enlace [RaiDur.test](Raidur.test) o [RaiDur.test:82](Raidur.test:82) si cambiaron el puerto al puerto 82.

---

 ## **Recursos utiles**

 Una lista de recursos utiles para aprender las tecnologias necesarias.

 - [Tutorial de git](https://www.youtube.com/watch?v=vlCXdvcgiE0)
 - [Tutorial de Laravel + React](https://www.youtube.com/watch?v=VrQRa-afCAk&t=1483s) (Esto es lo mas parecido a lo que vamos a estar haciendo nosotros)
- [Documentacion de Laravel](https://laravel.com/docs/11.x/readme)
 
Ire añadiendo mas recursos en el futuro.

---

*Planeo agragar mas cosas utilies en este README, sientanse libres de cambiar cualquier cosa de este README si lo ven necesario.*
