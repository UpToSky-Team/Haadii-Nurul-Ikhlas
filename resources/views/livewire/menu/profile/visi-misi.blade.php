<body class="bg-gray-100 text-gray-800 mt-20 pt-20">
    <div class="container mx-auto px-6 py-12 max-w-4xl pt-40">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <!-- Judul -->
            <h1 class="text-3xl font-bold text-center text-orange-600 mb-6">Visi & Misi Yayasan Haadi Nurul Ikhlas</h1>

            <!-- Visi -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-center">Visi</h2>
                <div class="text-justify leading-relaxed richeditor-content bg-orange-100 p-4 rounded-lg value-db">
                    {!! $visiMisi->visi !!}
                </div>
            </div>

            <!-- Misi -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-center">Misi</h2>
                <div class="text-justify bg-gray-50 p-6 rounded-lg richeditor-content shadow-sm value-db">
                    {!! $visiMisi->misi !!}
                </div>
            </div>

            <!-- Ajakan -->
            <p class="text-center text-lg font-semibold text-gray-800 mt-6">
                Bersama kita wujudkan perubahan nyata untuk masyarakat yang lebih baik!
            </p>
        </div>
    </div>
</body>
