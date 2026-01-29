<?php include 'header.php'; ?>

    <!-- HERO -->
    <section class="bg-slate-900 py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12 text-center max-w-4xl">
            <h1 class="font-cormorant text-5xl md:text-7xl text-white font-semibold mb-6">
                Inspiración
            </h1>
            <p class="text-xl text-gray-300 leading-relaxed">
                Explora nuestros proyectos más recientes y descubre ideas para tu próximo espacio
            </p>
        </div>
    </section>

    <!-- NOTA PLACEHOLDER -->
    <section class="bg-cream py-16">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="max-w-4xl mx-auto bg-white border-2 border-amber-600 p-10 md:p-12 text-center">
                <i class="fas fa-info-circle text-amber-600 text-4xl mb-6"></i>
                <h2 class="font-cormorant text-3xl md:text-4xl text-slate-900 font-semibold mb-6">
                    Blog Dinámico con WordPress
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Los proyectos mostrados a continuación se cargan dinámicamente desde <strong>WordPress REST API</strong>.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Cada nuevo post creado en el CMS aparecerá automáticamente en esta página.
                </p>
            </div>
        </div>
    </section>

    <!-- GRID POSTS DINÁMICO -->
    <section class="bg-white py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12">
            
            <?php
            // Configuración de la API
            $api_url = 'https://cms.carolsublimados.shop/wp-json/wp/v2/posts?_embed&per_page=9';
            
            // Hacer fetch a la API con manejo de errores
            $response = @file_get_contents($api_url);
            
            if ($response === false) {
                // Mensaje de error elegante si la API no responde
                ?>
                <div class="max-w-2xl mx-auto text-center py-16">
                    <i class="fas fa-exclamation-triangle text-amber-600 text-5xl mb-6"></i>
                    <h3 class="font-cormorant text-3xl text-slate-900 font-semibold mb-4">
                        No se pudo conectar con el servidor
                    </h3>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Estamos experimentando dificultades técnicas. Por favor, intenta nuevamente más tarde.
                    </p>
                </div>
                <?php
            } else {
                // Decodificar JSON
                $posts = json_decode($response);
                
                if (!empty($posts) && is_array($posts)) {
                    // Grid con loop por posts
                    echo '<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">';
                    
                    foreach ($posts as $post) {
                        // Extraer datos del post
                        $title = isset($post->title->rendered) ? $post->title->rendered : 'Sin título';
                        $excerpt = isset($post->excerpt->rendered) ? strip_tags($post->excerpt->rendered) : '';
                        $slug = isset($post->slug) ? $post->slug : '';
                        $date = isset($post->date) ? date('d M Y', strtotime($post->date)) : '';
                        
                        // Imagen destacada - Solo usar si existe en WordPress
                        $image = null; // Sin fallback
                        $image_alt = $title;
                        if (isset($post->_embedded->{'wp:featuredmedia'}[0]->source_url)) {
                            $image = $post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                            if (isset($post->_embedded->{'wp:featuredmedia'}[0]->alt_text)) {
                                $image_alt = $post->_embedded->{'wp:featuredmedia'}[0]->alt_text ?: $title;
                            }
                        }
                        
                        // Categoría principal
                        $category = 'General';
                        if (isset($post->_embedded->{'wp:term'}[0][0]->name)) {
                            $category = $post->_embedded->{'wp:term'}[0][0]->name;
                        }
                        
                        // URL del artículo
                        $post_url = 'blog/' . $slug;
                        ?>
                        
                        <article class="group">
                            <?php if ($image): ?>
                            <div class="overflow-hidden mb-6">
                                <img src="<?php echo esc_url($image); ?>" 
                                     alt="<?php echo htmlspecialchars($image_alt); ?>" 
                                     class="w-full h-96 object-cover group-hover:scale-105 transition-smooth"
                                     loading="lazy">
                            </div>
                            <?php endif; ?>
                            <span class="text-xs uppercase tracking-widest text-amber-600 font-semibold">
                                <?php echo htmlspecialchars($category); ?>
                            </span>
                            <h3 class="font-cormorant text-2xl md:text-3xl text-slate-900 font-semibold mt-3 mb-4 group-hover:text-amber-600 transition-smooth">
                                <?php echo $title; ?>
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                <?php echo $excerpt; ?>
                            </p>
                            <div class="flex items-center justify-between">
                                <a href="<?php echo $post_url; ?>" class="inline-flex items-center text-slate-900 font-medium hover:text-amber-600 transition-smooth">
                                    Ver proyecto <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                                <span class="text-sm text-gray-500"><?php echo $date; ?></span>
                            </div>
                        </article>
                        
                        <?php
                    }
                    
                    echo '</div>';
                    
                } else {
                    // Mensaje si no hay posts
                    ?>
                    <div class="max-w-2xl mx-auto text-center py-16">
                        <i class="fas fa-folder-open text-gray-400 text-5xl mb-6"></i>
                        <h3 class="font-cormorant text-3xl text-slate-900 font-semibold mb-4">
                            Aún no hay proyectos publicados
                        </h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Estamos trabajando en contenido increíble. Vuelve pronto para ver nuestros proyectos.
                        </p>
                    </div>
                    <?php
                }
            }
            
            // Helper function para escapar URLs
            function esc_url($url) {
                return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
            }
            ?>
            
        </div>
    </section>

<?php include 'footer.php'; ?>
