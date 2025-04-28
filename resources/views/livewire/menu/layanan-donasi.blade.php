<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow px-6 pb-20 pt-32 md:px-20 lg:px-32">

        <!-- Breadcrumb -->
        <nav class="flex rounded-lg border border-black/30 bg-white px-5 py-3 text-black" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">

                <!-- Item 1: Home -->
                <li class="inline-flex items-center">
                    <a href="/"
                        class="group inline-flex items-center text-sm font-medium text-black hover:text-green-500">
                        <svg class="me-2.5 h-3 w-3 text-black group-hover:text-green-500"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>

                <!-- Item 2: Layanan Donasi -->
                <li>
                    <div class="flex items-center">
                        <svg class="mx-1 h-3 w-3 text-black rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="/layanan-donasi"
                            class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Layanan Donasi</a>
                    </div>
                </li>

            </ol>
        </nav>

        <!-- Konten Utama -->
        <div class="">
            <!-- Judul -->
            <h1 class="mb-8 mt-4 text-start text-3xl font-bold sm:text-4xl">Layanan Donasi</h1>

            <!-- Grid 3 Kolom -->
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

                <!-- Kolom 1: Rekening Donasi -->
                <div class="rounded-xl bg-white p-6 shadow">
                    <h2 class="mb-4 text-xl font-semibold">Rekening Donasi</h2>
                    <table class="w-full text-sm text-gray-700">
                        @foreach ($bank as $data)
                            <div class="mb-3">
                                <tr class="align-top">
                                    <td class="py-2 font-bold">{{ $data->nama_bank }}</>
                                    </td>
                                    <td class="px-1 py-2">:</td>
                                    <td class="py-2">{{ $data->rekening_bank }} </td>
                                </tr>
                                <tr class="align-top">
                                    <td class="">a.n</>
                                    </td>
                                    <td class="px-1"></td>
                                    <td class="">{{ $data->nama_pemilik }} </td>
                                </tr>
                            </div>
                        @endforeach
                    </table>
                </div>

                <!-- Kolom 2: Form Donasi -->
                <div class="rounded-xl bg-white p-6 shadow">
                    <h2 class="mb-4 text-xl font-semibold">Konfirmasi Donasi</h2>
                    @if (session('success'))
                        <div class="relative rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
                            role="alert">
                            <strong class="font-bold">Berhasil!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                            <span class="absolute bottom-0 right-0 top-0 px-4 py-3">
                            </span>
                        </div>
                    @endif
                    <form class="space-y-4" action="{{ route('donasi.send') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <label class="block text-sm font-medium text-gray-700">Donasi Atas Nama <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="nama" placeholder="Nama Anda"
                            class="w-full rounded-md border border-emerald-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400" />
                        @error('nama')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" placeholder="Email"
                            class="w-full rounded-md border border-emerald-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400" />
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block text-sm font-medium text-gray-700">Nomor Telepon <span
                                class="text-red-500">*</span></label>
                        <input type="tel" name="telepon" placeholder="Nomor Telepon"
                            class="w-full rounded-md border border-emerald-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400" />
                        @error('telepon')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block text-sm font-medium text-gray-700">Jumlah Donasi <span
                                class="text-red-500">*</span></label>
                        <input type="number" name="jumlah_donasi" placeholder="Jumlah Donasi"
                            class="w-full rounded-md border border-emerald-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400" />
                        @error('jumlah_donasi')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block text-sm font-medium text-gray-700">Jenis Donasi <span
                                class="text-red-500">*</span></label>
                        <select name="jenis_donasi"
                            class="w-full rounded-md border border-emerald-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">
                            <option disabled selected>---</option>
                            @foreach ($jenis as $data)
                                <option value="{{ $data->id_jenis_donasi }}">{{ $data->jenis }}</option>
                            @endforeach
                        </select>
                        @error('jenis_donasi')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block text-sm font-medium text-gray-700">Nama Bank <span
                                class="text-red-500">*</span></label>
                        <select name="nama_bank"
                            class="w-full rounded-md border border-emerald-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">
                            <option disabled selected>Nama Bank :</option>
                            @foreach ($bank as $data)
                                <option value="{{ $data->nama_bank }}">{{ $data->nama_bank }}</option>
                            @endforeach
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        @error('nama_bank')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block text-sm font-medium text-gray-700">Tanggal Transfer <span
                                class="text-red-500">*</span></label>
                        <input type="date" name="tanggal_transfer" placeholder="Tanggal Transfer"
                            class="w-full rounded-md border border-emerald-500 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400" />
                        @error('tanggal_transfer')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block text-sm font-medium text-gray-700">Bukti Transfer <span
                                class="text-red-500">*</span></label>
                        <input type="file" name="bukti_transfer" class="w-full text-sm text-gray-600" />
                        @error('bukti_transfer')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                        <button type="submit"
                            class="w-full rounded-md bg-emerald-600 py-2 text-white transition hover:bg-emerald-700">Konfirmasi
                            Donasi</button>
                    </form>
                </div>

                <!-- Kolom 3: QR Code -->
                <div class="flex flex-col items-center justify-center rounded-xl bg-white p-6 shadow">
                    <h2 class="mb-4 text-xl font-semibold">Scan QR Code</h2>
                    <img src="{{ Storage::url($qris->first()->gambar_qris) }}" alt="QR Code Donasi"
                        class="h-full w-full object-contain" />
                    <p class="mt-2 text-center text-sm text-gray-600">Silakan scan untuk donasi via e-wallet</p>
                </div>

            </div>
        </div>
    </div>
</body>
