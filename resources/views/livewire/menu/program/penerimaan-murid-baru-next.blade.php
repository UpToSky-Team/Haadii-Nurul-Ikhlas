<main class="bg-gray-100 font-sans text-gray-800">
    <div class="mx-auto max-w-4xl px-4 py-24 sm:px-6 lg:px-8">
        <div class="rounded-3xl bg-white p-6 shadow-xl sm:p-10">

            <h2 class="mb-8 text-center text-2xl font-semibold sm:text-3xl">Lampiran (Wajib)</h2>

            <!-- Stepper -->
            <div class="mb-10 flex flex-col items-center justify-between gap-4 sm:flex-row">
                <div class="flex items-center gap-2 font-medium text-blue-600">
                    <div
                        class="flex h-7 w-7 items-center justify-center rounded-full bg-blue-600 text-sm text-white sm:h-8 sm:w-8">
                        1</div>
                    <span class="text-sm sm:text-base">Formulir</span>
                </div>
                <div class="hidden h-1 w-full bg-gray-300 sm:mx-4 sm:block"></div>
                <div class="flex items-center gap-2 font-medium text-blue-600">
                    <div
                        class="flex h-7 w-7 items-center justify-center rounded-full bg-blue-600 text-sm text-white sm:h-8 sm:w-8">
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

            <!-- Form Upload -->
            @foreach (['success' => 'green', 'error' => 'red'] as $key => $color)
                @if (session($key))
                    <div class="bg-{{ $color }}-100 text-{{ $color }}-700 mb-6 rounded-lg p-4">
                        {{ session($key) }}
                    </div>
                @endif
            @endforeach

            @if (!empty(session('id_registration') || !empty($id_registration)))
                <form class="space-y-6">
                    <div class="space-y-6">
                        <div>
                          <label for="foto_siswa" class="mb-2 block text-sm font-medium text-gray-700">Unggah Foto
                            Siswa</label>
                          @if ($foto_siswa)
                            <a href="{{ asset('storage/' . $foto_siswa) }}" target="_blank"
                              class="mb-2 inline-block text-blue-600 hover:underline">Download Foto Siswa</a>
                          @else
                            <input id="foto_siswa" name="foto_siswa" type="file" accept="image/*"
                              class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                          @endif
                        </div>

                        <div>
                          <label for="akta_kelahiran" class="mb-2 block text-sm font-medium text-gray-700">Unggah Akta
                            Kelahiran</label>
                          @if ($akta_lahir)
                            <a href="{{ asset('storage/' . $akta_kelahiran) }}" target="_blank"
                              class="mb-2 inline-block text-blue-600 hover:underline">Download Akta Kelahiran</a>
                          @else
                            <input id="akta_kelahiran" name="akta_kelahiran" type="file" accept=".pdf,image/*"
                              class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                          @endif
                        </div>

                        <div>
                          <label for="kartu_keluarga" class="mb-2 block text-sm font-medium text-gray-700">Unggah
                            Kartu Keluarga</label>
                          @if ($kartu_keluarga)
                            <a href="{{ asset('storage/' . $kartu_keluarga) }}" target="_blank"
                              class="mb-2 inline-block text-blue-600 hover:underline">Download Kartu Keluarga</a>
                          @else
                            <input id="kartu_keluarga" name="kartu_keluarga" type="file" accept=".pdf,image/*"
                              class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                          @endif
                        </div>

                        <div>
                          <label for="ijazah" class="mb-2 block text-sm font-medium text-gray-700">Unggah Ijazah
                            atau Surat Keterangan Sekolah</label>
                          @if ($ijazah)
                            <a href="{{ asset('storage/' . $ijazah) }}" target="_blank"
                              class="mb-2 inline-block text-blue-600 hover:underline">Download Ijazah</a>
                          @else
                            <input id="ijazah" name="ijazah" type="file" accept=".pdf,image/*"
                              class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                          @endif
                        </div>
                    </div>

                    <div class="pt-8">
                        <a href="/konfirmasi-pendaftaran"
                            class="block w-full rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 py-3 text-center font-semibold text-white shadow-lg transition-all duration-200 hover:from-blue-700 hover:to-blue-800">
                            Lengkapi Berkas
                        </a>
                    </div>
                    </a>
        </div>
        </form>
    @else
        <h1>ID = {{ $id_registration }}</h1>
        <div class="mb-6 rounded-lg bg-yellow-100 p-4 text-yellow-800">
            <p class="text-center font-semibold">Silahkan isi formulir terlebih dahulu untuk melanjutkan</p>
        </div>
        <div class="space-y-4">
            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">NIK</label>
                <input type="text" name="nik" wire:model.live="nik" placeholder="Masukkan NIK"
                    class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2 text-gray-800 shadow-sm transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="mb-1 block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama_lengkap" wire:model.live="nama_lengkap" placeholder="Masukkan Nama"
                    class="w-full rounded-lg border border-gray-300 bg-white px-4 py-2 text-gray-800 shadow-sm transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
            </div>
        </div>

        <div class="pt-6">
            <button type="button" wire:click="cariData"
                class="block w-full rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 py-3 text-center font-semibold text-white shadow-lg transition-all duration-200 hover:from-blue-600 hover:to-blue-700">
                Cari Data
            </button>
        </div>
        @endif
    </div>
    </div>
</main>
