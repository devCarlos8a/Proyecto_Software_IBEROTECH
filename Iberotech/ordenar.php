<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ordenar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-12 max-w-3xl">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">Ordenar</h1>

        <?php
        // Obtener datos del producto desde la URL
        $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
        $descripcion = isset($_GET['descripcion']) ? htmlspecialchars($_GET['descripcion']) : '';
        $imagen = isset($_GET['imagen']) ? htmlspecialchars($_GET['imagen']) : '';
        ?>

        <?php if ($nombre && $descripcion && $imagen): ?>
        <div class="bg-white rounded-lg shadow-lg mb-8 flex flex-col md:flex-row items-center p-6">
            <img src="<?php echo $imagen; ?>" alt="<?php echo $nombre; ?>" class="w-32 h-32 object-cover rounded-lg mb-4 md:mb-0 md:mr-6 border-2 border-gray-200 shadow-sm">
            <div class="flex-1">
                <h2 class="text-xl font-bold text-gray-800 mb-2"><?php echo $nombre; ?></h2>
                <p class="text-gray-600 mb-2"><?php echo $descripcion; ?></p>
                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-semibold">Producto seleccionado</span>
            </div>
        </div>
        <?php endif; ?>

        <form class="bg-white shadow-xl rounded-lg p-8 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                <label class="text-gray-700 font-medium bg-gray-200 p-3 rounded-md text-center md:text-left" for="id-usuario">ID usuario</label>
                <input class="col-span-1 md:col-span-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" id="id-usuario" placeholder="Ingrese su ID de usuario" type="text" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                <label class="text-gray-700 font-medium bg-gray-200 p-3 rounded-md text-center md:text-left" for="nombre-usuario">Nombre Usuario</label>
                <input class="col-span-1 md:col-span-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" id="nombre-usuario" placeholder="Ingrese su nombre de usuario" type="text" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                <label class="text-gray-700 font-medium bg-gray-200 p-3 rounded-md text-center md:text-left" for="email">E-Mail</label>
                <input class="col-span-1 md:col-span-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" id="email" placeholder="Ingrese su correo electrónico" type="email" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                <label class="text-gray-700 font-medium bg-gray-200 p-3 rounded-md text-center md:text-left" for="direccion">Dirección</label>
                <input class="col-span-1 md:col-span-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" id="direccion" placeholder="Ingrese su dirección" type="text" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                <label class="text-gray-700 font-medium bg-gray-200 p-3 rounded-md text-center md:text-left" for="telefono">Teléfono</label>
                <input class="col-span-1 md:col-span-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" id="telefono" placeholder="Ingrese su número de teléfono" type="tel" />
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-4">
                <label class="text-gray-700 font-medium bg-gray-200 p-3 rounded-md text-center md:text-left" for="numero-tarjeta">Número de tarjeta</label>
                <input class="col-span-1 md:col-span-2 p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none" id="numero-tarjeta" placeholder="Ingrese el número de su tarjeta" type="text" />
            </div>
            <div class="flex justify-center pt-6">
                <button id="btnRentar" type="button" class="bg-gray-800 hover:bg-gray-900 text-white font-semibold py-3 px-12 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                    Rentar equipo
                </button>

            </div>
        </form>
    </div>
<div id="modalConfirmacion" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center space-y-4 w-full max-w-sm">
        <p class="text-lg font-semibold">¿Estás seguro que deseas proceder con el pago?</p>
        <div class="flex justify-center space-x-6">
            <button id="confirmarSi" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Sí</button>
            <button id="confirmarNo" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">No</button>
        </div>
    </div>
</div>

<script>
    const btnRentar = document.getElementById("btnRentar");
    const modal = document.getElementById("modalConfirmacion");
    const btnSi = document.getElementById("confirmarSi");
    const btnNo = document.getElementById("confirmarNo");

    btnRentar.addEventListener("click", () => {
        modal.classList.remove("hidden");
    });

    btnSi.addEventListener("click", () => {
        modal.classList.add("hidden");
        alert("✅ Equipo rentado satisfactoriamente.");
        document.querySelector("form").submit();
        window.location.href = "index.php";
    });

    btnNo.addEventListener("click", () => {
        modal.classList.add("hidden");
    });
</script>

</body>

</html>
<?php include 'includes/footer.php'; ?>