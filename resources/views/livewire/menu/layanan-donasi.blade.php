<body class="bg-gray-100 font-sans text-gray-800">

  <div class="max-w-6xl mx-auto pt-[120px] px-6 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <!-- Kolom 1: Informasi Rekening -->
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

      <!-- Kolom 2: Form Donasi -->
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
</body>
