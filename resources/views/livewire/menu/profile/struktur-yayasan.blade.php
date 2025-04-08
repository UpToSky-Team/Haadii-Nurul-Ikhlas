<body class="bg-gray-100 text-gray-800 mt-20 " >
    <div class="container mx-auto px-6 py-12 max-w-5xl pt-40">
        @foreach ($struktur as $data)
            <div class="max-w-4xl mx-auto bg-white p-6 shadow-lg rounded-lg mt-10 border-t-4 border-yellow-400">
                <div class="flex items-center space-x-6">
                    <img src="{{ empty($data->gambar_url) ? '/img/profile_picture/profile.jpg' : Storage::url($data->gambar_url) }}" alt="{{ $data->nama }}" class="w-32 h-32 rounded-full border-4 border-gray-300">
                    <div>
                        <h2 class="text-lg font-bold text-blue-700">{{ Str::upper($data->jabatan) }}</h2>
                        <h1 class="text-2xl font-extrabold">{{ Str::title($data->nama) }}</h1>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
