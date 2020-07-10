# Proyecto_Integrador
## Servicio Web para una Agencia de Viajes 
## Integrantes del Equipo 
### Elsa Cruz Ramirez
### Geraldine Ortiz Fernández 

### Servicios 
1. Crucero [URL del servicio](http://3.87.203.171:9191/crucero.wsdl)
2. Aereolínea [URL del servicio](http://54.90.84.87:8080/ws/aeropuerto.wsdl)
3. Banco [URL del servicio](http://3.87.203.171:8080/banco.wsdl)

### Requerimientos 
>Crucero 
- Reservación 
- Editarr reservación 
- Eliminar reservación 

>Aereolínea 
- Agregar pasajero 
- Actualizar pasajero 
- Eliminar pasajero 

>Banco 
- Realizar pago 
- Realizar reembolso 

### Especificación de funciones 
>Crucero 
#### Reservación 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| noReservacion | String | setNoReservacion() / getNoeservacion() |
| nombreUsuario | String | setNombreUsuario() / getNombreUsuario() |
| fechaSalida | String | setFechaSalida() / getFechaSalida() |
| horaSalida | String | setHoraSalida() / getHoraSalida() |
| costo | int | setCosto() / getCosto() |
#### Editar reservación 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| noReservacion | String | setNoReservacion() / getNoeservacion() |
| nombreUsuario | String | setNombreUsuario() / getNombreUsuario() |
| fechaSalida | String | setFechaSalida() / getFechaSalida() |
| horaSalida | String | setHoraSalida() / getHoraSalida() |
#### Eliminar reservación 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| noReservacion | String | setNoReservacion() / getNoeservacion() |

>Aereolínea 
#### Agregar pasajero 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| nombre | - | setNombre() / getNombre() |
| destino | - | setDestino() / getDestino() |
| coste | - | setCoste() / getCoste() |
| sala | - | setSala() / getSala() |
| asientofecha | - | setAsientofecha() / getAsientoFecha() |
| avion | - | setAvion() / getAvion() |
| hora | - | setHora() / getHora() |
#### Editar pasajero 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| nombre | - | setNombre() / getNombre() |
| destino | - | setDestino() / getDestino() |
| coste | - | setCoste() / getCoste() |
| sala | - | setSala() / getSala() |
| asientofecha | - | setAsientofecha() / getAsientoFecha() |
| avion | - | setAvion() / getAvion() |
| hora | - | setHora() / getHora() |
#### Eliminar pasajero 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| idBoleto | - | setIdBoleto() / getIdBoleto() |
>Banco 
#### Realizar pago 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| nombre_cliente | String | setNombreCliente() / getNombreCliente() |
| num_tarjeta | String | setNumTarjeta() / getNumTarjeta() |
| fecha_vencimiento | String | setFechaVencimiento() / getFechaVencimiento() |
| condigo_cvc | int | setCodigoCvc() / getCodigoCvc() |
| cantidad | int | setCantidad() / getCantidad() |
#### Realizar reembolso 
| Atributo | Tipo | Método |
| -------- | ---- | ------ |
| num_tarjeta | String | setNumTarjeta() / getNumTarjeta() |
| pago_por_reservacion | int | setPagoPorReservacion() / getPagoPorReservacion() |
### Arquitectura del Servicio Web 
- ![](https://github.com/geral831/ProyectoIntegrador-TIS/blob/master/AGENCIA_IMG/arquitectura_servicio.png)
### API Crucero 
- Hacer reservacion 
  - Se ingresan los datos  para realizar la reservación
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
- Editar reservacion 
  - Se ingresan los datos para editar la reservacion
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
- Eliminar reservacion 
  - Se ingresan los datos para eliminar la reservacion
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
  
### API Aereolínea 
- Agregar pasajero 
  - Se ingresan los datos  para realizar agreagar un pasajero
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
- Editar pasajero
  - Se ingresan los datos para editar los datos de algun pasajero
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
- Eliminar pasajero 
  - Se ingresan los datos para eliminar los datos de algún pasajero
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
### API Banco 
- Realizar pago 
  - Se ingresan los datos  para realizar el pago de algun servicio (Crucero / Aereolinea) 
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
- Realizar reembolso
  - Se ingresan los datos  para realizar el reembolso por la cancelación de algun servicio (Crucero / Aereolinea) 
  - En caso de ingresar algún dato de manera incorrecta, el sistema mostrará algun mensaje de error
### Tutorial: Consumo servicio (Windows)
1. Contar con un servidor web local activo (XAMPP y Apache especificamente)
2. Contar con la siguiente configuracion dentro del archivo XAMPP en nuestro disco local 
  - Ingreasar en la ruta: C:\xampp\php\php.ini
  - Buscar la línea -> extension=php_soap.dll
  - En caso de no encontrarla, agregarla y guardar los cambios
  - En caso de que se encuentre de la siguiente manera -> ;extension=php_soap.dll -> quitar el ";"
  - En caso de encontrarla de la siguiente manera -> extension=php_soap.dll -> cerrar el archivo sin guardar cambios 
  - Apagar servidor y reinicarlo
3. Descargar proyecto "Agencia"
4. Mover el archivo completo, en una sola carpeta llamada "Agencia" a la siguiente ruta dentro de tu computadora: 
  - C:\xampp\htdocs
  - Quedando de la siguiente manera (ruta) -> C:\xampp\htdocs\Agencia
5. Para consultar el consumo del servicio: 
  - Escribir en tu navegador web alguna de las siguientes url's: 
      - localhost/Agencia [URL del consumo](http://localhost/Agencia)
      - localhost/Agencia/index.html [URL del consumo](http://localhost/Agencia/index.html)
      - 127.0.0.1/Agencia [URL del consumo](http://127.0.0.1/Agencia)
      - 127.0.0.1/Agencia/index.html [URL del consumo](http://127.0.0.1/Agencia/index.html)
