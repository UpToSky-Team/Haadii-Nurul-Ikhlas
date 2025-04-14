<body class="bg-gray-100 font-sans text-gray-800">
    <div class="container mx-auto px-6 py-12 max-w-4xl pt-40">

      <!-- Breadcrumb -->
      <nav class="flex px-5 py-3 border border-black/30 rounded-lg bg-white text-black" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">

          <!-- Item 1: Home -->
          <li class="inline-flex items-center">
            <a href="/" class="group inline-flex items-center text-sm font-medium text-black hover:text-green-500">
              <svg class="w-3 h-3 me-2.5 text-black group-hover:text-green-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
            </a>
          </li>

          <!-- Item 2: Layanan Donasi -->
          <li>
            <div class="flex items-center">
              <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
              </svg>
              <a href="/layanan-donasi" class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Layanan Donasi</a>
            </div>
          </li>

        </ol>
      </nav>

      <!-- Konten Utama -->
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <!-- Judul -->
        <h1 class="text-3xl sm:text-4xl font-bold mb-8 text-start">Layanan Donasi</h1>

        <!-- Grid 3 Kolom -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

          <!-- Kolom 1: Rekening Donasi -->
          <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-xl font-semibold mb-4">Rekening Donasi</h2>
            <ul class="space-y-4 text-sm">
              <li><strong>BRI:</strong> 1134-01-000914-50-6<br/><span class="text-gray-600">a.n Yayasan Haadii Nurul Ikhlas</span></li>
              <li><strong>BSI:</strong> 1026515088<br/><span class="text-gray-600">a.n YAYASAN HAADII NURUL IKHLAS</span></li>
              <li><strong>BJB Syariah:</strong> 5370206002626<br/><span class="text-gray-600">a.n Yayasan Haadii Nurul Ikhlas</span></li>
              <li><strong>BNI:</strong> 0377150785<br/><span class="text-gray-600">a.n Faris Nur (Ketua Yayasan)</span></li>
              <li><strong>Mandiri:</strong> 133-00-1464495-9<br/><span class="text-gray-600">a.n Faris Nur</span></li>
              <li><strong>BCA:</strong> 5720465398<br/><span class="text-gray-600">a.n Yayasan HNI</span></li>
            </ul>
          </div>

          <!-- Kolom 2: Form Konfirmasi Donasi -->
          <div class="bg-white p-6 rounded-xl shadow">
            <h2 class="text-xl font-semibold mb-4">Konfirmasi Donasi</h2>
            <form class="space-y-4">
              <input type="text" placeholder="Program Donasi Yang Diikuti" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
              <input type="text" placeholder="Nama Anda" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
              <select class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">
                <option disabled selected>Nama Bank :</option>
                <option>BRI</option>
                <option>BSI</option>
                <option>BJB Syariah</option>
                <option>BNI</option>
                <option>Mandiri</option>
                <option>BCA</option>
              </select>
              <input type="date" placeholder="Tanggal Transfer" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
              <input type="file" class="w-full text-sm text-gray-600"/>
              <input type="text" placeholder="Donasi Atas Nama" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
              <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-md hover:bg-emerald-700 transition">Konfirmasi Donasi</button>
            </form>
          </div>

          <!-- Kolom 3: QR Code -->
          <div class="bg-white p-6 rounded-xl shadow flex flex-col items-center justify-center">
            <h2 class="text-xl font-semibold mb-4">Scan QR Code</h2>
            <img src="/img/qrcode.png" alt="QR Code Donasi" class="w-64 h-64 object-contain"/>
            <p class="mt-2 text-sm text-gray-600 text-center">Silakan scan untuk donasi via e-wallet</p>
          </div>

        </div>
      </div>
    </div>
  </body>
