proyecto jugomania

pagina web de pedidos de productos donde el usuario podra pedir los diferentes productos y esos pruductos se le mostraran al proveedor, mientras que el superadmin podra anadir mas productos y editar los precios y demas

#Tareas#

1-> vista principal donde apareceran los diferentes pruductos y sus precios alimentados de la base de datos y actualizados con el superadmin. 

1.1-> tambien un apartado de pedidos, donde seleccionas tus diferentes pedidos y se anaden a una lista y cuando estes listo podras pedir

1.2-> aparte que si el usuario sigue anadendo mas del mismo productos, solo subira la cantidad del mismo

1.3-> tambiem podra eliminar antes de completar el proceso de pedir.

1.4-> eso se mostrara a la tablas de los distribuidores donde tendran su direccion marcada

---------------------------------------------------------------------------------------------------------  

2-> ningun usurio puede pedir sin estar registrados, si el usuario no esta logeado al momento de pedir se le redirigira al area de login y cuando completa el logeo se completara el pedido.

3->en la parte de registro el usuario debera poner su direccion.

4-> la pagina tendra tres roles: cliente=>solo podran pedir y acceder a su configuracion de cuenta(profile);
distribuidor=> accedera a un ponel de administracion y prodra ver los pedidos de los clientes y aceptarlos, y se le notificara por correo al cliente; superadmin=> podra editar los diferentes prooductos y su precio, podra ver los pedidos de los clientes y los que los distribuidores aceptaron, podra borrar cuentas tanto de clientes y proveedores, podra asignar roles de distribuidores  de superadmin, todo esto dentro del adminlte.

5->notificacion por telegran a los distribuidores y superadmin de nuevos pedidos, y notificacion por correo a los pedidos aceptados a los clientes, al igual cuando un pedido es aceptado se le mostrara por telegran al superadmin.

#FUTURAS ACTUALICACIONES#

1-> pagos via la misma plataforma;

2-> graficos de ventas


## Hacerca de este proyecto -- JugoMania

se trate de un manejador de pedidos donde el cliente puede pedir diferentes productos, ya sean jugos o comadia etc.. y un proveedor con la ayuda de un panel de administrador podra ver los productos pedidos por los cientes, con su direccion, todo con login y registros, diferentes roles, todo personalizable, con futaras ideas de poder asignar un proveedor a un designado sector o comunidad, producto; segun el tipo de cliente, con un superadmin quien pueda controlar todo y anadir mas productos a la paginas, crear mas proveedores etc. graficos de ventas, pagos por la misma plataformas y muchas cosas mas que se me vallan ocurriendo

--mas cosas--

*implementacion de notificaciones al telegran de un pedido al provedor y al superadmin, haci siempre esta enterado de los pedidos.

*posibilidad de que el administrador pueda borrar la cuenta de un cliente o provedos y dejarlo baneado por email y direccion.




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
