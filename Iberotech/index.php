
<?php include 'includes/header.php'; ?>

<main>
    <section class="hero">
        <div class="container">
            <h2>Iberotech</h2>
            <p>Alquiler de equipos tecnológicos.</p>
        </div>
    </section>

    <section class="intro-text">
        <div class="container">
            <p>En Iberotech, nos comprometemos a ofrecer los mejores servicios tecnológicos, adaptados a tus necesidades, ¡y al mejor precio del mercado! Descubre cómo nuestras soluciones pueden impulsar tu negocio con calidad y eficiencia.</p>
            <img src="images/imagen-principal.png" id="principal">
        </div>
    </section>

    <!-- <section class="services-preview" id="servicios">
        <div class="container">
            <h3>Nuestros Servicios Destacados</h3>
            <div class="service-items-container">
                <?php
                // Simulación de datos de servicios (más adelante vendrán de una base de datos)
                $servicios = [
                    [
                        'id' => 1,
                        'nombre' => 'Laptop Pro X1',
                        'descripcion' => 'Potente laptop para profesionales y creativos.',
                        'imagen' => 'images/laptop_pro_x1.jpg', // Debes tener esta imagen
                        'precio_dia' => '25€'
                    ],
                    [
                        'id' => 2,
                        'nombre' => 'Proyector Full HD',
                        'descripcion' => 'Proyector ideal para presentaciones y eventos.',
                        'imagen' => 'images/proyector_hd.jpg', // Debes tener esta imagen
                        'precio_dia' => '30€'
                    ],
                    [
                        'id' => 3,
                        'nombre' => 'Set de Audio Profesional',
                        'descripcion' => 'Equipo de sonido completo para eventos.',
                        'imagen' => 'images/audio_set.jpg', // Debes tener esta imagen
                        'precio_dia' => '50€'
                    ]
                ];

                if (!empty($servicios)) {
                    foreach ($servicios as $servicio) {
                        echo '<div class="service-item">';
                        echo '<img src="' . htmlspecialchars($servicio['imagen']) . '" alt="' . htmlspecialchars($servicio['nombre']) . '">';
                        echo '<h4>' . htmlspecialchars($servicio['nombre']) . '</h4>';
                        echo '<p>' . htmlspecialchars($servicio['descripcion']) . '</p>';
                        // Podrías añadir el precio aquí también
                        // echo '<p><strong>Precio/día: ' . htmlspecialchars($servicio['precio_dia']) . '</strong></p>';
                        echo '<a href="servicio_detalle.php?id=' . $servicio['id'] . '" class="btn-details">Ver detalles</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay servicios destacados disponibles en este momento.</p>';
                }
                ?>
            </div>
        </div>
    </section> -->
</main>

<?php include 'includes/footer.php'; ?>