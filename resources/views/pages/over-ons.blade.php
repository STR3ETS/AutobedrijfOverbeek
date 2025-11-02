{{-- resources/views/pages/over-ons.blade.php --}}
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons | Autobedrijf Overbeek</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/4180a39c11.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap');
        body{font-family:'Inter Tight';margin:0;padding:0;box-sizing:border-box}
        @keyframes pulse-green{0%{transform:scale(1);background:#22c55e;box-shadow:0 0 0 0 rgba(34,197,94,.7)}70%{transform:scale(1.05);box-shadow:0 0 0 10px rgba(34,197,94,0)}100%{transform:scale(1);box-shadow:0 0 0 0 rgba(34,197,94,0)}}
        .pulse{animation:pulse-green 2s infinite;background-color:#22c55e}
    </style>
</head>
<body class="bg-[#0D1821]">

    {{-- Chat bubble --}}
    <div class="w-14 h-14 md:w-16 md:h-16 rounded-full fixed bottom-4 right-4 flex items-center justify-center pulse">
        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 12C3.5 7.30558 7.30558 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.5 13.6439 3.5 12ZM12 1.5C6.20101 1.5 1.5 6.20101 1.5 12C1.5 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z" fill="#fff"/>
        </svg>
    </div>

    @include('layouts.header')

    {{-- Hero --}}
    <div class="w-full h-auto p-2">
        <div class="w-full h-[420px] md:h-[520px] lg:h-[600px] relative overflow-hidden rounded-xl">
            <video class="w-full h-full inset-0 object-cover absolute z-[1]" src="/assets/hero-bg-home.mp4" autoplay muted loop playsinline></video>
            <div class="w-full h-full absolute z-[2] bg-[#0D1821]/50">
                <div class="max-w-[1400px] mx-auto h-full flex flex-col justify-center px-4">
                    <h1 class="text-3xl md:text-5xl text-white font-bold mb-4 md:mb-6 max-w-[34rem]">Over ons</h1>
                    <p class="text-sm md:text-base text-white/80 font-medium max-w-[34rem]">
                        Een familiebedrijf met drie generaties vakmanschap. Eerlijke service, persoonlijke aandacht en betrouwbare mobiliteit sinds 1963.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Familie / verhaal --}}
    <div class="w-full h-auto">
        <div class="max-w-[1400px] mx-auto px-4 py-12 md:py-20 flex flex-col lg:flex-row gap-8 lg:gap-16 items-stretch">
            <div class="w-full lg:w-1/2 flex gap-4">
                <div class="flex-1 h-[260px] md:h-auto bg-[url('/assets/under-car.jpg')] bg-center bg-cover rounded-xl"></div>
                <div class="flex-1 flex flex-col gap-4">
                    <div class="w-full h-[125px] md:h-1/2 bg-[url('/assets/under-car-2.jpg')] bg-center bg-cover rounded-xl"></div>
                    <div class="w-full h-[125px] md:h-1/2 bg-[url('/assets/checking-laptop.jpg')] bg-center bg-cover rounded-xl"></div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col justify-center">
                <h2 class="text-2xl md:text-4xl text-white font-bold">Familiebedrijf Overbeek</h2>
                <h3 class="text-base md:text-xl text-[#2b7fff] font-semibold mb-4 md:mb-6">Sinds 1963 een vertrouwd adres in Hummelo</h3>
                <p class="text-white/90 leading-relaxed mb-3">
                    Autobedrijf Overbeek staat voor betrouwbaarheid en vakmanschap. In onze moderne werkplaats combineren we jarenlange ervaring met de nieuwste apparatuur.
                </p>
                <p class="text-white/90 leading-relaxed mb-3">
                    Of het nu gaat om APK, onderhoud, aircoservice of storingsdiagnose: we denken met u mee en houden u mobiel. Ons team kent korte lijnen en geeft eerlijk advies.
                </p>
                <p class="text-white font-semibold border-l-2 border-[#2b7fff] pl-4 italic mb-4">"We behandelen elke klant alsof het familie is."</p>
                <p class="text-white/90 mb-8">Dorpsstraat 4 – Hummelo</p>
                <div class="flex flex-wrap gap-3">
                    <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" class="px-6 py-3 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px]">Plan een afspraak in</a>
                    <a href="https://www.taggle.nl/632279" target="_blank" rel="noopener" class="px-6 py-3 rounded-[3px] bg-white/10 hover:bg-white/15 transition text-white font-semibold text-[15px]">Bekijk occasions</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Waarden / USP --}}
    <div class="w-full h-auto bg-white">
        <div class="max-w-[1400px] mx-auto px-4 py-12 md:py-20">
            <h2 class="text-2xl md:text-4xl text-[#0D1821] font-bold text-center mb-8">Waar wij voor staan</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                @php
                    $usp = [
                        ['icon' => 'fa-handshake', 'title' => 'Eerlijk advies', 'desc' => 'Transparant en duidelijk: u weet vooraf waar u aan toe bent.'],
                        ['icon' => 'fa-screwdriver-wrench', 'title' => 'Vakmanschap', 'desc' => 'Geschoolde monteurs, moderne apparatuur en originele onderdelen.'],
                        ['icon' => 'fa-clock', 'title' => 'Snel geholpen', 'desc' => 'We plannen efficiënt en denken mee met uw agenda.'],
                        ['icon' => 'fa-shield-halved', 'title' => 'Garantie', 'desc' => 'Rijklare occasions en reparaties met garantie.'],
                    ];
                @endphp

                @foreach($usp as $card)
                    <div class="rounded-xl p-5 ring-1 ring-[#eeeeee] bg-gray-50">
                        <div class="w-10 h-10 rounded-full bg-[#0D1821] text-white flex items-center justify-center mb-4">
                            <i class="fa-solid {{ $card['icon'] }}"></i>
                        </div>
                        <h3 class="text-[#0D1821] font-semibold text-lg mb-1">{{ $card['title'] }}</h3>
                        <p class="text-[#0D1821]/80 text-sm leading-relaxed">{{ $card['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
