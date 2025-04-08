<body class="bg-gray-100 text-gray-800 mt-20">
    <div class="container mx-auto px-6 py-12 max-w-4xl pt-40">
        <div class="bg-white  p-8 rounded-lg shadow-lg">
            <!-- Judul -->
            <h1 class="text-3xl font-bold text-center text-orange-600 mb-6">Maksud & Tujuan Yayasan Haadi Nurul Ikhlas</h1>
            <!-- Maksud -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-center">Maksud</h2>
                <div class="text-justify leading-relaxed richeditor-content bg-orange-100 p-4 rounded-lg value-db">
                    {!! $maksudTujuan->maksud !!}
                </div>
            </div>
            <!-- Tujuan -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-center">Tujuan</h2>
                <div class="bg-gray-50 p-6 rounded-lg richeditor-content shadow-sm value-db">
                    {!! $maksudTujuan->tujuan !!}
                </div>
            </div>
            <!-- Ajakan -->
            <p class="text-center text-lg font-semibold text-gray-800 mt-6">
                Mari bersama-sama membangun masa depan yang lebih baik dengan berbagi dan peduli kepada sesama!
            </p>
        </div>
    </div>

</body>
