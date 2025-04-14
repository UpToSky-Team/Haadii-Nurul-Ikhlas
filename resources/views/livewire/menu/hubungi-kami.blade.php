<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="container mx-auto px-6 py-12 max-w-4xl pt-40">
        <nav class="flex px-5 py-3 border border-black/30 rounded-lg bg-white text-black" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">

              <!-- Item 1: Home -->
              <li class="inline-flex items-center">
                <a href="/" class="group inline-flex items-center text-sm font-medium text-black hover:text-green-500">
                  <svg class="w-3 h-3 me-2.5 text-black group-hover:text-green-500" aria-hidden="true"
                       xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Home
                </a>
              </li>

              <!-- Item 2: Hubungi Kami -->
              <li>
                <div class="flex items-center">
                  <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                       fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <a href="/hubungi-kami" class="ms-1 text-sm font-medium text-black hover:text-green-500 md:ms-2">Hubungi Kami</a>
                </div>
              </li>
            </ol>
          </nav>
        <div class="max-w-6xl mx-auto pt-[120px] px-6 sm:px-6 lg:px-8 py-10">
          <h1 class="text-3xl font-bold text-center mb-10">Kontak Kami</h1>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Informasi & Form -->
            <div class="space-y-6">
              <!-- Info Kontak -->
              <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-xl font-semibold mb-4">Informasi Yayasan</h2>
                <p><strong>Alamat:</strong> Jl. Contoh Alamat No. 123, Citeureup, Bogor</p>
                <p><strong>Email:</strong> yayasan@contoh.org</p>
                <p><strong>Telepon:</strong> 0812-3456-7890</p>
              </div>

              <!-- Form Kontak -->
              <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="text-xl font-semibold mb-4">Kirim Pesan</h2>
                <form class="space-y-4">
                  <input type="text" placeholder="Nama Anda" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"/>
                  <input type="email" placeholder="Email Anda" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"/>
                  <textarea rows="4" placeholder="Pesan Anda" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-emerald-500"></textarea>
                  <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-md hover:bg-emerald-700 transition">Kirim</button>
                </form>
              </div>
            </div>

            <!-- Peta Lokasi -->
            <div class="bg-white p-6 rounded-xl shadow h-[500px]">
              <h2 class="text-xl font-semibold mb-4">Lokasi Yayasan</h2>
              <div class="h-full w-full rounded-lg overflow-hidden">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19456.85546076145!2d110.24969991199238!3d-7.775094115388911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af7f9d225b59f%3A0xfbe9d22c89738c50!2sPerumahan%20Griya%20Moyudan%20Asri!5e1!3m2!1sid!2sid!4v1744458606974!5m2!1sid!2sid"
                  width="100%"
                  height="100%"
                  style="border:0;"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></https:>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
