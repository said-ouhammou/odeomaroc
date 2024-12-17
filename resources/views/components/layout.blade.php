<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odeo</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" /> --}}

</head>
<body>
  {{$slot}}


  {{-- flowbite --}}
  {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script> --}}

</body>
</html>