<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Haadii Nurul Ikhlas</title>
    <link rel="icon" type="image/png" href="/img/logoyayasan.png">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:wght@100..900&family=Poppins:wght@100..900&display=swap" rel="stylesheet">

    <!-- Custom Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        inter: ['Inter', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .richeditor-content ol {
            list-style-type: decimal;
            margin-left: 20px;
        }

        .richeditor-content ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .value-db h1 {
            font-size: 32px;
        }

        .value-db h2 {
            font-size: 24px;
        }

        .value-db h3 {
            font-size: 18px;
        }
    </style>
</head>
<body class="bg-white font-poppins">
    @livewire('layouts.navigationbar')

    <div>
        @yield('content')
    </div>

    <footer>
        @livewire('layouts.footer')
    </footer>
</body>
</html>
