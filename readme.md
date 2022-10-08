# Theme boilerplate

Este repositorio contiene un boilerplate para desarrollar temas para WordPress a partir del mismo.

## Requisitos mínimos

Para poder desarrollar tu propio tema a partir de este ejemplo, vas a necesitar, como mínimo:

- [WordPress](https://es.wordpress.org/download/)
- PHP 7.4
- [Composer](https://getcomposer.org/download/)
- Ganas de desarrollar un tema para WordPress

## Primeros pasos para crear tu tema

1. Entra en la [URL del repositorio](https://github.com/juanmacivico87/theme-boilerplate). Seguramente, si estás leyendo esto, ya estarás en ella.
2. Ve a la carpeta ```themes``` de tu instalación de WordPress (preferiblemente, en un entorno de desarrollo).
3. Abre una consola de comandos en esta ruta y ejecuta el comando ```git clone https://github.com/juanmacivico87/theme-boilerplate.git```. Esto creará un clon del boilerplate en tu carpeta de temas.
4. Renombra la carpeta del tema descargado con el slug que tú le quieras dar, en minúscula y separado por guiones (por ejemplo: "my-custom-theme").
5. Abre tu editor de código favorito y reemplaza las siguientes cadenas de texto en todo el tema:
    - **theme-boilerplate** por el slug que elegiste en el paso 4.
    - **ThemeBoilerplate** por el nombre de espacio que quieras dar a tu tema (por ejemplo: "MyCustomTheme").
    - **THEME_BOILERPLATE** por el prefijo que desees que tengan las constantes globales de tu tema (por ejemplo: "MY_CUSTOM_THEME").
    - **$theme_boilerplate** por el prefijo que desees que tengan las variables globales de tu tema (por ejemplo: "$my_custom_theme"). No te olvides de incluir el símbolo del Dólar ($) en ambas cadenas, tanto la original como la nueva.
6. Abre el archivo style.css y sustituye las cabeceras del tema con la información que tú desees. Cambia también los valores de la constante de la versión del tema por el mismo que hayas indicado en las cabeceras.
7. Revisa los archivos del tema para verificar que no queda rastro de las cadenas de ejemplo.
8. Guarda todos los cambios que has hecho en todos los archivos.
9. Elimina la carpeta ".git" que viene por defecto.

Y, voilà!!! Ya está todo listo para que empieces a desarrollar tu tema.

## Estructura de archivos

Como partidario y defensor de la programación orientada a objetos, he querido crear una estructura de archivos que permitan seguir esa práctica, ya que considero que es una forma muy limpia de desarrollar, así como de mantener y escalar cualquier proyecto, utilizando cada archivo y cada carpeta únicamente para las funcionalidades concretas que debe tener.

Antes de ponerte a desarrollar, te recomiendo que le eches un vistazo a los archivos y las carpetas que te dejo en el boilerplate.

De todas formas, para ayudarte, te hago un resumen de los archivos y carpetas que vas a encontrar en el plugin de ejemplo:

- **style.css:** Este es el archivo principal del tema. En él, se entablecen las cabeceras con la información de dicho tema.
- **functions.php:** Este es el archivo base para comenzar a desarrollar el tema. En él, se establecen las constantes que necesita el tema para ciertas funcionalidades. Las constantes definidas en este archivo son:
    - **THEME_BOILERPLATE_DIR:** Te permite indicar ruta absoluta a la carpeta del tema. Esta constante te puede ayudar a la hora de hacer includes de otros archivos.
    - **THEME_BOILERPLATE_URL:** Te permite indicar la URL absoluta de la carpeta del tema.
    - **THEME_BOILERPLATE_LANG_DIR:** Te permite indicar la ruta de la carpeta en la que almacenarás los ficheros .po y .mo con las traducciones del tema.
    - **THEME_BOILERPLATE_ASSETS:** Te permite indicar la URL absoluta de la carpeta de los assets del tema. Esta constante te puede ayudar a la hora de enconlar tus archivos CSS y JS.
    - **THEME_BOILERPLATE_VERSION:** Te permite indicar la versión de tu tema. El valor de esta constante es el mismo que el de la cabecera de la "Version".
- **assets:** Contiene todos los recursos que necesita tu tema.
    - **css:** Aquí podrás incluir los archivos CSS que tu tema necesita para visualizarse correctamente.
    - **fonts:** Aquí podrás incluir las tipografías requeridas por tu tema.
    - **images:** Aquí podrás incluir aquellas imágenes que tu tema necesita, tales como iconos, logos, etc.
    - **js:** Aquí podrás incluir los archivos Javascript de las funcionalidades que tu tema requiera.
- **languages:** En esta carpeta, se almacenarán todos los archivos *.po y *.mo, necesarios para la correcta traducción del tema.
- **src:** 
    - **App:**
        - **App.php:** En este archivo se establece una clase con la configuración del tema. En ella, se instancian todas las clases con las funcionalidades del tema, se indica a la instalación de WordPress el nombre de dominio que debe buscar para traducir el tema, se encolan los ficheros CSS y Javascript globales que el tema necesita y se definen los menús que se utilizarán en el tema. 
    - **Modules:** Contiene las clases de PHP que desarrollarás para añadir las funcionalidades de tu tema, tales como bloques, página de opciones del tema y todas aquellas cuya responsabilidad deba recaer sobre dicho tema y no sobre un plugin.
    - **Infrastructure:** En este directorio puedes crear clases para definir información que te sea útil en el resto de clases del tema, tal como nombres de campos personalizados, nombres de bloques o hooks a medida que crees dentro de tu tema.
    - **Services:** En este directorio puedes crear clases para definir métodos que sean de utilidad para el desarrollo del tema y que puedan ser utilizados desde cualquier otra clase, como por ejemplo un método que se encargue de realizar una petición a un endpoint y devolver el resultado de una forma concreta.
- **templates:** En esta carpeta puedes crear todas aquellas plantillas que sean de utilidad para los contenidos, bloques, shortcodes y resto de componentes de tu web.
    - **parts:** En este directorio, puedes almacenar partes de plantillas que puedan ser reutilizadas en varias plantillas, evitando así la repetición de código.
- **vendor:** En esta carpeta, se almacenarán todas las dependencias que se instalen en el tema al ejecutar el comando ```composer install```. Recuerda que debes incluirla en el archivo **.gitignore**.
- **composer.json:** Este es el archivo de configuración de Composer. En él, encontrarás las librerías y dependencias que el tema necesita para funcionar. Quizá necesites añadir las tuyas propias en función del tema que vayas a desarrollar.
- **composer.lock:** Este archivo contiene las dependencias que se han instalado actualmente en tu tema a través de Composer, así como las versiones de cada una de ellas. Puedes modificar su contenido ejecutando el comando ```composer update``` en una consola desde la raíz del tema.
- **.gitignore:** Este archivo contiene aquellos archivos que deben ser ignorados por Git y, por tanto no se deben subir al repositorio.
- **Otros archivos:** Se trata de aquellos archivos que contienen la estructura de plantillas de un tema. Para ampliar la información, visita la documentación sobre la [jerarquía de plantillas](https://developer.wordpress.org/themes/basics/template-hierarchy/).

## Nota informativa

Este es un proyecto Open Source, así que siéntete libre de descargarlo, utilizarlo y proponer nuevas características y funcionalidades.