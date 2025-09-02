<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLove - Todo para tu Mascota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #FF6B35;
            --secondary-color: #4ECDC4;
            --accent-color: #FFD23F;
            --dark-color: #2C3E50;
            --light-bg: #F8F9FA;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
            animation: float 20s infinite linear;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .btn-custom {
            background: var(--accent-color);
            border: none;
            color: var(--dark-color);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 210, 63, 0.3);
        }
        
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 210, 63, 0.5);
            color: var(--dark-color);
        }
        
        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: none;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
        }
        
        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .product-image {
            height: 250px;
            background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 3rem;
        }
        
        .stats-section {
            background: var(--dark-color);
            color: white;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--accent-color);
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: none;
        }
        
        .avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 2px;
        }
        
        .cta-section {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--primary-color) 100%);
            position: relative;
        }
        
        .footer {
            background: var(--dark-color);
            color: white;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--accent-color);
            color: var(--dark-color);
            transform: translateY(-3px);
        }
        
        .price-badge {
            background: var(--primary-color);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            display: inline-block;
        }
        
        .discount-badge {
            background: var(--accent-color);
            color: var(--dark-color);
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
            position: absolute;
            top: 15px;
            right: 15px;
        }
        
        .floating-elements {
            position: absolute;
            top: 20%;
            right: 10%;
            animation: bounce 3s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgba(44, 62, 80, 0.95); backdrop-filter: blur(10px);">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-paw me-2"></i>PetLove
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#productos">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonios">Testimonios</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-light me-2">
                        <i class="fas fa-shopping-cart"></i> Carrito (0)
                    </button>
                    <button class="btn btn-custom">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="text-white">
                        <h1 class="display-4 fw-bold mb-4">
                            Todo lo que tu <span class="text-warning">mascota</span> necesita
                        </h1>
                        <p class="lead mb-4">
                            Descubre nuestra amplia gama de productos premium para perros, gatos y mascotas exóticas. 
                            Calidad garantizada y envío gratis en compras superiores a $50.000
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <button class="btn btn-custom btn-lg">
                                <i class="fas fa-shopping-bag me-2"></i>Comprar Ahora
                            </button>
                            <button class="btn btn-outline-light btn-lg">
                                <i class="fas fa-play me-2"></i>Ver Catálogo
                            </button>
                        </div>
                        <div class="mt-4">
                            <small class="text-light">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                4.9/5 basado en 2,847 reseñas
                            </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="position-relative">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center" 
                             style="width: 400px; height: 400px; box-shadow: 0 20px 40px rgba(0,0,0,0.2);">
                            <i class="fas fa-dog" style="font-size: 8rem; color: var(--primary-color);"></i>
                        </div>
                        <div class="floating-elements">
                            <i class="fas fa-bone text-warning" style="font-size: 2rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="servicios" class="py-5" style="background: var(--light-bg);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold">¿Por qué elegir PetLove?</h2>
                <p class="lead text-muted">Más que una tienda, somos tu aliado en el cuidado de tu mascota</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4>Envío Gratis</h4>
                        <p class="text-muted">Envío gratuito en compras superiores a $50.000 en toda Colombia</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h4>Calidad Premium</h4>
                        <p class="text-muted">Solo trabajamos con las mejores marcas reconocidas mundialmente</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Soporte 24/7</h4>
                        <p class="text-muted">Atención al cliente especializada en mascotas las 24 horas</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-undo"></i>
                        </div>
                        <h4>Devolución Fácil</h4>
                        <p class="text-muted">30 días para devoluciones sin preguntas, garantía total</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="productos" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold">Productos Destacados</h2>
                <p class="lead text-muted">Los favoritos de nuestras mascotas y sus familias</p>
            </div>
            
            <!-- Category Pills -->
            <div class="text-center mb-5">
                <div class="btn-group" role="group">
                    <input type="radio" class="btn-check" name="category" id="todos" checked>
                    <label class="btn btn-outline-primary" for="todos">Todos</label>
                    
                    <input type="radio" class="btn-check" name="category" id="perros">
                    <label class="btn btn-outline-primary" for="perros">
                        <i class="fas fa-dog me-2"></i>Perros
                    </label>
                    
                    <input type="radio" class="btn-check" name="category" id="gatos">
                    <label class="btn btn-outline-primary" for="gatos">
                        <i class="fas fa-cat me-2"></i>Gatos
                    </label>
                    
                    <input type="radio" class="btn-check" name="category" id="accesorios">
                    <label class="btn btn-outline-primary" for="accesorios">
                        <i class="fas fa-toys me-2"></i>Accesorios
                    </label>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card">
                        <div class="position-relative">
                            <div class="product-image">
                                <i class="fas fa-bone"></i>
                            </div>
                            <span class="discount-badge">-25%</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Alimento Premium Perros</h5>
                            <p class="card-text text-muted">Alimento balanceado para perros adultos con ingredientes naturales</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="price-badge">$45.900</span>
                                    <small class="text-muted text-decoration-line-through ms-2">$61.200</small>
                                </div>
                                <button class="btn btn-primary">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card">
                        <div class="position-relative">
                            <div class="product-image">
                                <i class="fas fa-fish"></i>
                            </div>
                            <span class="discount-badge">Nuevo</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Snacks para Gatos</h5>
                            <p class="card-text text-muted">Deliciosos snacks de salmón y atún para gatos de todas las edades</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-badge">$18.500</span>
                                <button class="btn btn-primary">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card">
                        <div class="position-relative">
                            <div class="product-image">
                                <i class="fas fa-gamepad"></i>
                            </div>
                            <span class="discount-badge">Popular</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Juguete Interactivo</h5>
                            <p class="card-text text-muted">Juguete inteligente que mantiene a tu mascota entretenida por horas</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price-badge">$32.900</span>
                                <button class="btn btn-primary">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <button class="btn btn-outline-primary btn-lg">
                    Ver Todos los Productos <i class="fas fa-arrow-right ms-2"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-6 col-md-3">
                    <div class="stat-number">50K+</div>
                    <p class="mb-0">Mascotas Felices</p>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number">1,200+</div>
                    <p class="mb-0">Productos</p>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number">98%</div>
                    <p class="mb-0">Satisfacción</p>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-number">24h</div>
                    <p class="mb-0">Entrega Express</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonios" class="py-5" style="background: var(--light-bg);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title display-5 fw-bold">Lo que dicen nuestros clientes</h2>
                <p class="lead text-muted">Testimonios reales de familias satisfechas</p>
            </div>
            
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-quote-left fa-2x text-primary"></i>
                                    </div>
                                    <p class="fs-5 mb-4">"Excelente servicio y productos de primera calidad. Mi golden retriever Max está más saludable que nunca desde que compro aquí."</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="avatar me-3">MG</div>
                                        <div>
                                            <h6 class="mb-0">María González</h6>
                                            <small class="text-muted">Dueña de Max</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card text-center">
                                    <div class="mb-3">
                                        <i class="fas fa-quote-left fa-2x text-primary"></i>
                                    </div>
                                    <p class="fs-5 mb-4">"La entrega fue súper rápida y el alimento llegó en perfecto estado. Mis gatos Luna y Sol lo adoran."</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="avatar me-3">CR</div>
                                        <div>
                                            <h6 class="mb-0">Carlos Rodríguez</h6>
                                            <small class="text-muted">Papá gatuno</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="fw-bold mb-3">¡No te pierdas nuestras ofertas!</h3>
                    <p class="text-muted">Suscríbete a nuestro newsletter y recibe un 15% de descuento en tu primera compra</p>
                </div>
                <div class="col-lg-6">
                    <div class="input-group input-group-lg">
                        <input type="email" class="form-control" placeholder="tu@email.com">
                        <button class="btn btn-custom" type="button">
                            <i class="fas fa-paper-plane me-2"></i>Suscribirse
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-5 text-white text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold mb-4">¿Listo para mimar a tu mascota?</h2>
                    <p class="lead mb-4">
                        Únete a miles de familias que ya confían en nosotros para el cuidado de sus mascotas
                    </p>
                    <button class="btn btn-custom btn-lg me-3">
                        <i class="fas fa-shopping-cart me-2"></i>Comenzar a Comprar
                    </button>
                    <button class="btn btn-outline-light btn-lg">
                        <i class="fas fa-phone me-2"></i>Contactar Asesor
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold">
                        <i class="fas fa-paw me-2"></i>PetLove
                    </h5>
                    <p class="text-muted">Tu tienda de confianza para todo lo que tu mascota necesita. Calidad, amor y cuidado en cada producto.</p>
                    <div class="mt-3">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold">Productos</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Perros</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Gatos</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Aves</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Peces</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold">Servicios</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Veterinaria</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Grooming</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Hotel Canino</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Entrenamiento</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold">Ayuda</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Envíos</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Devoluciones</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="fw-bold">Contacto</h6>
                    <ul class="list-unstyled text-muted">
                        <li><i class="fas fa-phone me-2"></i>+57 1 234 5678</li>
                        <li><i class="fas fa-envelope me-2"></i>info@petlove.co</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i>Bogotá, Colombia</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">