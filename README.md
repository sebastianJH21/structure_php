# 🚀 PHP Estructura para Principiantes  

Este repositorio contiene un proyecto desarrollado en PHP que implementa una arquitectura organizada con controladores, vistas y configuración modular.  
El código está estructurado para facilitar la comprensión y reutilización, permitiendo a los desarrolladores expandir sus funcionalidades fácilmente.  

## 📂 Estructura del Proyecto  

📁 Core/      # Contiene las clases principales y la lógica central de la aplicación
📁 Public/    # Directorio público con index.php y otros recursos accesibles públicamente
📁 Views/     # Contiene las plantillas y vistas utilizadas para la interfaz de usuario

## 📄 Archivos Clave
📜 .gitignore        # Archivos y directorios ignorados por Git
🛠️ config.php        # Contiene configuraciones y parámetros de la aplicación
📜 .htaccess         # Configuración del servidor Apache para gestionar rutas y accesos 

## ⚙️ Configuración
#### Crea un archivo config.php en la raíz del proyecto con la siguiente configuración:

$server = 'localhost';
$user = 'root';
$password = '';
$nameDB = 'demo';

return [
    'dataBase' => [
        'host' => $server,
        'dbname' => $nameDB,
        'charset' => 'utf8'
    ],

    'credentials' => [
        'userName' => $user,
        'password' => $password
    ]
];
##### 🔧 Cambia los parámetros según la configuración de tu servidor, base de datos, usuario y contraseña.


## 🔧 Instalación
### 1️⃣ Clona este repositorio  
git clone https://github.com/sebastianJH21/structure_php.git

### 2️⃣ Navega al directorio del proyecto  
cd structure_php



## ▶️ Uso
# 🖥️ Inicia un servidor PHP local en el directorio público  
php -S localhost:8000 -t public
🔗 Luego, abre tu navegador y visita 👉 http://localhost:8000 para ver la aplicación en funcionamiento.
💻 O inicializa el servidor con XAMPP y abre el directo. Para tu localhost


