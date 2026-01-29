<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Nómada - Diseño de Interiores Premium</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <style>
        .font-cormorant { font-family: 'Cormorant Garamond', serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
        .bg-cream { background-color: #FDFBF7; }
        .text-sage { color: #78866b; }
        
        img {
            filter: grayscale(100%);
            transition: filter 0.5s ease;
        }
        
        img:hover {
            filter: grayscale(0%);
        }
        
        .transition-smooth {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="font-inter text-gray-700 bg-white">

    <!-- HEADER -->
    <header class="sticky top-0 z-50 bg-cream shadow-sm">
        <div class="container mx-auto px-6 lg:px-12 py-6">
            <div class="flex items-center justify-between">
                <a href="index.php" class="font-cormorant italic text-3xl lg:text-4xl text-slate-900 font-semibold">
                    Estudio Nómada
                </a>
                <nav class="hidden md:flex space-x-12">
                    <a href="index.php" class="text-gray-700 hover:text-amber-600 transition-smooth font-medium">Inicio</a>
                    <a href="servicios.php" class="text-gray-700 hover:text-amber-600 transition-smooth font-medium">Servicios</a>
                    <a href="blog.php" class="text-gray-700 hover:text-amber-600 transition-smooth font-medium">Blog</a>
                    <a href="contacto.php" class="text-gray-700 hover:text-amber-600 transition-smooth font-medium">Contacto</a>
                </nav>
                <button class="md:hidden text-slate-900 text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
