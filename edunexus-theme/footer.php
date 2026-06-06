    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h4><?php bloginfo('name'); ?></h4>
                    <p style="color: #94a3b8;">Educación que transforma tu potencial en resultados.</p>
                </div>
                <div class="footer-column">
                    <h4>Enlaces</h4>
                    <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
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
                    <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos reservados.
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- El script del menú se cargará con wp_enqueue_script desde functions.php -->
</body>
</html>