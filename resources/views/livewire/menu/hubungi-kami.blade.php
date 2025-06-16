<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow px-6 pb-20 pt-32 md:px-20">
        <nav class="flex rounded-lg border border-black/30 bg-white px-5 py-3 text-black shadow-md"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="group inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600">
                        <svg class="me-2.5 h-3 w-3 text-gray-700 group-hover:text-green-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>

                <li>
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-gray-700 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="/hubungi-kami"
                            class="text-sm font-medium text-gray-700 hover:text-green-600 md:ms-2">Hubungi Kami</a>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="">
            <h1 class="mb-10 pt-2 text-start text-3xl font-bold text-gray-800">Kontak Kami</h1>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">

                <!-- Informasi & Form -->
                <div class="space-y-6">
                    <!-- Info Kontak -->
                    <div class="rounded-xl bg-white p-6 shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Informasi Yayasan</h2>
                        @if ($yayasan->isNotEmpty())
                            <table class="w-full text-sm text-gray-700">
                                <tr class="align-top">
                                    <td class="py-2 font-semibold">Nama Yayasan</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="py-2">{{ $yayasan->first()->nama }}</td>
                                </tr>
                                <tr class="align-top">
                                    <td class="py-2 font-semibold">Alamat</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="py-2">{{ $yayasan->first()->alamat }}</td>
                                </tr>
                                <tr class="align-top">
                                    <td class="py-2 font-semibold">Email</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="py-2">{{ $yayasan->first()->email }}</td>
                                </tr>
                                <tr class="align-top">
                                    <td class="py-2 font-semibold">Telepon</td>
                                    <td class="px-2 py-2">:</td>
                                    <td class="py-2">{{ $yayasan->first()->no_telepon }}</td>
                                </tr>
                            </table>
                        @else
                            <table class="w-full text-sm text-gray-700">
                                <span class="italic text-gray-400">Informasi belum tersedia.</span>
                            </table>
                        @endif
                    </div>
                    <div class="rounded-xl bg-white p-6 shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Deskripsi</h2>
                        <div>
                            <div class="text-justify richeditor-content">
                                @if ($yayasan->isNotEmpty() && !empty($yayasan->first()->deskripsi))
                                    {!! $yayasan->first()->deskripsi !!}
                                @else
                                    <span class="italic text-gray-400">Deskripsi belum tersedia.</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peta Lokasi -->
                <div class="rounded-xl bg-white p-6 shadow-lg">
                    <div>
                        <h2 class="mb-4 text-center text-xl font-semibold text-gray-800">Lokasi Yayasan</h2>
                    </div>
                    <div class="flex h-[600] w-full justify-center overflow-hidden rounded-lg">
                        @if ($yayasan->isNotEmpty() && $yayasan->first()->maps)
                            {!! $yayasan->first()->maps !!}
                        @else
                            <iframe class="h-full w-full rounded-lg" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
</body>
