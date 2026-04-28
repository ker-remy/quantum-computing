<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remy Lab | PHP 8.5</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white flex items-center justify-center min-h-screen">
    <div class="p-8 bg-slate-800 rounded-2xl shadow-2xl border border-slate-700 text-center">
        <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-400 to-emerald-400 bg-clip-text text-transparent">
            PHP 8.5 Lab Complete
        </h1>
        <p class="mt-4 text-slate-400">Deployed via GitHub Actions to Azure App Service.</p>
        <div class="mt-6 p-4 bg-slate-900 rounded-lg font-mono text-emerald-400">
            <?php echo "Server Time: " . date("Y-m-d H:i:s"); ?>
        </div>
    </div>
</body>
</html>