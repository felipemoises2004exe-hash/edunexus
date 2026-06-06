<?php
/*
Template Name: Página de Inicio
*/
get_header(); ?>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Impulsa tu <span>futuro</span> con educación de calidad</h1>
                <p>Descubre cursos diseñados por expertos, aprende a tu ritmo y alcanza tus metas profesionales.</p>
                <div class="hero-buttons">
                    <a href="#cursos" class="btn-primary">Explorar cursos</a>
                    <a href="#nosotros" class="btn-outline">Conócenos</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Estudiantes aprendiendo">
            </div>
        </div>
    </section>

    <!-- Cursos -->
    <section id="cursos">
        <div class="container">
            <div class="section-title">
                <h2>Cursos destacados</h2>
                <p>Selecciona entre nuestra variedad de programas actualizados</p>
            </div>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-icon"><i class="fas fa-code"></i></div>
                    <h3>Desarrollo Web Full Stack</h3>
                    <p>HTML, CSS, JavaScript, React, Node.js y bases de datos. Conviértete en desarrollador completo.</p>
                    <a href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="course-card">
                    <div class="course-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Data Science & IA</h3>
                    <p>Python, Machine Learning, visualización de datos y fundamentos de inteligencia artificial.</p>
                    <a href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="course-card">
                    <div class="course-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3>Diseño UX/UI</h3>
                    <p>Principios de diseño, prototipado, herramientas Figma y research de usuarios.</p>
                    <a href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="course-card">
                    <div class="course-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3>Marketing Digital</h3>
                    <p>SEO, SEM, redes sociales, analítica web y estrategias de contenido.</p>
                    <a href="#">Ver más <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre nosotros -->
    <section id="nosotros">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Equipo educativo">
                </div>
                <div class="about-text">
                    <h2>Transformamos vidas a través del conocimiento</h2>
                    <p>En EduNexus creemos que la educación debe ser accesible, práctica y relevante. Nuestro equipo de instructores cuenta con experiencia real en la industria.</p>
                    <p>Más de 10,000 estudiantes han confiado en nosotros para impulsar sus carreras.</p>
                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">+50</div>
                            <div>Cursos activos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12k</div>
                            <div>Estudiantes</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">4.9</div>
                            <div>Calificación</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Lo que dicen nuestros estudiantes</h2>
                <p>Experiencias reales de personas que ya están creciendo</p>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"El curso de Desarrollo Web me dio las bases para cambiar de carrera. Los proyectos prácticos fueron clave."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="María García">
                        <div>
                            <div class="author-name">María García</div>
                            <small>Desarrolladora Frontend</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Excelente plataforma, los instructores siempre están disponibles para resolver dudas. Muy recomendada."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Carlos López">
                        <div>
                            <div class="author-name">Carlos López</div>
                            <small>Analista de Datos</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Gracias a EduNexus conseguí mi primer trabajo en tecnología. El enfoque práctico marca la diferencia."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Ana Martínez">
                        <div>
                            <div class="author-name">Ana Martínez</div>
                            <small>Diseñadora UX</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
<section id="contacto" aria-labelledby="contacto-heading">
    <div class="container">
        <div class="section-title">
            <h2 id="contacto-heading">Contáctanos</h2>
            <p>¿Tienes dudas? Escríbenos y te responderemos pronto</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="47817f4" title="Formulario de contacto"]'); ?>
    </div>
</section>

<?php get_footer(); ?>