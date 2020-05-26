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

       

  - ### body

       Es la parte final de un request y del response, no todos los request y response tienen uno .Contienen data asociada con un request.

     