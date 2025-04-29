<body class="bg-gray-50 font-sans text-gray-800">
    <div class="mx-auto max-w-6xl px-4 py-20 pt-40 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-white p-6 shadow-xl sm:p-10 md:p-12">
            <h2 class="mb-8 text-center text-2xl font-semibold text-gray-800 sm:text-3xl">Formulir Pendaftaran</h2>

            <!-- Progress Steps -->
            <div class="mb-10 flex flex-col items-center justify-between gap-4 sm:flex-row">
                <div class="flex items-center gap-2 font-medium text-blue-600">
                    <div
                        class="flex h-7 w-7 items-center justify-center rounded-full bg-blue-600 text-sm text-white sm:h-8 sm:w-8">
                        1</div>
                    <span class="text-sm sm:text-base">Formulir</span>
                </div>
                <div class="hidden h-1 w-full bg-gray-300 sm:mx-4 sm:block"></div>
                <div class="flex items-center gap-2 text-gray-400">
                    <div
                        class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300 text-sm sm:h-8 sm:w-8">
                        2</div>
                    <span class="text-sm sm:text-base">Lampiran</span>
                </div>
                <div class="hidden h-1 w-full bg-gray-300 sm:mx-4 sm:block"></div>
                <div class="flex items-center gap-2 text-gray-400">
                    <div
                        class="flex h-7 w-7 items-center justify-center rounded-full border border-gray-300 text-sm sm:h-8 sm:w-8">
                        3</div>
                    <span class="text-sm sm:text-base">Konfirmasi</span>
                </div>
            </div>

            <!-- Form -->
            @foreach (['success' => 'green', 'error' => 'red'] as $key => $color)
              @if (session($key))
                <div class="mb-6 rounded-lg bg-{{ $color }}-100 p-4 text-{{ $color }}-700">
                  {{ session($key) }}
                </div>
              @endif
            @endforeach
            <form action="{{ route('pmb.daftar') }}" method="POST" class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                @csrf
                <div>
                    <label class="mb-1 block text-sm font-medium">Nama Lengkap <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="nama_lengkap"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama lengkap">
                    @error('nama_lengkap')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">No HP</label>
                    <input type="tel" name="no_hp"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="08xxxxxxxxxx">
                    @error('no_hp')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">Nama Lengkap Wali <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="nama_wali"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama wali">
                    @error('nama_wali')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">No HP Wali <span class="text-red-500">*</span></label>
                    <input type="tel" name="no_hp_wali"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="08xxxxxxxxxx">
                    @error('no_hp_wali')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">Tempat Lahir <span
                            class="text-red-500">*</span></label>
                    <input type="text" name="tempat_lahir"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan tempat lahir">
                    @error('tempat_lahir')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">Tanggal Lahir <span
                            class="text-red-500">*</span></label>
                    <input type="date" name="tanggal_lahir"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500">
                    @error('tanggal_lahir')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">NIK <span class="text-red-500">*</span></label>
                    <input type="text" name="nik"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan NIK" maxlength="16">
                    @error('nik')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">Nama Sekolah Asal</label>
                    <input type="text" name="sekolah_asal"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan nama sekolah asal">
                    @error('sekolah_asal')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium">NPSN Sekolah Asal</label>
                    <input type="text" name="npsn_sekolah_asal"
                        class="w-full rounded-xl border border-gray-300 px-4 py-2 outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Masukkan NPSN">
                    @error('npsn_sekolah_asal')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol -->
                <div class="flex flex-col gap-4 pt-4 sm:col-span-2 sm:flex-row">
                    <input type="submit"
                        class="w-full rounded-xl bg-blue-600 py-2.5 text-white transition-all hover:bg-blue-700 sm:w-1/2"
                        value="Daftar">
                    <a href="/penerimaan-murid-baru-next"
                        class="w-full rounded-xl bg-gray-100 py-2.5 text-center text-gray-800 transition-all hover:bg-gray-200 sm:w-1/2">
                        Lengkapi Berkas
                    </a>
                </div>
            </form>
        </div>
        <!-- Modal -->
        <div id="successModal"
            class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-40">
            <div class="w-full max-w-sm rounded-2xl bg-white p-6 text-center shadow-lg">
                <h2 class="mb-4 text-xl font-semibold">Kamu berhasil terdaftar!</h2>
                <button onclick="closeSuccessModal()"
                    class="rounded-xl bg-blue-600 px-4 py-2 text-white transition hover:bg-blue-700">
                    Tutup
                </button>
            </div>
        </div>
    </div>

    <script>
        function showSuccessModal() {
            document.getElementById('successModal').classList.remove('hidden');
        }

        function closeSuccessModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // function handleNext(e) {
        //     e.preventDefault();
        //     window.location.href = "/penerimaan-murid-baru-next";
        // }
    </script>
</body>
