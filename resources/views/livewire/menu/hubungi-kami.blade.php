<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow px-6 pb-20 pt-32 md:px-20 lg:px-32">
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
                <div class="flex-grow px-6 pb-20 pt-32 md:px-20 lg:px-32">
                    <nav class="flex rounded-lg border border-black/30 bg-white px-5 py-3 text-black shadow-md"
                        aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                            <li class="inline-flex items-center">
                                <a href="/"
                                    class="group inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600">
                                    <svg class="me-2.5 h-3 w-3 text-gray-700 group-hover:text-green-600"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
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
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <a href="/hubungi-kami"
                                        class="text-sm font-medium text-gray-700 hover:text-green-600 md:ms-2">Hubungi
                                        Kami</a>
                                </div>
                            </li>
                        </ol>
                    </nav>

                    <div class="">
                        <h1 class="mb-10 pt-2 text-start text-3xl font-bold text-gray-800">Kontak Kami</h1>
                        <li>
                            <div class="flex items-center">
                                <svg class="mx-1 h-3 w-3 text-gray-700 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="/hubungi-kami"
                                    class="text-sm font-medium text-gray-700 hover:text-green-600 md:ms-2">Hubungi
                                    Kami</a>
                            </div>
                        </li>
            </ol>
        </nav>

        <div class="">
            <h1 class="mb-10 pt-2 text-start text-3xl font-bold text-gray-800">Kontak Kami</h1>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">

                    <!-- Informasi & Form -->
                    <div class="space-y-6">
                        <!-- Info Kontak -->
                        <div class="rounded-xl bg-white p-6 shadow-lg">
                            <h2 class="mb-4 text-xl font-semibold text-gray-800">Informasi Yayasan</h2>
                            @if ($yayasan->isNotEmpty())
                                <p><strong>Nama Yayasan:</strong> {{ $yayasan->first()->nama }}</p>
                                <p><strong>Alamat:</strong> {{ $yayasan->first()->alamat }}</p>
                                <p><strong>Email:</strong> {{ $yayasan->first()->email }}</p>
                                <p><strong>Telepon:</strong> {{ $yayasan->first()->telepon }}</p>
                            @else
                                <p><strong>Nama Yayasan:</strong> Yayasan Haadii Nurul Ikhlas</p>
                                <p><strong>Alamat:</strong> Jl. Contoh Alamat No. 123, Citeureup, Bogor</p>
                                <p><strong>Email:</strong> yayasan@contoh.org</p>
                                <p><strong>Telepon:</strong> 0812-3456-7890</p>
                            @endif
                        </div>

                        <!-- Form Kontak -->
                        <div class="rounded-xl bg-white p-6 shadow-lg">
                            <h2 class="mb-4 text-xl font-semibold text-gray-800">Kirim Pesan</h2>
                            <form class="space-y-4">
                                <input type="text" placeholder="Nama Anda"
                                    class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                <input type="email" placeholder="Email Anda"
                                    class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                <textarea rows="4" placeholder="Pesan Anda"
                                    class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"></textarea>
                                <button type="submit"
                                    class="w-full rounded-md bg-emerald-600 py-2 text-white transition hover:bg-emerald-700">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <!-- Form Kontak -->
                    <div class="rounded-xl bg-white p-6 shadow-lg">
                        <h2 class="mb-4 text-xl font-semibold text-gray-800">Kirim Pesan</h2>
                        <form class="space-y-4">
                            <input type="text" placeholder="Nama Anda"
                                class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                            <input type="email" placeholder="Email Anda"
                                class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                            <textarea rows="4" placeholder="Pesan Anda"
                                class="w-full rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"></textarea>
                            <button type="submit"
                                class="w-full rounded-md bg-emerald-600 py-2 text-white transition hover:bg-emerald-700">Kirim</button>
                        </form>
                    </div>
                </div>

                <!-- Peta Lokasi -->
                <div class="rounded-xl bg-white p-6 shadow-lg">
                    <h2 class="mb-4 text-xl font-semibold text-gray-800">Lokasi Yayasan</h2>
                    <div class="h-[600px] w-full overflow-hidden rounded-lg">
                        <iframe class="h-full w-full rounded-lg"
                            src="{{ $yayasan->isNotEmpty() && $yayasan->first()->maps ? $yayasan->first()->maps : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1234567890123!2d106.12345678901234!3d-6.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e12345678901234%3A0x1234567890123456!2sYayasan%20Haadii%20Nurul%20Ikhlas!5e0!3m2!1sen!2sid!4v1234567890123' }}"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>


            </div>
        </div>


    </div>
    </div>
    </div>
</body>
</body>
