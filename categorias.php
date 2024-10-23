<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categorías de Comida</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        header {
            margin-bottom: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        .categoria {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            display: inline-block;
            width: 200px;
            text-align: center;
        }
        .categoria img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Categorías de Comida</h1>
        <nav>
            <ul>
                <li><a href="categorias.php">Inicio</a></li>
                <li><a href="categorias.php">Categorías</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Aquí están nuestras categorías</h2>

        <!-- Sección de Paquetes -->
        <div>
            <h3 class="cursor-pointer text-[#141414] font-bold py-2" onclick="toggleSection('packages')">Paquetes</h3>
            <div id="packages" class="hidden grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                <div class="flex flex-col gap-3 pb-3">
                    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("https://example.com/image1.png");'></div>
                    <div>
                        <p class="text-[#141414] text-base font-medium leading-normal">Campo 1</p>
                        <p class="text-[#3E4D5B] text-sm font-normal leading-normal">Descripción del Campo 1</p>
                    </div>
                </div>
                <!-- Repite según sea necesario -->
            </div>
        </div>

        <!-- Sección de Especiales -->
        <div>
            <h3 class="cursor-pointer text-[#141414] font-bold py-2" onclick="toggleSection('specials')">Especiales</h3>
            <div id="specials" class="hidden grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                <div class="flex flex-col gap-3 pb-3">
                    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("https://example.com/image1.png");'></div>
                    <div>
                        <p class="text-[#141414] text-base font-medium leading-normal">Campo 1</p>
                        <p class="text-[#3E4D5B] text-sm font-normal leading-normal">Descripción del Campo 1</p>
                    </div>
                </div>
                <!-- Repite según sea necesario -->
            </div>
        </div>

        <!-- Sección de Bebidas -->
        <div>
            <h3 class="cursor-pointer text-[#141414] font-bold py-2" onclick="toggleSection('bebidas')">Bebidas</h3>
            <div id="bebidas" class="hidden grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                <div class="flex flex-col gap-3 pb-3">
                    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("2986.jpg");'></div>
                    <div>
                        <p class="text-[#141414] text-base font-medium leading-normal">Bebida 1</p>
                        <p class="text-[#3E4D5B] text-sm font-normal leading-normal">Precio: 3,500</p>
                    </div>
                </div>
                <!-- Repite según sea necesario -->
            </div>
        </div>

        <!-- Sección de Frutas -->
        <div>
            <h3 class="cursor-pointer text-[#141414] font-bold py-2" onclick="toggleSection('frutas')">Frutas</h3>
            <div id="frutas" class="hidden grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                <div class="flex flex-col gap-3 pb-3">
                    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("https://example.com/image1.png");'></div>
                    <div>
                        <p class="text-[#141414] text-base font-medium leading-normal">Campo 1</p>
                        <p class="text-[#3E4D5B] text-sm font-normal leading-normal">Descripción del Campo 1</p>
                    </div>
                </div>
                <!-- Repite según sea necesario -->
            </div>
        </div>

        <!-- Sección de Confitería -->
        <div>
            <h3 class="cursor-pointer text-[#141414] font-bold py-2" onclick="toggleSection('confiteria')">Confitería</h3>
            <div id="confiteria" class="hidden grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                <div class="flex flex-col gap-3 pb-3">
                    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("https://example.com/image1.png");'></div>
                    <div>
                        <p class="text-[#141414] text-base font-medium leading-normal">Campo 1</p>
                        <p class="text-[#3E4D5B] text-sm font-normal leading-normal">Descripción del Campo 1</p>
                    </div>
                </div>
                <!-- Repite según sea necesario -->
            </div>
        </div>

        <!-- Sección de Almuerzos -->
        <div>
            <h3 class="cursor-pointer text-[#141414] font-bold py-2" onclick="toggleSection('almuerzos')">Almuerzos</h3>
            <div id="almuerzos" class="hidden grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                <div class="flex flex-col gap-3 pb-3">
                    <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl" style='background-image: url("https://example.com/image1.png");'></div>
                    <div>
                        <p class="text-[#141414] text-base font-medium leading-normal">Campo 1</p>
                        <p class="text-[#3E4D5B] text-sm font-normal leading-normal">Descripción del Campo 1</p>
                    </div>
                </div>
                <!-- Repite según sea necesario -->
            </div>
        </div>
    </main>

    <script>
        function toggleSection(sectionId) {
            const section = document.getElementById(sectionId);
            section.classList.toggle('hidden');
        }
    </script>
</body>
</html>
