<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Autobedrijf Overbeek - Sinds 1963</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.png">
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://kit.fontawesome.com/4180a39c11.js" crossorigin="anonymous"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap');
    body{font-family:'Inter Tight';margin:0;padding:0;box-sizing:border-box}
    @keyframes pulse-green{0%{transform:scale(1);background:#22c55e;box-shadow:0 0 0 0 rgba(34,197,94,.7)}70%{transform:scale(1.05);box-shadow:0 0 0 10px rgba(34,197,94,0)}100%{transform:scale(1);box-shadow:0 0 0 0 rgba(34,197,94,0)}}
    .pulse{animation:pulse-green 2s infinite;background-color:#22c55e}
  </style>
</head>
<body class="bg-[#0D1821]">
  <!-- Chat bubble -->
  <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full fixed bottom-4 right-4 flex items-center justify-center pulse">
    <svg width="34" height="34" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 12C3.5 7.30558 7.30558 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.5 13.6439 3.5 12ZM12 1.5C6.20101 1.5 1.5 6.20101 1.5 12C1.5 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z" fill="#fff"/>
    </svg>
  </div>

  <!-- HERO -->
  <div class="w-full h-auto p-2 sm:p-3">
    <div class="w-full h-[420px] sm:h-[520px] md:h-[630px] relative overflow-hidden rounded-xl">
      <video class="w-full h-full inset-0 object-cover absolute z-[1]" src="/assets/hero-bg-home.mp4" autoplay muted loop playsinline></video>
      <div class="w-full h-full absolute z-[2] bg-[#0D1821]/50">
        @include('layouts.header')
        <div class="max-w-[1400px] mx-auto h-full flex flex-col justify-center px-4">
          <h1 class="text-3xl sm:text-4xl md:text-5xl text-white font-bold mb-4 max-w-[30rem]">Dé vertrouwde garage in Hummelo sinds 1963</h1>
          <p class="text-sm sm:text-base text-white font-medium max-w-[30rem] opacity-80 mb-5">
            Bij ons staat betrouwbaarheid, service en persoonlijk contact al drie generaties centraal. Van onderhoud en occasions tot tanken en verhuur. Wij houden u mobiel.
          </p>
          <div class="flex items-center gap-2">
            <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="w-full xs:w-auto sm:w-auto px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition duration-300 text-white font-semibold text-[15px] py-3 cursor-pointer text-center">Afspraak inplannen</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- DIENSTEN GRID -->
  <div class="w-full h-auto">
    <div class="max-w-[1400px] mx-auto h-full pt-10 sm:pt-[5rem] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 sm:gap-4 px-4">
      <!-- Kaarten -->
      <a href="{{ route('diensten.show','apk') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-file-certificate fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">APK-keuring</h3>
          <p class="text-white/90 text-xs sm:text-sm">Jaarlijkse veiligheidscontrole volgens RDW-richtlijnen.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','onderhoud') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-wrench-simple fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Onderhoudsbeurt</h3>
          <p class="text-white/90 text-xs sm:text-sm">Periodiek onderhoud voor optimale betrouwbaarheid.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','olie-en-filters') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-oil-can-drip fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Olie &amp; filters vervangen</h3>
          <p class="text-white/90 text-xs sm:text-sm">Verversing van motorolie en vervanging van oliefilter, luchtfilter, interieurfilter.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','bandenservice') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-tire-flat fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Bandenservice</h3>
          <p class="text-white/90 text-xs sm:text-sm">Wisselen, balanceren, uitlijnen en nieuwe banden monteren.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','aircoservice') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-wind fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Aircoservice</h3>
          <p class="text-white/90 text-xs sm:text-sm">Vullen, reinigen en controleren van de airconditioning.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','remmen-vervangen') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-brake-warning fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Remmen vervangen</h3>
          <p class="text-white/90 text-xs sm:text-sm">Vervanging en controle van remblokken, schijven en vloeistof.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','accu-service') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-car-battery fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Accu controle en vervangen</h3>
          <p class="text-white/90 text-xs sm:text-sm">Testen of vervangen van een zwakke of lege accu.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','storingsdiagnose') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-bug fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Storingsdiagnose</h3>
          <p class="text-white/90 text-xs sm:text-sm">Uitlezen en verhelpen van motorstoringen en dashboardlampjes.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','distributieriem') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-link-simple fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Distributieriem vervangen</h3>
          <p class="text-white/90 text-xs sm:text-sm">Tijdige vervanging voorkomt ernstige motorschade.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','ruitreparatie-vervanging') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-diamond-half-stroke fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Ruitreparatie &amp; vervanging</h3>
          <p class="text-white/90 text-xs sm:text-sm">Herstel of vervanging van voorruiten en sterretjes.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','trekhaak-montage') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-truck-tow fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Trekhaak montage</h3>
          <p class="text-white/90 text-xs sm:text-sm">Montage van vaste of afneembare trekhaken.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','uitlaat-roetfilter') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-mask-face fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Uitlaat &amp; roetfilterservice</h3>
          <p class="text-white/90 text-xs sm:text-sm">Reparatie of vervanging bij lekkage of vervuiling.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','schokdempers-vering') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-car-bump fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Schokdempers &amp; vering</h3>
          <p class="text-white/90 text-xs sm:text-sm">Vervanging voor veilig rijcomfort en grip op de weg.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','koppeling-vervangen') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-crutch fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Koppeling vervangen</h3>
          <p class="text-white/90 text-xs sm:text-sm">Nieuwe koppeling bij slippen of zwaar schakelen.</p>
        </div>
      </a>

      <a href="{{ route('diensten.show','verlichting') }}" class="flex items-center gap-4 bg-[#142533] rounded-xl p-4 sm:p-[1rem] border border-transparent hover:border-blue-500 transition duration-300 min-h-[92px]">
        <i class="fa-solid fa-lightbulb fa-lg sm:fa-xl" style="color:#ffffff;"></i>
        <div class="w-px self-stretch bg-white/10"></div>
        <div class="min-w-0">
          <h3 class="text-white font-semibold text-base sm:text-lg truncate">Verlichting</h3>
          <p class="text-white/90 text-xs sm:text-sm">Correct werkende koplampen, remlichten en signalering.</p>
        </div>
      </a>

      <!-- CTA tile -->
      <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="bg-blue-500 rounded-xl p-4 sm:p-[1rem] border border-blue-500 hover:bg-blue-600 hover:border-blue-600 transition duration-300 text-white flex flex-col justify-center">
        <h3 class="font-semibold text-base sm:text-lg">Meer hulp nodig?</h3>
        <p class="opacity-90 text-sm">Plan binnen 1 minuut jouw afspraak in via onze online tool!</p>
      </a>
    </div>
  </div>

  <!-- FAMILIE BLOK -->
  <div class="w-full h-auto">
    <div class="max-w-[1400px] mx-auto py-12 sm:py-[5rem] flex flex-col md:flex-row gap-6 md:gap-16 items-stretch px-4" id="familie">
      <div class="md:w-1/2 w-full flex gap-4">
        <div class="flex-1 aspect-[3/4] md:aspect-auto bg-[url(/assets/under-car.jpg)] bg-center bg-cover rounded-xl"></div>
        <div class="flex-1 flex flex-col gap-4">
          <div class="w-full aspect-[16/10] md:h-1/2 bg-[url(/assets/under-car-2.jpg)] bg-center bg-cover rounded-xl"></div>
          <div class="w-full aspect-[16/10] md:h-1/2 bg-[url(/assets/checking-laptop.jpg)] bg-center bg-cover rounded-xl"></div>
        </div>
      </div>

      <div class="md:w-1/2 w-full flex flex-col justify-center">
        <h2 class="text-2xl sm:text-3xl md:text-4xl text-white font-bold">Familiebedrijf Overbeek</h2>
        <h3 class="text-base sm:text-lg md:text-xl text-[#2b7fff] font-semibold mb-4 sm:mb-6">Sinds 1963 een vertrouwd adres in Hummelo</h3>
        <p class="text-sm sm:text-base text-white/90 mb-3">Autobedrijf Overbeek is een echt familiebedrijf, al drie generaties actief in Hummelo. Wij staan voor persoonlijke service, eerlijke prijzen en jarenlange vakkennis.</p>
        <p class="text-sm sm:text-base text-white/90 mb-3">Of het nu gaat om onderhoud, APK of een betrouwbare occasion. Wij helpen u graag verder.</p>
        <p class="text-sm sm:text-base text-white font-semibold border-l-2 border-[#2b7fff] pl-4 mb-3 italic">"We behandelen elke klant alsof het familie is."</p>
        <p class="text-sm sm:text-base text-white/90 mb-6 md:mb-10">Dorpsstraat 4 – Hummelo</p>
        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-6">
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="w-full sm:w-auto px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 text-center">Plan een afspraak in</a>
          <a href="#" class="w-full sm:w-auto text-center px-6 rounded-[3px] bg-[#0D1821] hover:bg-[#0D182195] transition text-white font-semibold text-[15px] py-3">Over Autobedrijf Overbeek</a>
        </div>
      </div>
    </div>
  </div>

  <!-- OCCASIONS -->
  <div class="w-full h-auto bg-white">
    <div class="max-w-[1440px] mx-auto py-12 sm:py-[5rem] px-4 sm:px-[1.5rem] flex flex-col items-center" id="occasions">
      <div class="w-full flex flex-col sm:flex-row gap-6 sm:gap-8 justify-between items-start sm:items-end mb-6 sm:mb-8">
        <div class="w-full sm:w-1/2">
          <h2 class="text-2xl sm:text-3xl md:text-4xl text-[#0D1821] font-bold leading-tight">Altijd een betrouwbare<br class="hidden sm:block">occasion op voorraad</h2>
        </div>
        <div class="w-full sm:w-1/2 sm:flex sm:justify-end">
          <p class="text-sm sm:text-base text-[#0D1821] font-medium opacity-90 sm:text-end sm:max-w-[80%]">
            Op zoek naar een nieuwe auto? Wij hebben een continu wisselend aanbod van jonge occasions. Volledig gecontroleerd, rijklaar en inclusief garantie.
          </p>
        </div>
      </div>

      <!-- Cards grid -->
      <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-8">
        <!-- Card (dupliceer of loop eroverheen in Blade) -->
        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4">
            <p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8">
            <p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p>
          </div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>

        <!-- Kopieer bovenstaande card x3 (zoals je had) -->
        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4">
            <p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8">
            <p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p>
          </div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>

        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4">
            <p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8">
            <p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p>
          </div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>

        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base">
            <p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4">
            <p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p>
          </div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8">
            <p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p>
          </div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>
      </div>

      <!-- Tweede grid (idem) -->
      <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-8">
        <!-- Herhaal dezelfde 4 kaarten zoals hierboven (je had ze al staan) -->
        <!-- ... (laat jouw bestaande inhoud hier staan, maar pas aspect/typo/padding aan zoals in eerste 4) ... -->
        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4"><p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8"><p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p></div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>

        <!-- kopie: 3 extra cards -->
        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4"><p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8"><p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p></div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>

        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4"><p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8"><p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p></div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>

        <div class="p-4 sm:p-[1.5rem] rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
          <div class="w-full aspect-[4/3] sm:aspect-[1/1] bg-[url(https://media2.taggle.nl/658/6588794/20250415185904674837_35419_org.jpg)] bg-cover bg-center rounded-xl"></div>
          <h3 class="text-xl sm:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 sm:mt-6">Citroën C3 Aircross</h3>
          <h3 class="text-sm sm:text-md text-[#0D1821] font-medium leading-tight mb-4 sm:mb-6">1.2 PureTech S&S Shine</h3>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Bouwjaar :</p><p class="text-[#0D1821] font-medium opacity-80">2019</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base"><p class="text-[#0D1821] font-medium opacity-80">Kilometerstand :</p><p class="text-[#0D1821] font-medium opacity-80">88.273</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-3 sm:mb-4"><p class="text-[#0D1821] font-medium opacity-80">Brandstof :</p><p class="text-[#0D1821] font-medium opacity-80">Benzine</p></div>
          <div class="w-full flex items-center justify-between text-sm sm:text-base mb-5 sm:mb-8"><p class="text-[#0D1821] font-medium opacity-80">Prijs :</p><p class="text-[#0D1821] font-medium opacity-80">€ 13.750</p></div>
          <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="text-center w-full px-6 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk occasion</a>
        </div>
      </div>

      <a href="https://www.taggle.nl/632279" target="_blank" class="text-center w-full sm:w-auto px-6 rounded-[3px] bg-[#0D1821] hover:bg-[#0D1821]/90 transition duration-300 text-white font-semibold text-[15px] py-3 cursor-pointer">Bekijk al onze occasions</a>
    </div>
  </div>

  @include('layouts.footer')
</body>
</html>
