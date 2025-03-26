<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patroclo Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        background: {
                            light: '#f8fafc',
                            dark: '#0f172a'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-background-light to-background-dark font-sans antialiased text-gray-800 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white/80 backdrop-blur-md shadow-sm">
        @include('partials.menubar')
    </header>

    <!-- Main Content -->
    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900/90 text-white py-12 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4 text-primary-400">Patroclo Store</h3>
                    <p class="text-gray-400">La mejor selección de productos para tus necesidades diarias.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-primary-400">Enlaces rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition hover:pl-2">Inicio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition hover:pl-2">Productos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition hover:pl-2">Ofertas</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition hover:pl-2">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-primary-400">Contacto</h4>
                    <address class="text-gray-400 not-italic">
                        <p class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                            Av. Principal 123
                        </p>
                        <p class="mb-2">Ciudad, País</p>
                        <p class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            info@patroclostore.com
                        </p>
                        <p class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            +1 234 567 890
                        </p>
                    </address>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-primary-400">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Suscríbete para recibir nuestras ofertas.</p>
                    <form class="flex">
                        <input type="email" placeholder="Tu email" class="px-4 py-2 rounded-l focus:outline-none text-gray-800 w-full focus:ring-2 focus:ring-primary-400">
                        <button type="submit" class="bg-primary-600 hover:bg-primary-700 px-4 py-2 rounded-r transition flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 Patroclo Store. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>