<?php include 'header.php'; ?>

    <!-- HERO -->
    <section class="relative h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1920');">
        <div class="absolute inset-0 bg-slate-900 bg-opacity-60"></div>
        <div class="relative z-10 text-center text-white px-8 py-12 md:px-6 md:py-0 max-w-4xl mx-auto">
            <p class="text-sm md:text-base uppercase tracking-widest mb-6 text-amber-600 font-medium">Diseño consciente y atemporal</p>
            <h1 class="font-cormorant text-5xl md:text-7xl lg:text-8xl font-semibold mb-8 leading-tight">
                Transformamos espacios en experiencias únicas
            </h1>
            <p class="text-lg md:text-xl mb-12 max-w-2xl mx-auto leading-relaxed font-light">
                Creamos interiores que reflejan tu esencia, combinando funcionalidad y estética con un enfoque personalizado y sostenible
            </p>
            <a href="contacto.php" class="inline-block bg-amber-600 text-white px-12 py-5 text-lg font-medium hover:bg-amber-700 transition-smooth">
                Iniciar Proyecto
            </a>
        </div>
    </section>

    <!-- FILOSOFÍA -->
    <section class="bg-cream py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12 max-w-4xl text-center">
            <h2 class="font-cormorant text-4xl md:text-6xl text-slate-900 font-semibold mb-12">
                Nuestra Filosofía
            </h2>
            <div class="space-y-8 text-lg md:text-xl leading-relaxed">
                <p>
                    En Estudio Nómada creemos que cada espacio cuenta una historia. Nuestro enfoque va más allá de la estética: buscamos entender tu estilo de vida, tus necesidades y tus aspiraciones para crear ambientes que sean verdaderos reflejos de tu identidad.
                </p>
                <p>
                    Trabajamos con materiales nobles, paletas atemporales y un profundo respeto por la luz natural. Cada proyecto es una colaboración íntima entre tu visión y nuestra experiencia, donde el minimalismo encuentra la calidez y lo funcional se vuelve bello.
                </p>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section class="bg-white py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="font-cormorant text-4xl md:text-6xl text-slate-900 font-semibold text-center mb-20">
                Servicios
            </h2>
            <div class="grid md:grid-cols-3 gap-12 lg:gap-16">
                <!-- Servicio 1 -->
                <div class="group">
                    <div class="overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1600210492493-0946911123ea?w=800" 
                             alt="Diseño de interiores residenciales modernos" 
                             class="w-full h-96 object-cover"
                             loading="lazy">
                    </div>
                    <span class="font-cormorant text-6xl text-amber-600 opacity-30 font-bold">01</span>
                    <h3 class="font-cormorant text-3xl text-slate-900 font-semibold mt-4 mb-4">
                        Diseño Residencial
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Creamos hogares que inspiran. Desde conceptualización hasta ejecución, diseñamos espacios habitables que equilibran belleza, funcionalidad y confort personal.
                    </p>
                </div>

                <!-- Servicio 2 -->
                <div class="group">
                    <div class="overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800" 
                             alt="Diseño de espacios comerciales y oficinas" 
                             class="w-full h-96 object-cover"
                             loading="lazy">
                    </div>
                    <span class="font-cormorant text-6xl text-amber-600 opacity-30 font-bold">02</span>
                    <h3 class="font-cormorant text-3xl text-slate-900 font-semibold mt-4 mb-4">
                        Espacios Comerciales
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Diseñamos ambientes comerciales que potencian tu marca. Cafés, oficinas, showrooms que conectan con tu audiencia y optimizan la experiencia del usuario.
                    </p>
                </div>

                <!-- Servicio 3 -->
                <div class="group">
                    <div class="overflow-hidden mb-8">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800" 
                             alt="Consultoría de diseño de interiores" 
                             class="w-full h-96 object-cover"
                             loading="lazy">
                    </div>
                    <span class="font-cormorant text-6xl text-amber-600 opacity-30 font-bold">03</span>
                    <h3 class="font-cormorant text-3xl text-slate-900 font-semibold mt-4 mb-4">
                        Consultoría
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Orientación experta para tus proyectos. Asesoramiento en selección de materiales, paletas de color, distribución espacial y optimización de ambientes existentes.
                    </p>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="servicios.php" class="inline-block border-2 border-slate-900 text-slate-900 px-10 py-4 text-lg font-medium hover:bg-slate-900 hover:text-white transition-smooth">
                    Ver Todos los Servicios
                </a>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO PREVIEW -->
    <section class="bg-gray-50 py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-20">
                <h2 class="font-cormorant text-4xl md:text-6xl text-slate-900 font-semibold mb-6">
                    Proyectos Recientes
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Una selección de nuestros trabajos más representativos
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                <div class="overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1615529182904-14819c35db37?w=800" 
                         alt="Proyecto de diseño de interiores minimalista" 
                         class="w-full h-80 object-cover transform group-hover:scale-105 transition-smooth"
                         loading="lazy">
                </div>
                <div class="overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800" 
                         alt="Interior escandinavo con luz natural" 
                         class="w-full h-80 object-cover transform group-hover:scale-105 transition-smooth"
                         loading="lazy">
                </div>
                <div class="overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=800" 
                         alt="Sala de estar moderna y elegante" 
                         class="w-full h-80 object-cover transform group-hover:scale-105 transition-smooth"
                         loading="lazy">
                </div>
                <div class="overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=800" 
                         alt="Dormitorio principal diseño contemporáneo" 
                         class="w-full h-80 object-cover transform group-hover:scale-105 transition-smooth"
                         loading="lazy">
                </div>
                <div class="overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?w=800" 
                         alt="Cocina minimalista con acabados premium" 
                         class="w-full h-80 object-cover transform group-hover:scale-105 transition-smooth"
                         loading="lazy">
                </div>
                <div class="overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800" 
                         alt="Espacio de trabajo contemporáneo" 
                         class="w-full h-80 object-cover transform group-hover:scale-105 transition-smooth"
                         loading="lazy">
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="blog.php" class="inline-block border-2 border-slate-900 text-slate-900 px-10 py-4 text-lg font-medium hover:bg-slate-900 hover:text-white transition-smooth">
                    Ver Todos los Proyectos
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-slate-900 py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12 text-center max-w-4xl">
            <h2 class="font-cormorant text-4xl md:text-6xl text-white font-semibold mb-8">
                ¿Listo para transformar tu espacio?
            </h2>
            <p class="text-xl text-gray-300 mb-12 leading-relaxed">
                Comencemos una conversación sobre tu proyecto. Agenda una consulta sin compromiso y descubre cómo podemos hacer realidad tu visión.
            </p>
            <a href="contacto.php" class="inline-block bg-amber-600 text-white px-16 py-6 text-lg font-medium hover:bg-amber-700 transition-smooth">
                Agendar Consulta
            </a>
        </div>
    </section>

<?php include 'footer.php'; ?>
