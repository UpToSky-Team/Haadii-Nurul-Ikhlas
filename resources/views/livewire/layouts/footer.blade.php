<footer class="bg-[#3B9B3C] py-12 text-white"
    style="background-image: url('/img/bg-jumbotron-update.png'); background-size: cover; background-position: center;">
    <div class="mx-auto max-w-7xl px-6">

        <!-- Konten Utama -->
        <div class="mb-10 grid grid-cols-1 gap-10 md:grid-cols-3">

            <!-- Logo & Deskripsi -->
            <div>
                <img src="{{ $yayasan->isNotEmpty() && $yayasan->first()->logo ? Storage::url($yayasan->first()->logo) : '/img/logoyayasan.png' }}"
                    alt="Logo Yayasan"
                    class="mb-4 h-20 w-20 rounded-full bg-white shadow-lg transition-transform duration-300 hover:scale-105">
                <div class="text-sm leading-relaxed text-white/90">
                    {!! $yayasan->isNotEmpty() && $yayasan->first()->deskripsi
                        ? $yayasan->first()->deskripsi
                        : 'Yayasan Haadii Nurul Ikhlas' !!}
                </div>
            </div>

            <!-- Navigasi -->
            <div>
                <h4 class="mb-4 text-lg font-semibold text-[#FDC261]">Navigasi</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="transition hover:text-[#FDC261] hover:underline">Beranda</a></li>
                    <li><a href="#" class="transition hover:text-[#FDC261] hover:underline">Profil</a></li>
                    <li><a href="#" class="transition hover:text-[#FDC261] hover:underline">Program</a></li>
                    <li><a href="#" class="transition hover:text-[#FDC261] hover:underline">Donasi</a></li>
                    <li><a href="#" class="transition hover:text-[#FDC261] hover:underline">Dokumentasi</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h4 class="mb-4 text-lg font-semibold text-[#FDC261]">Kontak</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center space-x-2">
                        <img src="/img/icon/whatsapp.png" alt="WhatsApp" class="h-5 w-5">
                        <span>{{ $yayasan->isNotEmpty() && $yayasan->first()->no_telepon ? $yayasan->first()->no_telepon : '---' }}</span>
                    </li>
                </ul>
                <p class="mt-4 text-sm leading-relaxed text-white/90">
                    {{ $yayasan->isNotEmpty() && $yayasan->first()->alamat ? $yayasan->first()->alamat : 'Yayasan Haadii Nurul Ikhlas' }}
                </p>
            </div>

        </div>

        <!-- Divider -->
        <div class="mb-6 border-t border-white/30"></div>

        <!-- Bottom Footer -->
        <div class="flex flex-col items-center justify-between gap-4 text-sm md:flex-row">
            <p>© 2025 Yayasan Haadi Nurul Ikhlas</p>

            <div class="flex gap-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Terms of Use</a>
            </div>

            <div class="flex gap-3">
                @if ($yayasan->isNotEmpty() && $yayasan->first()->instagram)
                    <a href="{{ $yayasan->first()->instagram }}">
                        <img src="/img/icon/instagram.png" alt="Instagram"
                            class="h-6 w-6 transition-transform hover:scale-110">
                    </a>
                @else
                    <a href="#">
                        <img src="/img/icon/instagram.png" alt="Instagram"
                            class="h-6 w-6 cursor-not-allowed opacity-50">
                    </a>
                @endif
                @if ($yayasan->isNotEmpty() && $yayasan->first()->tiktok)
                    <a href="{{ $yayasan->first()->tiktok }}">
                        <img src="/img/icon/tiktok.png" alt="TikTok"
                            class="h-6 w-6 transition-transform hover:scale-110">
                    </a>
                @else
                    <a href="#">
                        <img src="/img/icon/tiktok.png" alt="TikTok" class="h-6 w-6 cursor-not-allowed opacity-50">
                    </a>
                @endif

                @if ($yayasan->isNotEmpty() && $yayasan->first()->youtube)
                    <a href="{{ $yayasan->first()->youtube }}">
                        <img src="/img/icon/youtube.png" alt="YouTube"
                            class="h-6 w-6 transition-transform hover:scale-110">
                    </a>
                @else
                    <a href="#">
                        <img src="/img/icon/youtube.png" alt="YouTube" class="h-6 w-6 cursor-not-allowed opacity-50">
                    </a>
                @endif

                @if ($yayasan->isNotEmpty() && $yayasan->first()->twitter)
                    <a href="{{ $yayasan->first()->twitter }}">
                        <img src="/img/icon/twitter.png" alt="Twitter"
                            class="h-6 w-6 transition-transform hover:scale-110">
                    </a>
                @else
                    <a href="#">
                        <img src="/img/icon/twitter.png" alt="Twitter" class="h-6 w-6 cursor-not-allowed opacity-50">
                    </a>
                @endif

                @if ($yayasan->isNotEmpty() && $yayasan->first()->facebook)
                    <a href="{{ $yayasan->first()->facebook }}">
                        <img src="/img/icon/facebook.png" alt="Facebook"
                            class="h-6 w-6 transition-transform hover:scale-110">
                    </a>
                @else
                    <a href="#">
                        <img src="/img/icon/facebook.png" alt="Facebook" class="h-6 w-6 cursor-not-allowed opacity-50">
                    </a>
                @endif
            </div>
        </div>

    </div>
</footer>
