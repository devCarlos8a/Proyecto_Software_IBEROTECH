<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Iberotech</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .nav-icon {
            font-size: 24px;
            color: #4a5568;
        }

        .nav-text {
            font-size: 0.75rem;
            color: #4a5568;
        }

        .btn-primary {
            background-color: #4a5568;
            color: white;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        .btn-primary:hover {
            background-color: #2d3748;
        }

        .btn-secondary {
            background-color: #e2e8f0;
            color: #4a5568;
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        .btn-secondary:hover {
            background-color: #cbd5e0;
        }

        .product-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .pagination-item {
            color: #4a5568;
            padding: 0.5rem 0.75rem;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        .pagination-item.active {
            background-color: #4a5568;
            color: white;
        }

        .pagination-item:hover:not(.active) {
            background-color: #e2e8f0;
        }
    </style>
</head>

<body>
    <main class="container mx-auto px-4 py-8">
        <section class="mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-2">Bienvenido a Iberotech</h2>
            <p class="text-lg text-gray-600">Alquila tu equipo tecnológico al mejor precio</p>
        </section>
        <section>
            <h3 class="text-3xl font-semibold text-gray-800 mb-6">Catálogo</h3>
            <?php
            $productos = [
                [
                    'nombre' => 'Smartphone',
                    'descripcion' => 'Telefonos de ultima tecnología.',
                    'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAwCqcJ4BrnRpYAAncfzHujNOxWIQh3bAxIvrVJqvZfqI_HXKm21dowlhmQlucHuVzcPAyHwnvqD1XXYa6Ag-w1pCfI9NQ72zxaH1uKL97c7Ao8BSblcxypcYC2EmlNzVVNba9N3cabRhXMwK8aRC8QmzLewnI9-sDbg4FuOjZWR9sNfAS-swsmJEjDv1-cBh4Oe6hDLPPsjHvJ_C8iKWbwGKNlAG3jOxLnTo92gUqcK5gDfLkqltK6yZpf5-2MvN7z2zOgsbw5n21F',
                    'alt' => 'Smartphone rosa'
                ],
                [
                    'nombre' => 'Tablets',
                    'descripcion' => 'Tablets competitivas y multipropósitos ideales para toda ocasión.',
                    'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBdzBeNK2W6C0lN75VrEMotzB787NRTGkHNqU3UqEURJjT0SMWElTEZD5qCF127myyzZ2XrnVemjfRdgHhEsjlbpBytQax5gt-Z8d25IGxH_-qawu96KN7OTJRDnD0ElKOP3OREfEfB3c1YvCKQEysmp289VoIfToYFMmHR2sILtC5YHHZggu0b5VfGIiX--m0ezJ-VuBzo3fw-VrmCCNCaGHJnM_qyMr_speD8BIITJZjAsdy92UrCvHon3p4vrb95oL7fMMzm4RH-',
                    'alt' => 'Tablet con pantalla mostrando 100%'
                ],
                [
                    'nombre' => 'Laptop',
                    'descripcion' => 'Equipos portatiles con excelente calidad y rendimiento.',
                    'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBE6JbL-m5Q1SpWU7Ts0zsLGQDJG-h2U19Uxt813GCvOPSd9XYcrkSRg0HwtHy7v5KixvuBMuXW2p9T3fACxx71CavJcNF6_6_u9wTlSq9EFpwHSGZXYvIkBalPZmLiM_nrCqUCs1JOvfexKNBMM87ttfpuBQvQ_E2yTm4GdoOA_ah-QwJI9qoJSsW4iNoKMg3k8LFnNh7HEQN38qZ4rXzVgotNhlp40dkhBxqoh6N5hX-3WF6SWCH7lyL4Zy3k_s3xfKO19Wfk6pur',
                    'alt' => 'Laptop gamer con teclado iluminado'
                ],
                [
                    'nombre' => 'TV',
                    'descripcion' => 'Televisores smart Tv.',
                    'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBnSYs4vdNXSHwc-Zk982NkMsyrk4_HsKAVL0FcNz_MEjZfzGDO5SEkIpc2yEeNK9jVkIzWj7kshWUnxEHcHsYP1mwU2m1VW5PDyWgixdBJgP-hzogb8VOTgfFwx95n0n6ruwMBJD2Fvl6t-3SFLjL6s_ngwzh3Va13wTVi60r4z6AQZJFSzbSZbRl3LGHAYgwranMd-zrv_RcQodbTGo2ni98OcgcGC7L6cxjn5DwdNu17spvgeNltjb0eSRNp8zyouPCJxdlmXKHq',
                    'alt' => 'Smart TV mostrando paisaje colorido'
                ],
                [
                    'nombre' => 'Video beam',
                    'descripcion' => 'Presentaciones de alta calidad.',
                    'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDcvSG6XAuf1Vcn-M8QSGTDxA_sYhzfgR0dSqFPI88d4_rxdClYTuwtuvb2vPUhxAd0M2FJAnHMkeOtCZ67ZFwZRDYDG7Fnsgpp_TtyUOb9ezQvJv6NbGzMUzTGvZ6plOubH-rZyeOQ9IOY_gXgozyDPxC8lHyOwhHG2HET7YHvFypJUvQ2NDIM5wxSHCBNbBhECcNgbNsC3EQxaadSxzUd6Dhd6pL5YSLfcJD07eJu88R3RO6tYb7WOH3jq9FQc3QT4aHLCF500W5I',
                    'alt' => 'Proyector Epson negro'
                ],
                [
                    'nombre' => 'Impresoras',
                    'descripcion' => 'Impresoras de alto rendimiento y poco consumo.',
                    'imagen' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDaEKzc3HxUYxta1uobe_5BRdBCFxHV_ao21ksPlp5eOoX5oWLlReYTA10RiySo5wp8M6lLKl1qc_uTeqQPAxmSnV0tkqmCNXRmy-M6xfiAq7qU28QuDjmiZ2E8eMvNcy4X4sD02dnppi86GYO-xIzL__ZLwQlHJgbDNntU8kuNm9HfUkGhjBKCSc49Z0is43lgjhO7e5LjtvrLsOhS742oZVBdT_6Nufrsb9Rd8kNerhiRAyIEoCMXgS8FgTLHOD_O7fb0QE-fGiu0',
                    'alt' => 'Impresora Epson negra'
                ]
            ];
            ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($productos as $producto): ?>
                    <a 
                        href="ordenar.php?nombre=<?php echo urlencode($producto['nombre']); ?>&descripcion=<?php echo urlencode($producto['descripcion']); ?>&imagen=<?php echo urlencode($producto['imagen']); ?>&alt=<?php echo urlencode($producto['alt']); ?>" 
                        class="product-card p-6 flex flex-col items-center text-center transition-transform duration-200 hover:scale-105"
                        style="text-decoration: none;"
                    >
                        <img alt="<?php echo htmlspecialchars($producto['alt']); ?>" class="h-48 w-auto object-contain mb-4" src="<?php echo htmlspecialchars($producto['imagen']); ?>" />
                        <h4 class="text-xl font-semibold text-gray-700 mb-2"><?php echo htmlspecialchars($producto['nombre']); ?></h4>
                        <p class="text-sm text-gray-600"><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
            <nav class="mt-10 flex justify-center items-center space-x-1 text-sm">
                <a class="pagination-item flex items-center" href="#">
                    <span class="material-icons text-base mr-1">chevron_left</span> Volver
                </a>
                <a class="pagination-item" href="#">1</a>
                <a class="pagination-item active" href="#">2</a>
                <a class="pagination-item" href="#">3</a>
                <span class="text-gray-500">...</span>
                <a class="pagination-item" href="#">11</a>
                <a class="pagination-item" href="#">12</a>
                <a class="pagination-item flex items-center" href="#">
                    Siguiente <span class="material-icons text-base ml-1">chevron_right</span>
                </a>
            </nav>
        </section>
    </main>
<script>
    const usuarioActivo = localStorage.getItem("usuarioActivo");
    if (!usuarioActivo) {
        alert("Debes iniciar sesión para ver el catálogo.");
        window.location.href = "login.php";
    }
</script>
</body>

</html>

<?php include 'includes/footer.php'; ?>