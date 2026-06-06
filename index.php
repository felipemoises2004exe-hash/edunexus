<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduNexus - Plataforma Educativa de Cursos Online | Desarrollo Web, Data Science, Diseño UX/UI</title>
    <meta name="description" content="EduNexus es una plataforma educativa con cursos prácticos en desarrollo web full stack, data science, diseño UX/UI y marketing digital. Aprende con expertos y certifica tus habilidades.">
    <meta name="keywords" content="cursos online, educación, desarrollo web, data science, diseño ux ui, marketing digital, plataforma educativa">
    <meta http-equiv="Cache-Control" content="max-age=86400, public">
    <!-- Datos estructurados Schema.org -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "EduNexus",
            "description": "Plataforma de educación online con cursos en tecnología y diseño.",
            "url": "http://localhost/edunexus",
            "logo": "http://localhost/edunexus/wp-content/themes/edunexus-theme/screenshot.png",
            "sameAs": [
                "https://www.facebook.com/edunexus",
                "https://www.instagram.com/edunexus",
                "https://www.linkedin.com/school/edunexus"
            ]
        }
    </script>
    <!-- Precarga de fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos minificados manteniendo legibilidad */
        *{margin:0;padding:0;box-sizing:border-box}body{font-family:'Inter',sans-serif;background-color:#fff;color:#1e293b;line-height:1.6;scroll-behavior:smooth}.container{max-width:1200px;margin:0 auto;padding:0 1.5rem}.navbar{background-color:#fff;box-shadow:0 2px 10px rgba(0,0,0,0.05);position:sticky;top:0;z-index:1000;padding:1rem 0}.navbar .container{display:flex;align-items:center;justify-content:space-between}.logo{font-size:1.8rem;font-weight:700;color:#2563eb;text-decoration:none;display:flex;align-items:center;gap:0.5rem}.logo i{font-size:2rem}.nav-menu{display:flex;align-items:center;gap:2rem;list-style:none}.nav-menu a{text-decoration:none;color:#334155;font-weight:500;transition:color 0.3s;font-size:1rem;padding:0.5rem 0;border-bottom:2px solid transparent}.nav-menu a:hover,.nav-menu a.active{border-bottom-color:#2563eb;color:#2563eb}.btn-primary{background-color:#2563eb;color:#fff!important;padding:0.7rem 1.8rem;border-radius:30px;text-decoration:none;font-weight:600;transition:background-color 0.3s;display:inline-block;border:none;cursor:pointer}.btn-primary:hover{background-color:#1d4ed8}.btn-outline{border:2px solid #2563eb;color:#2563eb;padding:0.7rem 1.8rem;border-radius:30px;text-decoration:none;font-weight:600;transition:all 0.3s}.btn-outline:hover{background-color:#2563eb;color:#fff}.hamburger{display:none;background:none;border:none;font-size:1.8rem;cursor:pointer;color:#1e293b;padding:0.5rem}.hero{padding:4rem 0;background:linear-gradient(135deg,#f0f9ff 0%,#e0f2fe 100%)}.hero .container{display:grid;grid-template-columns:1fr 1fr;gap:3rem;align-items:center}.hero-content h1{font-size:3rem;font-weight:700;line-height:1.2;color:#0f172a;margin-bottom:1.5rem}.hero-content h1 span{color:#2563eb}.hero-content p{font-size:1.2rem;color:#475569;margin-bottom:2rem}.hero-image{display:flex;justify-content:center}.hero-image img{max-width:100%;height:auto;border-radius:20px;box-shadow:0 25px 50px -12px rgba(0,0,0,0.15);aspect-ratio:16/10;object-fit:cover}.hero-buttons{display:flex;gap:1rem;flex-wrap:wrap}section{padding:5rem 0}.section-title{text-align:center;margin-bottom:3rem}.section-title h2{font-size:2.2rem;font-weight:700;color:#0f172a;margin-bottom:0.5rem}.section-title p{font-size:1.1rem;color:#64748b;max-width:600px;margin:0 auto}.courses-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:2rem}.course-card{background:#fff;border-radius:20px;padding:2rem;box-shadow:0 10px 30px rgba(0,0,0,0.05);transition:transform 0.3s,box-shadow 0.3s;display:flex;flex-direction:column;align-items:flex-start}.course-card:hover{transform:translateY(-8px);box-shadow:0 20px 40px rgba(0,0,0,0.1)}.course-icon{font-size:2.5rem;color:#2563eb;margin-bottom:1.5rem;background:#eff6ff;padding:1rem;border-radius:16px}.course-card h3{font-size:1.4rem;margin-bottom:0.8rem}.course-card p{color:#475569;margin-bottom:1.5rem;flex-grow:1}.course-card a{color:#2563eb;font-weight:600;text-decoration:none;display:flex;align-items:center;gap:0.3rem}.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}.about-image img{width:100%;border-radius:20px;aspect-ratio:4/3;object-fit:cover}.about-text h2{font-size:2rem;margin-bottom:1.5rem}.about-text p{color:#475569;margin-bottom:1rem}.stats{display:flex;gap:2rem;margin-top:2rem}.stat-item{text-align:center}.stat-number{font-size:2rem;font-weight:700;color:#2563eb}.testimonials{background-color:#f8fafc}.testimonial-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:2rem}.testimonial-card{background:#fff;padding:2rem;border-radius:16px;box-shadow:0 5px 15px rgba(0,0,0,0.03)}.testimonial-text{font-style:italic;margin-bottom:1.5rem;color:#334155}.testimonial-author{display:flex;align-items:center;gap:1rem}.testimonial-author img{width:50px;height:50px;border-radius:50%;object-fit:cover;background:#cbd5e1}.author-name{font-weight:600}.contact-form{max-width:600px;margin:0 auto;display:flex;flex-direction:column;gap:1.2rem}.form-group{display:flex;flex-direction:column;gap:0.4rem}.form-group label{font-weight:500;color:#334155;font-size:0.95rem}.contact-form input,.contact-form textarea{padding:0.9rem 1.2rem;border:1px solid #e2e8f0;border-radius:12px;font-family:inherit;font-size:1rem;transition:border-color 0.3s}.contact-form input:focus,.contact-form textarea:focus{border-color:#2563eb;outline:none;box-shadow:0 0 0 3px rgba(37,99,235,0.2)}.contact-form textarea{resize:vertical;min-height:120px}.contact-form button{align-self:flex-start;border:none;cursor:pointer}.footer{background-color:#0f172a;color:#cbd5e1;padding:3rem 0 1.5rem}.footer-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:2rem;margin-bottom:2rem}.footer-column h4{color:#fff;margin-bottom:1.2rem;font-size:1.1rem}.footer-column a{display:block;color:#94a3b8;text-decoration:none;margin-bottom:0.6rem;transition:color 0.3s}.footer-column a:hover{color:#fff}.footer-bottom{text-align:center;border-top:1px solid #334155;padding-top:1.5rem;font-size:0.9rem}.back-to-top{position:fixed;bottom:30px;right:30px;width:50px;height:50px;background:#2563eb;color:#fff;border:none;border-radius:50%;font-size:1.5rem;cursor:pointer;display:none;align-items:center;justify-content:center;box-shadow:0 4px 15px rgba(0,0,0,0.2);transition:background 0.3s,transform 0.3s;z-index:999}.back-to-top:hover{background:#1d4ed8;transform:scale(1.1)}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}@media(max-width:768px){.hamburger{display:block}.nav-menu{position:fixed;left:-100%;top:70px;flex-direction:column;background-color:#fff;width:100%;padding:2rem;box-shadow:0 10px 20px rgba(0,0,0,0.1);transition:0.3s;gap:1.5rem}.nav-menu.active{left:0}.hero .container{grid-template-columns:1fr;text-align:center}.hero-buttons{justify-content:center}.about-grid{grid-template-columns:1fr}.about-image{order:-1}.hero-content h1{font-size:2.3rem}}
    </style>
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar" role="navigation" aria-label="Menú principal">
        <div class="container">
            <a href="#" class="logo" aria-label="EduNexus - Ir a inicio">
                <i class="fas fa-graduation-cap" aria-hidden="true"></i> EduNexus
            </a>
            <button class="hamburger" id="hamburger" aria-label="Abrir menú" aria-expanded="false" aria-controls="navMenu">
                <i class="fas fa-bars" aria-hidden="true"></i>
            </button>
            <ul class="nav-menu" id="navMenu" role="menubar">
                <li role="none"><a href="#inicio" role="menuitem" class="active">Inicio</a></li>
                <li role="none"><a href="#cursos" role="menuitem">Cursos</a></li>
                <li role="none"><a href="#nosotros" role="menuitem">Nosotros</a></li>
                <li role="none"><a href="#testimonios" role="menuitem">Testimonios</a></li>
                <li role="none"><a href="#contacto" role="menuitem">Contacto</a></li>
                <li role="none"><a href="#" class="btn-primary" role="menuitem">Ingresar</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero -->
    <section id="inicio" class="hero">
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
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                     alt="Estudiantes colaborando en un proyecto educativo" 
                     loading="lazy" 
                     width="735" 
                     height="490">
            </div>
        </div>
    </section>

    <!-- Cursos -->
    <section id="cursos" aria-labelledby="cursos-heading">
        <div class="container">
            <div class="section-title">
                <h2 id="cursos-heading">Cursos destacados</h2>
                <p>Selecciona entre nuestra variedad de programas actualizados</p>
            </div>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-icon" aria-hidden="true"><i class="fas fa-code"></i></div>
                    <h3>Desarrollo Web Full Stack</h3>
                    <p>HTML, CSS, JavaScript, React, Node.js y bases de datos. Conviértete en desarrollador completo.</p>
                    <a href="#" aria-label="Ver más sobre Desarrollo Web Full Stack">Ver más <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="course-card">
                    <div class="course-icon" aria-hidden="true"><i class="fas fa-chart-line"></i></div>
                    <h3>Data Science & IA</h3>
                    <p>Python, Machine Learning, visualización de datos y fundamentos de inteligencia artificial.</p>
                    <a href="#" aria-label="Ver más sobre Data Science & IA">Ver más <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="course-card">
                    <div class="course-icon" aria-hidden="true"><i class="fas fa-paint-brush"></i></div>
                    <h3>Diseño UX/UI</h3>
                    <p>Principios de diseño, prototipado, herramientas Figma y research de usuarios.</p>
                    <a href="#" aria-label="Ver más sobre Diseño UX/UI">Ver más <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="course-card">
                    <div class="course-icon" aria-hidden="true"><i class="fas fa-bullhorn"></i></div>
                    <h3>Marketing Digital</h3>
                    <p>SEO, SEM, redes sociales, analítica web y estrategias de contenido.</p>
                    <a href="#" aria-label="Ver más sobre Marketing Digital">Ver más <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre nosotros -->
    <section id="nosotros" aria-labelledby="nosotros-heading">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Instructor guiando a un estudiante en un entorno moderno" 
                         loading="lazy" 
                         width="735" 
                         height="490">
                </div>
                <div class="about-text">
                    <h2 id="nosotros-heading">Transformamos vidas a través del conocimiento</h2>
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
    <section id="testimonios" class="testimonials" aria-labelledby="testimonios-heading">
        <div class="container">
            <div class="section-title">
                <h2 id="testimonios-heading">Lo que dicen nuestros estudiantes</h2>
                <p>Experiencias reales de personas que ya están creciendo</p>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"El curso de Desarrollo Web me dio las bases para cambiar de carrera. Los proyectos prácticos fueron clave."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="María García" loading="lazy" width="50" height="50">
                        <div>
                            <div class="author-name">María García</div>
                            <small>Desarrolladora Frontend</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Excelente plataforma, los instructores siempre están disponibles para resolver dudas. Muy recomendada."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Carlos López" loading="lazy" width="50" height="50">
                        <div>
                            <div class="author-name">Carlos López</div>
                            <small>Analista de Datos</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Gracias a EduNexus conseguí mi primer trabajo en tecnología. El enfoque práctico marca la diferencia."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Ana Martínez" loading="lazy" width="50" height="50">
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
            <form class="contact-form" action="#" method="post" novalidate>
                <div class="form-group">
                    <label for="nombre">Nombre completo *</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required aria-required="true">
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico *</label>
                    <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" required aria-required="true">
                </div>
                <div class="form-group">
                    <label for="mensaje">Tu mensaje *</label>
                    <textarea id="mensaje" name="mensaje" placeholder="Escribe tu consulta aquí..." required aria-required="true"></textarea>
                </div>
                <button type="submit" class="btn-primary">Enviar mensaje</button>
            </form>
        </div>
    </section>

    <!-- Botón volver arriba -->
    <button class="back-to-top" id="backToTop" aria-label="Volver al inicio" title="Volver arriba">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>

    <!-- Footer -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h4>EduNexus</h4>
                    <p style="color:#94a3b8;">Educación que transforma tu potencial en resultados.</p>
                </div>
                <div class="footer-column">
                    <h4>Enlaces</h4>
                    <a href="#inicio">Inicio</a>
                    <a href="#cursos">Cursos</a>
                    <a href="#nosotros">Nosotros</a>
                </div>
                <div class="footer-column">
                    <h4>Soporte</h4>
                    <a href="#">Centro de ayuda</a>
                    <a href="#">Política de privacidad</a>
                    <a href="#">Términos</a>
                </div>
                <div class="footer-column">
                    <h4>Síguenos</h4>
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin" aria-hidden="true"></i> LinkedIn</a>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2026 EduNexus. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <script>
        // Menú hamburguesa accesible
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        function toggleMenu(force) {
            const expanded = hamburger.getAttribute('aria-expanded') === 'true' || false;
            const newState = typeof force === 'boolean' ? force : !expanded;
            hamburger.setAttribute('aria-expanded', newState);
            navMenu.classList.toggle('active', newState);
            if (newState) {
                // Enfocar primer enlace del menú
                const firstLink = navMenu.querySelector('a');
                if (firstLink) firstLink.focus();
            }
        }

        hamburger.addEventListener('click', () => toggleMenu());

        // Cerrar menú al hacer clic en un enlace
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) toggleMenu(false);
            });
        });

        // Cerrar menú con tecla Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                toggleMenu(false);
                hamburger.focus();
            }
        });

        // Scroll suave y detección de sección activa (heurística de estado)
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-menu a:not(.btn-primary)');

        function setActiveLink() {
            let index = sections.length;
            while (--index && window.scrollY + 150 < sections[index].offsetTop) {}
            navLinks.forEach((link) => link.classList.remove('active'));
            if (navLinks[index]) navLinks[index].classList.add('active');
        }

        window.addEventListener('scroll', setActiveLink);
        window.addEventListener('load', setActiveLink);

        // Botón volver arriba
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            backToTop.style.display = window.scrollY > 500 ? 'flex' : 'none';
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            // Enfocar el inicio de la página
            document.querySelector('#inicio')?.focus();
        });

        // Añadir tabindex a secciones para foco en navegación
        sections.forEach(section => section.setAttribute('tabindex', '-1'));
    </script>
</body>
</html>