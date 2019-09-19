<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        
        <form action='' method='POST' enctype='multipart/form-data'>
            <label for='name'> Nombre: </label>
            <p><input type='text' name='nombre' /></p>
                
            <label for='apellido'> Apellido: </label>
            <p><input type='text' name='apellido' /></p>
            
            <label for='boton'> Boton: </label>
            <p><input type='button' name='boton' value='Click' /></p>
 
            <label for='sexo'> Sexo: </label>
            <p>
                Hombre <input type='checkbox' name='sexo' value='hombre'/>
                Mujer <input type='checkbox' name='sexo' value='mujer' checked="checked"/>
            </p>
                
            <label for='color'> Color: </label>
            <p><input type='color' name='color' /></p>
                
            <label for='fecha'> Fecha: </label>
            <p><input type='date' name='fecha' /></p>
            
            <label for='correo'> Email: </label>
            <p><input type='email' name='correo' /></p>
            
            <label for='archivo'> File: </label>
            <p><input type='file' name='archivo' /></p>
            
            <label for='numero'> Number: </label>
            <p><input type='number' name='numero' /></p>
            
            <label for='pass'> Password: </label>
            <p><input type='password' name='pass' /></p>
            
            <label for='continente'> Continent: </label>
            <p>
                America del Sur <input type='radio' name='continent' value='America del sur'/>
                Erope <input type='radio' name='continent' value='Europe'/>
                Asia <input type='radio' name='continent' value='Asia'/>
            </p>
            
            <label for='web'> Web: </label>
            <p><input type='url' name='web' /></p>
            
            <textarea></textarea></br>
            
            Peliculas:
            <select name='peliculas'>
                <option value='Spiderman'>Spiderman</option>
                <option value='Batman'>Batman</option>
                <option value='La jungla de cristal'>La jungla de cristal</option>
                <option value='Gran Torino'>Gran Torino</option>   
            </select>
            </br>
            
            <input type='submit' value='Enviar' />
            
        </form>
            
    </body>
</html>