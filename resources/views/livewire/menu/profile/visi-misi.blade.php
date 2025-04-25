<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visi Misi Yayasan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in-up {
      animation: fadeInUp 0.8s ease-out;
    }

    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-75  { animation-delay: 0.075s; }
  </style>
</head>
<body class="bg-gray-100 text-gray-800 mt-20 pt-20">

  <div class="flex-grow pb-20 px-6 md:px-20 lg:px-32 pt-32">

    <!-- Breadcrumb -->
    <nav class="flex px-4 py-2 rounded-md bg-white shadow-sm border border-gray-200 mb-6 animate-fade-in-up delay-75" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse text-sm text-gray-500">

        <!-- Home -->
        <li class="inline-flex items-center">
          <a href="/" class="group inline-flex items-center font-medium text-gray-600 hover:text-green-600 transition duration-300">
            <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-green-600" fill="currentColor"
                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1
                       1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            Home
          </a>
        </li>

        <!-- Divider + Profile -->
        <li>
          <div class="flex items-center">
            <svg class="w-3 h-3 mx-1 text-gray-300" fill="none" stroke="currentColor"
                 viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <a href="#" class="ms-1 font-medium text-gray-600 hover:text-green-600 md:ms-2 transition duration-300">Profile</a>
          </div>
        </li>

        <!-- Divider + Sejarah -->
        <li aria-current="page">
          <div class="flex items-center">
            <svg class="w-3 h-3 mx-1 text-gray-300" fill="none" stroke="currentColor"
                 viewBox="0 0 6 10" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="ms-1 font-medium text-gray-800 md:ms-2">Visi Misi</span>
          </div>
        </li>

      </ol>
    </nav>

    <!-- Konten -->
    <div class="pt-6">
      <div class="bg-white p-8 rounded-lg shadow-lg animate-fade-in-up">

        <!-- Judul -->
        <h1 class="text-3xl font-bold text-center text-orange-600 mb-6 text-start animate-fade-in-up delay-100">
          Visi & Misi Yayasan Haadi Nurul Ikhlas
        </h1>

        <!-- Visi -->
        <div class="mb-8">
          <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-start">Visi</h2>
          <div class="text-justify leading-relaxed richeditor-content bg-orange-100 p-4 rounded-lg value-db animate-fade-in-up delay-200">
            {!! $visiMisi->visi !!}
          </div>
        </div>

        <!-- Misi -->
        <div>
          <h2 class="text-2xl font-semibold text-gray-700 mb-3 text-start">Misi</h2>
          <div class="text-justify bg-gray-50 p-6 rounded-lg richeditor-content shadow-sm value-db animate-fade-in-up delay-300">
            {!! $visiMisi->misi !!}
          </div>
        </div>

        <!-- Ajakan -->
        <p class="text-center text-lg font-semibold text-gray-800 mt-6 text-start animate-fade-in-up delay-300">
          Bersama kita wujudkan perubahan nyata untuk masyarakat yang lebih baik!
        </p>

      </div>
    </div>

  </div>
</body>
</html>
