<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-200">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-full">

<div class="min-h-full">

    <!-- main -->
    <main class="">
        {{$slot}}
    </main>
  </div>

  <!-- footer -->
  <x-footer></x-footer>

</body>

</html>