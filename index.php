<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ker Remy | Azure Testing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #0f172a; color: white; scroll-behavior: smooth; }
        .glass { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body>
    <nav class="fixed w-full z-50 glass py-4 px-8 flex justify-between items-center">
        <h1 class="text-xl font-bold tracking-tighter">KER.REMY</h1>
        <div class="space-x-6 text-sm uppercase tracking-widest">
            <a href="#home" class="hover:text-blue-400 transition">Home</a>
            <a href="#projects" class="hover:text-blue-400 transition">Projects</a>
        </div>
    </nav>

    <section id="home" class="h-screen flex flex-col justify-center items-center text-center px-4">
        <h2 class="text-6xl md:text-8xl font-black mb-4">CS STUDENT.</h2>
        <p class="text-gray-400 text-lg md:text-xl max-w-2xl">
            Integrating source code to Azure App Service.
        </p>
        <a href="#projects" class="mt-8 px-8 py-3 bg-blue-600 hover:bg-blue-700 rounded-full font-bold transition">View My Work</a>
    </section>

    <section id="projects" class="py-20 px-8 max-w-6xl mx-auto">
        <h3 class="text-3xl font-bold mb-12 border-b border-gray-700 pb-4">Featured Projects</h3>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="glass p-6 rounded-2xl">
                <div class="h-40 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl mb-4"></div>
                <h4 class="text-xl font-bold">Testing 1</h4>
                <p class="text-gray-400 mt-2 text-sm">...</p>
            </div>
            <div class="glass p-6 rounded-2xl">
                <div class="h-40 bg-gradient-to-br from-orange-400 to-red-500 rounded-xl mb-4"></div>
                <h4 class="text-xl font-bold">Testing 2</h4>
                <p class="text-gray-400 mt-2 text-sm">...</p>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center text-gray-500 text-sm border-t border-gray-800">
        <p>&copy; Integrate source code to Azure App Service testing</p>
    </footer>
</body>
</html>