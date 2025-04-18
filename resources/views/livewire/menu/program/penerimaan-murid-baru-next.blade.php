<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="container mx-auto px-6 py-12 pt-40">
      <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md">

        <form class="p-6">
          <h3 class="text-lg font-bold mb-4">Lampiran (WAJIB)</h3>
        {{-- Stepper --}}
        <div class="pb-6">
            <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base">
                <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                    <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        Formulir<span class="hidden sm:inline-flex sm:ms-2">Pendaftaran</span>
                    </span>
                </li>
                <li class="flex md:w-full items-center text-blue-600 dark:text-blue-500 sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10 dark:after:border-gray-700">
                    <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-200 dark:after:text-gray-500">
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        Lampiran
                    </span>
                </li>
                <li class="flex items-center">
                    <span class="me-2">3</span>
                    Konfirmasi
                </li>
            </ol>
        </div>
          <div class="space-y-4">
            <div>
              <label class="block font-medium mb-1">Foto Siswa</label>
              <input type="file" accept="image/*" class="w-full border p-2 rounded-lg">
            </div>

            <div>
              <label class="block font-medium mb-1">Akta Lahir</label>
              <input type="file" accept=".pdf,image/*" class="w-full border p-2 rounded-lg">
            </div>

            <div>
              <label class="block font-medium mb-1">Kartu Keluarga</label>
              <input type="file" accept=".pdf,image/*" class="w-full border p-2 rounded-lg">
            </div>

            <div>
              <label class="block font-medium mb-1">Ijazah / Surat Keterangan Sekolah</label>
              <input type="file" accept=".pdf,image/*" class="w-full border p-2 rounded-lg">
            </div>
          </div>

          <div class="pt-6">
            <a href="/konfirmasi-pendaftaran" class="block w-full bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700 transition duration-200">
              Lengkapi Berkas
            </a>
          </div>

        </form>
      </div>
    </div>
  </body>
