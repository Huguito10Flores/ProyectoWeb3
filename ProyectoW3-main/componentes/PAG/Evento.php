<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./componentes/CSS/eventos.css"> <!-- Archivo de estilos -->
</head>
<body>

<!-- Carrusel de imágenes -->
<div class="container my-5">
    <!-- Subtítulo de eventos destacados -->
    <div class="featured-events-title text-center mb-4">
        <h2>Eventos Destacados</h2>
    </div>

    <!-- Carrusel de imágenes -->
    <div class="carousel-container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- Primera imagen con tamaño más grande -->
                <div class="carousel-item active">
                    <img src="./componentes/IMGeventos/2.png" class="d-block w-100 custom-large-image" alt="Evento 1">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="inner-image-container">
                            <img src="./componentes/IMGeventos/2.png" class="inner-image" alt="Evento 1 Logo">
                        </div>
                        <h5>Kudai Tour Revive</h5>
                        <p>24 de Octubre, La Paz</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./componentes/IMGeventos/1.png" class="d-block w-100" alt="Evento 2">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="inner-image-container">
                            <img src="./componentes/IMGeventos/1.png" class="inner-image" alt="Evento 2 Logo">
                        </div>
                        <h5>Bronco en Concierto</h5>
                        <p>25 de Octubre, Santa Cruz</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./componentes/IMGeventos/4.png" class="d-block w-100" alt="Evento 3">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="inner-image-container">
                            <img src="./componentes/IMGeventos/4.png" class="inner-image" alt="Evento 3 Logo">
                        </div>
                        <h5>Luis Vega Hagamos Historia</h5>
                        <p>La Paz - Teatro al Aire Libre</p>
                    </div>
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

    <!-- Carteles de Eventos -->
    <div class="container my-5">
        <h1 class="event-title text-center mb-4">"¡No te pierdas los próximos espectáculos! Compra tu entrada en Ticket X Press"</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 show-card">
                    <img src="./componentes/IMGeventos/2.png" class="card-img-top" alt="Show 1">
                    <div class="card-body">
                        <h5 class="card-title">Kudai en Concierto - La Paz</h5>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt"></i> Teatro al Aire Libre<br>
                            <i class="fas fa-calendar-alt"></i> 24.oct de 2024<br>
                            <i class="fas fa-clock"></i> 17:00:00<br>
                            Bs 160,00
                        </p>
                        <a href="index.php?page=vender" class="btn btn-comprar">Entradas Disponibles</a> <!-- Botón de Comprar -->
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 show-card">
                    <img src="./componentes/IMGeventos/1.png" class="card-img-top" alt="Show 2">
                    <div class="card-body">
                        <h5 class="card-title">Bronco en Concierto - Santa Cruz</h5>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt"></i> Estadio Real Santa Cruz<br>
                            <i class="fas fa-calendar-alt"></i> 25.oct de 2024<br>
                            <i class="fas fa-clock"></i> 19:00:00<br>
                            Bs 180,00
                        </p>
                        <a href="index.php?page=vender" class="btn btn-comprar">Entradas Disponibles</a> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 show-card">
                    <img src="./componentes/IMGeventos/3.png" class="card-img-top" alt="Show 3">
                    <div class="card-body">
                        <h5 class="card-title">Siempre Mayas en Vivo</h5>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt"></i> Calle Yanacocha #428<br>
                            <i class="fas fa-calendar-alt"></i> 15.nov de 2024<br>
                            <i class="fas fa-clock"></i> 21:00:00<br>
                            Bs 130,00
                        </p>
                        <a href="index.php?page=vender" class="btn btn-comprar">Entradas Disponibles</a> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 show-card">
                    <img src="./componentes/IMGeventos/4.png" class="card-img-top" alt="Show 4">
                    <div class="card-body">
                        <h5 class="card-title">Luis Vega Hagamos Historia - La Paz</h5>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt"></i> Teatro al Aire Libre<br>
                            <i class="fas fa-calendar-alt"></i> 20.dic de 2024<br>
                            <i class="fas fa-clock"></i> 18:00:00<br>
                            Bs 200,00
                        </p>
                        <a href="index.php?page=vender" class="btn btn-comprar">Entradas Disponibles</a> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 show-card">
                    <img src="./componentes/IMGeventos/5.png" class="card-img-top" alt="Show 5">
                    <div class="card-body">
                        <h5 class="card-title">Te Amo pero no te soporto - 19 de noviembre</h5>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt"></i> Espacio Kuu<br>
                            <i class="fas fa-calendar-alt"></i> 19.nov de 2024<br>
                            <i class="fas fa-clock"></i> 19:30:00<br>
                            Bs 52,00
                        </p>
                        <a href="index.php?page=vender" class="btn btn-comprar">Entradas Disponibles</a> 
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 show-card">
                    <img src="./componentes/IMGeventos/6.png" class="card-img-top" alt="Show 6">
                    <div class="card-body">
                        <h5 class="card-title">Bolivar vs Aurora - 19 de octubre</h5>
                        <p class="card-text">
                            <i class="fas fa-map-marker-alt"></i> Estadio Hernando Siles<br>
                            <i class="fas fa-calendar-alt"></i> 10.dic de 2024<br>
                            <i class="fas fa-clock"></i> 20:00:00<br>
                            Bs 30,00
                        </p>
                        <a href="index.php?page=vender" class="btn btn-comprar">Entradas Disponibles</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

