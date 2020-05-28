# ***Estructura basica de http request, http response:***



- ## headers

  Http headers, permiten al cliente y al servidor, pasar informacion con un http request or response.

  

     - ### url

          Es un mecanismo usado por los navegadores para recuperar cualquier recuso publicado en la web, una url no es mas que una dirección de un unico recurso en la web, dichos recursos pueden ser paginas html, imagenes etc.

          

          - #### query parameters 

               Son un conjunto de parametros, que se encuentran al final de una url, se utilizan para ayudar a definir acciones las cuales se basan en los datos que se pasan.

               Para agregar "query params", al final de una url se agrega el simbolo '?' seguido de los query paremters. Para agregar multipes parametros se agrega  el simbolo '&' entre cada uno de los parametros.

               

  - ### status code

       Es un codigo en la respuesta del servidor, consta de 3 digitos enteros. El primer digito el status code, indica una de las 5 clases estandar de respuestas.

       | Valores para el primer digito: |                                                            |
       | ------------------------------ | ---------------------------------------------------------- |
       | 1xx: Informational             | La solicitud ha sido recivida, y  el proceso continua.     |
       | 2xx: Success                   | La solicitud se recibio, entendio y acepto con exito.      |
       | 3xx: Redirection               | Se deben tomar medidas extras para completar la solicitud. |
       | 4xx: Client Error              | La solicitud no se puede cumplir.                          |
       | 5xx: Server Error              | El servidor fallo ante una aparente solicitud valida.      |

        

  - ### content type

       El proposito de este campo es describir los datos contenidos en el cuerpo para que el usuario receptor pueda elegir un mecanismo para tratar los datos de una manera adecuada, este campo se utiliza para describir la naturaleza de los datos en el cuerpo de una entidad. En los responses el content type header, indica al cliente cual es el tipo del contenido devuelto. En un request el cliente indica al servidor que tipos de datos se envian realmente. 

       

       Sintaxis:

       ```
       Content-Type: text/html; charset=UTF-8
       Content-Type: multipart/form-data; boundary=something
       ```

       

       Ejemplos:

       ```html
       <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
       ```

       ```php+HTML
       <?php 
         
       header('Content-type: image/jpeg');  
       echo file_get_contents("https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-6.png"); 
         
       ?> 
       ```

       ```html
       <form action="/" method="post" enctype="multipart/form-data">
         <input type="text" name="description" value="some text">
         <input type="file" name="myFile">
         <button type="submit">Submit</button>
       </form>
       ```

       Para ver todos los posibles valores de http content-type header

       [https://www.geeksforgeeks.org/http-headers-content-type/]()

       

  - ### method

       HTTP cuenta con un conjuto de request methods, los cuales indican una accion a realizar sobre un recurso.

       

       -  GET:  se deberiausar solo para recuperar datos 
       - HEAD: se parace al get, pero solo transfiere la seccion del header 
       - POST:  se utiliza para enviar data al server
       - PUT:  crea un nuevo elemento o remplaza una representacion del elemento de desitno con los datos del request.
       - DELET: borra un recurso en especifico
       - CONNECT: estableze un tunel con el servidor, identificado por un URI
       - OPTIONS:  describe las opciones de comunicacion con un recurso destino.
       - TRACE: realiza una prueba de bucle de retorno de mensaje, a lo largo de la ruta al recurso de destino
       - PATCH: es usado para aplicar modificaciones parciales en un recurso

       

       

- ## body

     Es la parte final de un request y del response, no todos los request y response tienen uno .Contienen data asociada con un request.
     
        
     
     # ***Login simple***
     
- ## servidor apache con php

  Se utilizo xampp, para levantar un servidor local 

  [](https://www.apachefriends.org/es/index.html)

  

- ## css

  Se utilizan para aplicar estilos a documentos html de forma masiva

  - ### display

    Todos los elementos constan de un display, se puede decir que esta propiedad define el tipo de caja que genera un elemento.

    - #### block

      Muestra los elementos en lineas independientes y tiene propiedades width, height y margenes verticales.

    - #### inline

      Es el valor inicial, muenstra en la misma linea todos los elementos, no tiene propiedades width, height, ni margenes verticales.

    - #### inline-block

      Es un mezcla de los dos anteriores, se muestra en la misma linea los elementos, y acepta propiedades width, height y margenes verticales

  - ### margin

    Setea el margen de area en todos los lados de un elemento

  - ### padding

    Se usa para generar espacio al rededor del contenido de un elemento, dentro de cualquier borde definido

  - ### border

    Permite especificar el estilo, tamaño, color del borde de un elemento

  - ### position

    Especifica el metodo de posicionamento de un elemento

    - #### static

      Esta posicion no es afectada por las propiedades top, bottom left y right.

    - #### absolute

      Posicion relativa con el elemento anterior

    - #### relative

      Es la posicion normal de un elemento 

    - #### fixed

      Posicion relativa con el viewport

    - #### sticky

      Posicion basada con la posicion del scroll del usuario 

- ## html

  - ### form

    Representa una seccion de un documento que contiene controles interactivos que permiten al usuario enviar informacion a un servidor web

    - #### action

      Es la url que procesa la informacion del formulario 

    - #### method

      Es el metodo con el que se va procesar la informacion, puede ser get, post o dialog, se usa post cuando se desea enviar datos al servidor, y get cuando se desean agregar datos al final de una url

    - #### comportamiento de type button 

      Por lo general sus efectos estan controlados por cosas como js

    - #### comportamiento de type submit

      Se utiliza para enviar datos del formulario al servidor

      

    > Tanto <button type="submit"> como <input type="submit"> puen enviar la informacion de un form al servidor. La diferencia entre button  submit es que <button> puede tener contenido mientras que <input> es un elemento nulo, por lo que button tiene mas opciones de personalizacion. 

  

- ## php

  - ### $_POST

    Es un arreglo de nombres de variables con sus respectivos valores, enviados a travez de HTTP POST method, cuando se utiliza este metodo la data va a traves del body del HTTP Request,  por lo que no es visible

  - ### $_GET

    Es una variable global usada para obtener la data de un form a travez del HTTP GET method, cuando se utiliza este metodo la informacion se puede ver a travez del url.

    

  > Es recomendado utilizar el metodo post, para enviar datos al servidor y get para obtener datos del servidor.

  - ### Orden del proceso

    ```html
    	<form method="post" action="login.php">
    			<label> user: </label>
    			<p>
    			<input type="text" name="strUserName">
    			<p>
    			<label> pass: </label>
    			<p>
    			<input type="password" name="strPassword">
    			<p>
    			<input type="submit" value="log">
    		</form>
    ```

    

    1. En la propiedad method, se indica que HTTP method se va utilizar
    2. En action, se indica el archivo php que se va procesar para llevar acabo dicha accion
    3. En los campos <input> se le agrega la propiedad name, la cual nos va servir para identificar las variables del lado del servidor.

    

    ```php
    
    	$userName = $_POST["strUserName"];
    	$userPass = $_POST["strPassword"];
    
    ```

    3. Con las variables $_POST y el name asignado en html, se recupera la informacion enviada a travez del form, para comparar dicha informacion.

  - ### Content Type

    ![image-20200528002738214](/home/nicte/.config/Typora/typora-user-images/image-20200528002738214.png)

  

