<?php
// Obtener slug del parámetro GET
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Validar que existe slug
if (empty($slug)) {
    http_response_code(404);
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 - Proyecto no encontrado | Estudio Nómada</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
        <style>
            .font-cormorant { font-family: 'Cormorant Garamond', serif; }
            .font-inter { font-family: 'Inter', sans-serif; }
        </style>
    </head>
    <body class="font-inter bg-slate-900 text-white flex items-center justify-center min-h-screen">
        <div class="text-center px-6">
            <h1 class="font-cormorant text-8xl font-semibold mb-6">404</h1>
            <p class="text-2xl mb-8">Proyecto no encontrado</p>
            <a href="/blog" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium px-8 py-3 transition-all">
                Volver al blog
            </a>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Hacer fetch a la API
$api_url = "https://cms.carolsublimados.shop/wp-json/wp/v2/posts?slug=" . urlencode($slug) . "&_embed";
$response = @file_get_contents($api_url);

// Manejar errores de API
if ($response === false) {
    http_response_code(500);
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error - Estudio Nómada</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
        <style>
            .font-cormorant { font-family: 'Cormorant Garamond', serif; }
            .font-inter { font-family: 'Inter', sans-serif; }
            .bg-cream { background-color: #FDFBF7; }
        </style>
    </head>
    <body class="font-inter bg-cream text-gray-700 flex items-center justify-center min-h-screen">
        <div class="text-center px-6 max-w-2xl">
            <h1 class="font-cormorant text-6xl font-semibold text-slate-900 mb-6">Error de conexión</h1>
            <p class="text-xl mb-8">No se pudo conectar con el servidor. Por favor, intenta nuevamente más tarde.</p>
            <a href="/blog" class="inline-block bg-amber-600 hover:bg-amber-700 text-white font-medium px-8 py-3 transition-all">
                Volver al blog
            </a>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Decodificar respuesta
$posts = json_decode($response);

// Validar que el post existe
if (empty($posts) || !is_array($posts) || count($posts) === 0) {
    http_response_code(404);
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 - Proyecto no encontrado | Estudio Nómada</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <style>
            .font-cormorant { font-family: 'Cormorant Garamond', serif; }
            .font-inter { font-family: 'Inter', sans-serif; }
            .bg-cream { background-color: #FDFBF7; }
        </style>
    </head>
    <body class="font-inter bg-cream text-gray-700">
        <div class="flex items-center justify-center min-h-screen px-6">
            <div class="text-center max-w-2xl">
                <i class="fas fa-search text-amber-600 text-6xl mb-6"></i>
                <h1 class="font-cormorant text-6xl font-semibold text-slate-900 mb-6">Proyecto no encontrado</h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Lo sentimos, el proyecto que buscas no existe o ha sido movido.
                </p>
                <a href="/blog" class="inline-flex items-center bg-amber-600 hover:bg-amber-700 text-white font-medium px-8 py-4 transition-all">
                    <i class="fas fa-arrow-left mr-2"></i> Volver al blog
                </a>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Obtener el post
$post = $posts[0];

// Extraer datos del post
$post_title = isset($post->title->rendered) ? $post->title->rendered : 'Sin título';
$post_content = isset($post->content->rendered) ? $post->content->rendered : '';
$post_excerpt = isset($post->excerpt->rendered) ? strip_tags($post->excerpt->rendered) : '';
$post_date = isset($post->date) ? date('d \d\e F, Y', strtotime($post->date)) : '';

// Imagen destacada - Solo usar si existe en WordPress
$post_image = null; // Sin fallback
$image_alt = $post_title;
if (isset($post->_embedded->{'wp:featuredmedia'}[0]->source_url)) {
    $post_image = $post->_embedded->{'wp:featuredmedia'}[0]->source_url;
    if (isset($post->_embedded->{'wp:featuredmedia'}[0]->alt_text)) {
        $image_alt = $post->_embedded->{'wp:featuredmedia'}[0]->alt_text ?: $post_title;
    }
}

// Categoría principal
$category = 'General';
if (isset($post->_embedded->{'wp:term'}[0][0]->name)) {
    $category = $post->_embedded->{'wp:term'}[0][0]->name;
}

// Incluir header con variables para meta tags
include 'header.php'; 
?>

    <!-- HERO POST -->
    <section class="bg-slate-900 py-32 md:py-40">
        <div class="container mx-auto px-6 lg:px-12 max-w-4xl text-center">
            <span class="inline-block text-xs uppercase tracking-widest text-amber-600 font-semibold mb-6">
                <?php echo htmlspecialchars($category); ?>
            </span>
            <h1 class="font-cormorant text-5xl md:text-7xl text-white font-semibold mb-6 leading-tight">
                <?php echo $post_title; ?>
            </h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                <?php echo $post_date; ?>
            </p>
        </div>
    </section>

    <!-- CONTENIDO PRINCIPAL -->
    <article class="bg-white py-16 md:py-24">
        <div class="container mx-auto px-6 lg:px-12 max-w-4xl">
            
            <!-- Imagen destacada grande -->
            <?php if (!empty($post_image)): ?>
            <div class="mb-16">
                <img src="<?php echo htmlspecialchars($post_image); ?>" 
                     alt="<?php echo htmlspecialchars($image_alt); ?>" 
                     class="w-full h-auto object-cover"
                     style="max-height: 600px;">
            </div>
            <?php endif; ?>

            <!-- Metadatos -->
            <div class="flex items-center justify-between border-b border-gray-200 pb-8 mb-12">
                <div>
                    <span class="text-xs uppercase tracking-widest text-amber-600 font-semibold">
                        <?php echo htmlspecialchars($category); ?>
                    </span>
                </div>
                <div class="text-sm text-gray-500">
                    <?php echo $post_date; ?>
                </div>
            </div>

            <!-- Contenido del post con estilos de prosa elegantes -->
            <div class="prose-content text-lg text-gray-700 leading-relaxed space-y-6">
                <?php echo $post_content; ?>
            </div>

        </div>
    </article>

    <!-- CTA: Más proyectos -->
    <section class="bg-cream py-20">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="font-cormorant text-4xl md:text-5xl text-slate-900 font-semibold mb-8">
                Descubre más proyectos
            </h2>
            <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Explora nuestra colección completa de proyectos de diseño de interiores
            </p>
            <a href="/blog" class="inline-flex items-center bg-amber-600 hover:bg-amber-700 text-white font-medium px-10 py-4 text-lg transition-all">
                <i class="fas fa-arrow-left mr-3"></i> Ver todos los proyectos
            </a>
        </div>
    </section>

    <style>
        /* Estilos prosa elegantes para el contenido del post */
        .prose-content p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .prose-content h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.25rem;
            font-weight: 600;
            color: #0f172a;
            margin-top: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .prose-content h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.875rem;
            font-weight: 600;
            color: #0f172a;
            margin-top: 2.5rem;
            margin-bottom: 1.25rem;
            line-height: 1.3;
        }

        .prose-content h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: #0f172a;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .prose-content ul,
        .prose-content ol {
            margin-bottom: 1.5rem;
            padding-left: 2rem;
        }

        .prose-content li {
            margin-bottom: 0.75rem;
            line-height: 1.8;
        }

        .prose-content a {
            color: #d97706;
            text-decoration: underline;
            transition: color 0.3s ease;
        }

        .prose-content a:hover {
            color: #b45309;
        }

        .prose-content img {
            width: 100%;
            height: auto;
            margin: 2.5rem 0;
            border-radius: 0.5rem;
        }

        .prose-content blockquote {
            border-left: 4px solid #d97706;
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: #475569;
            font-size: 1.25rem;
        }

        .prose-content strong {
            font-weight: 600;
            color: #0f172a;
        }

        .prose-content em {
            font-style: italic;
        }

        .prose-content code {
            background-color: #f1f5f9;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.9em;
            font-family: monospace;
        }

        .prose-content pre {
            background-color: #1e293b;
            color: #e2e8f0;
            padding: 1.5rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 2rem 0;
        }

        .prose-content pre code {
            background-color: transparent;
            padding: 0;
            color: inherit;
        }

        .prose-content hr {
            border: none;
            border-top: 1px solid #e2e8f0;
            margin: 3rem 0;
        }

        .prose-content figure {
            margin: 2.5rem 0;
        }

        .prose-content figcaption {
            text-align: center;
            color: #64748b;
            font-size: 0.9rem;
            margin-top: 0.75rem;
            font-style: italic;
        }
    </style>

<?php include 'footer.php'; ?>
