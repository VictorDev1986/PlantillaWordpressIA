<?php include 'header.php'; ?>

    <!-- HERO -->
    <section class="bg-slate-900 py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h1 class="font-cormorant text-5xl md:text-7xl text-white font-semibold">
                Conversemos
            </h1>
        </div>
    </section>

    <!-- CONTACTO SECTION -->
    <section class="bg-cream py-24 md:py-32">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 max-w-7xl mx-auto">
                
                <!-- INFO CONTACTO -->
                <div>
                    <h2 class="font-cormorant text-4xl md:text-5xl text-slate-900 font-semibold mb-8">
                        Comienza tu proyecto
                    </h2>
                    <p class="text-lg md:text-xl text-gray-600 leading-relaxed mb-12">
                        Cada proyecto comienza con una conversación. Cuéntanos sobre tu espacio, tus necesidades y tu visión. Nos pondremos en contacto contigo en menos de 48 horas para agendar una consulta inicial sin compromiso.
                    </p>

                    <div class="space-y-8">
                        <!-- Email -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-14 h-14 bg-amber-600 rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-envelope text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 text-lg mb-2">Email</h3>
                                <a href="mailto:hola@estudionomada.com" class="text-gray-600 hover:text-amber-600 transition-smooth text-lg">
                                    hola@estudionomada.com
                                </a>
                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-14 h-14 bg-amber-600 rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-phone text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 text-lg mb-2">Teléfono</h3>
                                <p class="text-gray-600 text-lg">+34 912 345 678</p>
                            </div>
                        </div>

                        <!-- Ubicación -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-14 h-14 bg-amber-600 rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-map-marker-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 text-lg mb-2">Estudio</h3>
                                <p class="text-gray-600 text-lg">Calle Serrano 45, 3º<br>28001 Madrid, España</p>
                            </div>
                        </div>

                        <!-- Horario -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-14 h-14 bg-amber-600 rounded-full flex items-center justify-center mr-6">
                                <i class="fas fa-clock text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-900 text-lg mb-2">Horario</h3>
                                <p class="text-gray-600 text-lg">Lunes - Viernes: 9:00 - 19:00<br>Sábados: 10:00 - 14:00 (con cita)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORMULARIO -->
                <div class="bg-white p-10 lg:p-12 shadow-sm">
                    <form action="#" method="POST" class="space-y-6">
                        
                        <!-- Nombre -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-slate-900 mb-2">
                                Nombre completo *
                            </label>
                            <input type="text" 
                                   id="nombre" 
                                   name="nombre" 
                                   required
                                   class="w-full px-5 py-4 border-2 border-gray-200 text-gray-700 transition-smooth"
                                   placeholder="Juan Pérez">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-900 mb-2">
                                Email *
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   required
                                   class="w-full px-5 py-4 border-2 border-gray-200 text-gray-700 transition-smooth"
                                   placeholder="juan@ejemplo.com">
                        </div>

                        <!-- Teléfono -->
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-slate-900 mb-2">
                                Teléfono
                            </label>
                            <input type="tel" 
                                   id="telefono" 
                                   name="telefono"
                                   class="w-full px-5 py-4 border-2 border-gray-200 text-gray-700 transition-smooth"
                                   placeholder="+34 600 123 456">
                        </div>

                        <!-- Tipo de Proyecto -->
                        <div>
                            <label for="tipo_proyecto" class="block text-sm font-medium text-slate-900 mb-2">
                                Tipo de proyecto *
                            </label>
                            <select id="tipo_proyecto" 
                                    name="tipo_proyecto" 
                                    required
                                    class="w-full px-5 py-4 border-2 border-gray-200 text-gray-700 transition-smooth">
                                <option value="">Selecciona una opción</option>
                                <option value="residencial">Diseño Residencial</option>
                                <option value="comercial">Espacio Comercial</option>
                                <option value="consultoria">Consultoría</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>

                        <!-- Presupuesto -->
                        <div>
                            <label for="presupuesto" class="block text-sm font-medium text-slate-900 mb-2">
                                Presupuesto estimado
                            </label>
                            <select id="presupuesto" 
                                    name="presupuesto"
                                    class="w-full px-5 py-4 border-2 border-gray-200 text-gray-700 transition-smooth">
                                <option value="">Selecciona un rango</option>
                                <option value="5000-15000">5.000€ - 15.000€</option>
                                <option value="15000-30000">15.000€ - 30.000€</option>
                                <option value="30000-50000">30.000€ - 50.000€</option>
                                <option value="50000+">Más de 50.000€</option>
                                <option value="por_definir">Por definir</option>
                            </select>
                        </div>

                        <!-- Mensaje -->
                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-slate-900 mb-2">
                                Cuéntanos sobre tu proyecto *
                            </label>
                            <textarea id="mensaje" 
                                      name="mensaje" 
                                      rows="6" 
                                      required
                                      class="w-full px-5 py-4 border-2 border-gray-200 text-gray-700 transition-smooth resize-none"
                                      placeholder="Describe tu espacio, tus necesidades y tu visión para el proyecto..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full bg-slate-900 text-white px-8 py-5 text-lg font-medium hover:bg-slate-800 transition-smooth">
                            Enviar Consulta
                        </button>

                        <p class="text-sm text-gray-500 text-center mt-4">
                            * Campos obligatorios
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
