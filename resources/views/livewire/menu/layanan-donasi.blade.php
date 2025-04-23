<body class="bg-gray-100 font-sans text-gray-800">
    <div class="flex-grow pb-20 px-6 md:px-20 lg:px-32 pt-32">

      <!-- Breadcrumb -->
      <nav class="flex px-5 py-3 rounded-lg bg-white shadow-md text-black mb-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-2 text-sm">
          <li class="inline-flex items-center">
            <a href="/" class="group inline-flex items-center text-black hover:text-emerald-500 transition-all">
              <svg class="w-4 h-4 mr-2 text-gray-600 group-hover:text-emerald-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Home
            </a>
          </li>
          <li class="text-gray-600">/</li>
          <li>
            <a href="/layanan-donasi" class="text-black hover:text-emerald-500 transition-all">Layanan Donasi</a>
          </li>
        </ol>
      </nav>

      <!-- Main Content -->
      <div class="">
        <h1 class="text-3xl sm:text-4xl font-bold mb-8 text-start">Layanan Donasi</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

          <!-- Column 1: Donation Account -->
          <div class="bg-white p-6 rounded-xl shadow-md">
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
        @if (session('success'))
          <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Berhasil!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            </span>
          </div>
        @endif
        <form class="space-y-4" action="{{ route('donasi.send') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="block text-sm font-medium text-gray-700">Donasi Atas Nama <span class="text-red-500">*</span></label>
            <input type="text" name="nama" placeholder="Nama Anda" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
            @error('nama')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" placeholder="Email" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
            @error('email')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="block text-sm font-medium text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
            <input type="tel" name="telepon" placeholder="Nomor Telepon" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
            @error('telepon')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="block text-sm font-medium text-gray-700">Jumlah Donasi <span class="text-red-500">*</span></label>
            <input type="number" name="jumlah_donasi" placeholder="Jumlah Donasi" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
            @error('jumlah_donasi')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="block text-sm font-medium text-gray-700">Jenis Donasi <span class="text-red-500">*</span></label>
            <select name="jenis_donasi" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">
              <option disabled selected>---</option>
              @foreach ($jenis as $data)
              <option value="{{ $data->id_jenis_donasi }}">{{ $data->jenis }}</option>
              @endforeach
            </select>
            @error('jenis_donasi')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="block text-sm font-medium text-gray-700">Nama Bank <span class="text-red-500">*</span></label>
            <select name="nama_bank" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400">
              <option disabled selected>Nama Bank :</option>
              <option value="BRI">BRI</option>
              <option value="BSI">BSI</option>
              <option value="BJB Syariah">BJB Syariah</option>
              <option value="BNI">BNI</option>
              <option value="Mandiri">Mandiri</option>
              <option value="BCA">BCA</option>
            </select>
            @error('nama_bank')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="block text-sm font-medium text-gray-700">Tanggal Transfer <span class="text-red-500">*</span></label>
            <input type="date" name="tanggal_transfer" placeholder="Tanggal Transfer" class="w-full border border-emerald-500 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-400"/>
            @error('tanggal_transfer')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <label class="block text-sm font-medium text-gray-700">Bukti Transfer <span class="text-red-500">*</span></label>
            <input type="file" name="bukti_transfer" class="w-full text-sm text-gray-600"/>
            @error('bukti_transfer')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
          <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-md hover:bg-emerald-700 transition">Konfirmasi Donasi</button>
        </form>
      </div>

          <!-- Column 3: QR Code -->
          <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center justify-center">
            <h2 class="text-xl font-semibold mb-4">Scan QR Code</h2>
            <img src="/img/qrcode.png" alt="QR Code Donasi" class="w-64 h-64 object-contain"/>
            <p class="mt-2 text-sm text-gray-600 text-center">Silakan scan untuk donasi via e-wallet</p>
          </div>

        </div>
      </div>

    </div>
  </body>
