<x-layout>
  <x-bar />

  <div class="min-h-screen bg-white flex items-center justify-center px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16 max-w-7xl w-full">

      @php
        $videos = [
          ['src' => 'img/video/Video2.mp4', 'title' => 'Tarjetas de crédito: ¿Qué son y cómo usarlas responsablemente?', 'desc' => 'El siguiente video muestra lo que es una tarjeta de crédito, también los beneficios que te puede brindar. Hacer uso responsable es clave.'],
          ['src' => 'img/video/Video1.mp4', 'title' => 'Conceptos clave', 'desc' => 'Este video explicará los conceptos clave de una tarjeta de crédito, como las fechas de corte y pago, estado de cuenta, etc.'],
        ];
      @endphp

      @foreach(range(0,5) as $i)
        @php
          $video = $videos[$i % count($videos)];
        @endphp

        <div
          class="flex flex-col items-center text-center bg-transparent rounded-3xl
                 transform transition duration-500 hover:scale-105 hover:shadow-2xl
                 animate-fadeIn"
          style="animation-delay: {{ 0.15 * $i }}s"
        >
          <div
            class="relative w-full max-w-[700px] pb-[56.25%] rounded-t-3xl overflow-hidden bg-transparent
                   group hover:animate-pulse"
          >
            <video
              class="absolute top-0 left-0 w-full h-full object-cover rounded-t-3xl bg-transparent
                     transition-transform duration-300 group-hover:scale-105"
              controls preload="metadata"
              playsinline
              muted
            >
              <source src="{{ asset($video['src']) }}" type="video/mp4" />
              Tu navegador no soporta el video.
            </video>

            <!-- Botón flotante simulado -->
            <button
              type="button"
              class="absolute bottom-3 right-3 bg-blue-700 text-white rounded-full p-3 opacity-0
                     group-hover:opacity-100 transition-opacity duration-300 shadow-lg
                     hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500"
              aria-label="Play/Pause"
            >
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-6.518-3.76A1 1 0 007 8.343v7.314a1 1 0 001.234.97l6.518-3.76a1 1 0 000-1.718z" />
              </svg>
            </button>
          </div>

          <h5
            class="mt-6 px-6 text-2xl md:text-3xl font-semibold text-blue-900 leading-tight
                   transition-colors duration-300 hover:text-blue-700"
          >
            {{ $video['title'] }}
          </h5>
          <p
            class="mt-3 px-8 mb-8 text-blue-800 font-medium max-w-md mx-auto leading-relaxed tracking-wide
                   transition-colors duration-300 hover:text-blue-600"
          >
            {{ $video['desc'] }}
          </p>
        </div>
      @endforeach

    </div>
  </div>

  <style>
    @keyframes fadeIn {
      0% {
        opacity: 0;
        transform: translateY(10px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .animate-fadeIn {
      animation-name: fadeIn;
      animation-fill-mode: forwards;
      animation-duration: 0.5s;
      animation-timing-function: ease-out;
      opacity: 0;
    }
  </style>
</x-layout>
