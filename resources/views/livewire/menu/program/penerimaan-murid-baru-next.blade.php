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
                <form class="space-y-6" method="POST"
                    action="{{ $statusUpdate ? route('pmb.next.update', $id_registration) : route('pmb.next.submit') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @if ($statusUpdate)
                        @method('PATCH')
                    @endif
                    <div class="space-y-6">
                        <div>
                            <input type="hidden" name="id_registration" value="{{ $id_registration }}">
                            <label for="foto_siswa" class="mb-2 block text-sm font-medium text-gray-700">Unggah Foto
                                Siswa <i style="font: italic">(png, jpg)</i> </label>
                            <input id="foto_siswa" name="foto_siswa" type="file" accept="image/*"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            @error('foto_siswa')
                                <p class="mt-1 text-sm text-red-600">{{ $errors->first('foto_siswa') }}</p>
                            @enderror
                            <p></p>
                            @if ($foto_siswa)
                                <a href="{{ Storage::url($foto_siswa) }}" target="_blank"
                                    class="mb-2 inline-block text-blue-600 hover:underline">Lihat Foto Siswa</a>
                            @endif
                        </div>
                        <div>
                            <label for="akta_lahir" class="mb-2 block text-sm font-medium text-gray-700">Unggah Akta
                                Lahir <i>(pdf)</i></label>
                            <input id="akta_lahir" name="akta_lahir" type="file" accept="image/*,application/pdf"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            @error('akta_lahir')
                                <p class="mt-1 text-sm text-red-600">{{  $errors->first('akta_lahir') }}</p>
                            @enderror
                            @if ($akta_lahir)
                                <a href="{{ Storage::url($akta_lahir) }}" target="_blank"
                                    class="mb-2 inline-block text-blue-600 hover:underline">Lihat Akta Lahir</a>
                            @endif
                        </div>
                        <div>
                            <label for="kartu_keluarga" class="mb-2 block text-sm font-medium text-gray-700">Unggah
                                Kartu Keluarga <i>(pdf)</i></label>
                            <input id="kartu_keluarga" name="kartu_keluarga" type="file"
                                accept="image/*,application/pdf"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            @error('kartu_keluarga')
                                <p class="mt-1 text-sm text-red-600">{{  $errors->first('kartu_keluarga') }}</p>
                            @enderror
                            @if ($kartu_keluarga)
                                <a href="{{ Storage::url($kartu_keluarga) }}" target="_blank"
                                    class="mb-2 inline-block text-blue-600 hover:underline">Lihat Kartu Keluarga</a>
                            @endif
                        </div>
                        <div>
                            <label for="ijazah" class="mb-2 block text-sm font-medium text-gray-700">Unggah
                                Ijazah <i>(pdf)</i></label>
                            <input id="ijazah" name="ijazah" type="file" accept="image/*,application/pdf"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            @error('ijazah')
                                <p class="mt-1 text-sm text-red-600">{{  $errors->first('ijazah') }}</p>
                            @enderror
                            @if ($ijazah)
                                <a href="{{ Storage::url($ijazah) }}" target="_blank"
                                    class="mb-2 inline-block text-blue-600 hover:underline">Lihat Ijazah</a>
                            @endif
                        </div>
                        <div>
                            <label for="dokumen_tulis" class="mb-2 block text-sm font-medium text-gray-700">Unggah
                                Dokumen Tulis 
                                @if ($dokumen && $dokumen->isNotEmpty())
                                    <a href="{{ Storage::url($dokumen->first()->dokumen) }}" target="_blank" class="text-blue-600 hover:underline">Download Dokumen</a>
                                @endif
                                <i>(pdf)</i>
                            </label>
                            <input id="dokumen_tulis" name="dokumen_tulis" type="file"
                                accept="image/*,application/pdf"
                                class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 text-gray-800 shadow-md transition hover:shadow-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-500">
                            @error('dokumen_tulis')
                                <p class="mt-1 text-sm text-red-600">{{  $errors->first('dokumen_tulis') }}</p>
                            @enderror
                            @if ($dokumen_tulis)
                                <a href="{{ Storage::url($dokumen_tulis) }}" target="_blank"
                                    class="mb-2 inline-block text-blue-600 hover:underline">Lihat Dokumen Tulis</a>
                            @endif
                        </div>

                        <div class="pt-8">
                            <button type="submit"
                                class="block w-full rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 py-3 text-center font-semibold text-white shadow-lg transition-all duration-200 hover:from-blue-700 hover:to-blue-800">
                                Lengkapi Berkas
                            </button>
                            @if ($statusComplete)
                                <a href="{{ route('pmb.konfirmasi', $id_registration) }}"
                                    class="mt-4 block w-full rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 py-3 text-center font-semibold text-white shadow-lg transition-all duration-200 hover:from-blue-700 hover:to-blue-800">
                                    Konfirmasi
                                </a>
                            @endif
                        </div>
                </form>
            @else
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
                        <input type="text" name="nama_lengkap" wire:model.live="nama_lengkap"
                            placeholder="Masukkan Nama"
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
