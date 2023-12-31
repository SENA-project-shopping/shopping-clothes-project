<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/cloneth_blend_logo.jpeg') }}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Cloneth Blend Shopping</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="logo">
                <a href="" class="navbar-brand">
                    <img src="{{ asset('images/cloneth_blend_logo.jpeg') }}" alt="logo" width="50" height="35">
                    Cloneth Blend
                </a>
            </div>
            <div class="nav-links">
                <a href="#inicio" class="active">Inicio</a>
                <a href="#quienes-somos">¿Quiénes Somos?</a>
                <a href="#nuestros-productos">Nuestros Productos</a>
                <a href="#contactenos">Contáctenos</a>
                <a href="{{ route('login') }}" id="loginBtn">
                    <button href="{{ route('login') }}" type="button" class="btn btn-success">Iniciar Sesión</button>
                </a>
            </div>
        </nav>
    </header>
    <div class="container section-content text-center">
        <section id="inicio">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('images/imagen_principal.jpg') }}" alt="imagen sección principal" class="img-fluid">
                    <h4>Con nosotros puedes encontrar todo tipo de ropa que se adecue a tus gustos</h4>
                </div>
            </div>
        </section>
    </div>
    <div class="section-content">
        <div class="container">
            <section id="quienes-somos">
                <div class="row align-items-center">
                    <div class="col">
                        <h1>¿Quíenes Somos?</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, ut asperiores porro nesciunt eos dolore quod odit possimus, laudantium praesentium est totam aliquid voluptatibus? Dicta voluptatibus quae aliquid sit exercitationem! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus delectus explicabo numquam, inventore itaque, voluptate odit alias quis tempora mollitia recusandae sunt repudiandae corporis aperiam harum voluptatum nostrum cupiditate omnis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam reprehenderit deleniti eius quibusdam earum labore sunt quas officiis, ipsam velit ipsum necessitatibus! Quo debitis odit cupiditate nam odio dolor iure.</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('images/cloneth_blend_logo.jpeg') }}" alt="imagen empresa" class="img-fluid">
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <section id="nuestros-productos">
                <h1>Nuestros Productos</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('images/camiseta_negra.jpg') }}" class="card-img-top" alt="camisa-mujer">
                            <div class="card-body">
                                <h5 class="card-title">Camisetas de colección</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Ver Colección
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nuestras Camisas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('images/camiseta_negra.jpg') }}" class="d-block w-100" alt="Camisa 1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/camiseta_negra.jpg') }}" class="d-block w-100" alt="Camisa 2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/camiseta_negra.jpg') }}" class="d-block w-100" alt="Camisa 3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Visíta nuestra tienda o compra virtual</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('images/pantalones_beige.jpg') }}" class="card-img-top" alt="pantalon_cafe">
                            <div class="card-body">
                                <h5 class="card-title">Pantalones de colección</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    Ver Colección
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nuestros Pantalones</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('images/pantalones_beige.jpg') }}" class="d-block w-100" alt="Pantalon 1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/pantalones_beige.jpg') }}" class="d-block w-100" alt="Pantalon 2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/pantalones_beige.jpg') }}" class="d-block w-100" alt="Pantalon 3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Visíta nuestra tienda o compra virtual</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('images/chaqueta_cafe.jpg') }}" class="card-img-top" alt="chaqueta cafe">
                            <div class="card-body">
                                <h5 class="card-title">Chaquetas exclusívas</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    Ver Colección
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nuestras Chaquetas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-indicators">
                                                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('images/chaqueta_cafe.jpg') }}" class="d-block w-100" alt="Pantalon 1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/chaqueta_cafe.jpg') }}" class="d-block w-100" alt="Pantalon 2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('images/chaqueta_cafe.jpg') }}" class="d-block w-100" alt="Pantalon 3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Visíta nuestra tienda o compra virtual</small>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('images/pantaloneta_azul.jpg') }}" class="card-img-top" alt="pantaloneta azul">
                        <div class="card-body">
                            <h5 class="card-title">Pantalonetas exclusívas</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                Ver Colección
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nuetras Pantalonetas</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('images/pantaloneta_azul.jpg') }}" class="d-block w-100" alt="Pantalon 1">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/pantaloneta_azul.jpg') }}" class="d-block w-100" alt="Pantalon 2">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/pantaloneta_azul.jpg') }}" class="d-block w-100" alt="Pantalon 3">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Visíta nuestra tienda o compra virtual</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('images/ropa_interior.jpg') }}" class="card-img-top" alt="ropa interior">
                        <div class="card-body">
                            <h5 class="card-title">Pantalonetas exclusívas</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                Ver Colección
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nuestra Ropa Interior</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('images/ropa_interior.jpg') }}" class="d-block w-100" alt="Pantalon 1">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/ropa_interior.jpg') }}" class="d-block w-100" alt="Pantalon 2">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/ropa_interior.jpg') }}" class="d-block w-100" alt="Pantalon 3">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Visíta nuestra tienda o compra virtual</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="{{ asset('images/zapatos.jpg') }}" class="card-img-top" alt="zapatos">
                        <div class="card-body">
                            <h5 class="card-title">Zapatos exclusívos</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                Ver Colección
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nuestros Zapatos</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="carouselExampleIndicators5" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="{{ asset('images/zapatos.jpg') }}" class="d-block w-100" alt="Pantalon 1">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/zapatos.jpg') }}" class="d-block w-100" alt="Pantalon 2">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="{{ asset('images/zapatos.jpg') }}" class="d-block w-100" alt="Pantalon 3">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Visíta nuestra tienda o compra virtual</small>
                        </div>
                      </div>
                    </div>
                </div>
            </section>  
        </div>
    </div>
    <div class="section-content">
        <div class="container">
            <section id="contactenos">
                <div class="row">
                    <div class="col align-self-center">
                        <h4>Ubicación: <span class="inform-contact">Dirección del local</span></h4>
                        <h4>Teléfonos de contacto: <span class="inform-contact">(+57) 300-000-0000</span></h4>
                        <h4>Correo: <span class="inform-contact">info@clonethblend.com</span></h4>
                        <h4>Horarios de atención: </h4>
                        <h5 class="inform-contact">Lunes a Viernes: 08:00 a.m a 09:00 p.m</h5>
                        <h5 class="inform-contact">Sabados, Domingos y Festivos: 09:00 a.m a 07:00 p.m</h5>
                    </div>
                    <div class="col align-self-center">
                        <h2>Contáctenos</h2>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Nombres Completos:</label>
                                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Correo Electrónico:</label>
                                <input type="email" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPhone" class="form-label">Celular:</label>
                                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputComments1" class="form-label">Comentarios:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Información</h1>
                </div>
                <div class="col">
                    <h2>Información 2</h2>
                </div>
                <div class="col">
                    <h3>Información 3</h3>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>