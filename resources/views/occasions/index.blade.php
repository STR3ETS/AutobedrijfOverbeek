{{-- resources/views/occasions/index.blade.php --}}
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Occasions | Autobedrijf Overbeek</title>
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

    {{-- Hero --}}
    <div class="w-full h-auto p-2">
        <div class="w-full h-[420px] md:h-[520px] lg:h-[600px] relative overflow-hidden rounded-xl">
            <video class="w-full h-full inset-0 object-cover absolute z-[1]" src="/assets/hero-bg-home.mp4" autoplay muted loop playsinline></video>
            <div class="w-full h-full absolute z-[2] bg-[#0D1821]/50">
                @include('layouts.header')
                <div class="max-w-[1400px] mx-auto h-full flex flex-col justify-center px-4">
                    <h1 class="text-3xl md:text-5xl text-white font-bold mb-4 md:mb-6 max-w-[34rem]">Occasions</h1>
                    <p class="text-sm md:text-base text-white/80 font-medium max-w-[34rem] mb-5">
                        Betrouwbare, rijklare occasions met garantie. Bekijk ons actuele aanbod of kom langs voor een proefrit.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ $planItUrl }}" target="_blank" class="inline-block px-6 py-3 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px]">Afspraak inplannen</a>
                        <a href="{{ $taggleUrl }}" target="_blank" class="inline-block px-6 py-3 rounded-[3px] bg-white/10 hover:bg-white/15 transition text-white font-semibold text-[15px]">Volledig aanbod</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Grid occasions --}}
    <div class="w-full h-auto">
        <div class="max-w-[1400px] mx-auto px-4 py-10 md:py-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                @forelse($occasions as $car)
                    <div class="p-4 md:p-6 rounded-xl bg-gray-100 flex flex-col ring-1 ring-[#eeeeee]">
                        <div class="w-full aspect-[1/1] bg-[url('{{ $car['image'] }}')] bg-cover bg-center rounded-xl"></div>
                        <h3 class="text-xl md:text-2xl text-[#0D1821] font-semibold leading-tight mt-4 md:mt-6">{{ $car['title'] }}</h3>
                        <h4 class="text-sm md:text-base text-[#0D1821] font-medium leading-tight mb-4 md:mb-6">{{ $car['subtitle'] }}</h4>

                        <div class="space-y-1.5 text-[#0D1821] opacity-80 text-sm md:text-base">
                            <div class="flex items-center justify-between"><span>Bouwjaar:</span><span>{{ $car['year'] }}</span></div>
                            <div class="flex items-center justify-between"><span>Kilometerstand:</span><span>{{ $car['km'] }}</span></div>
                            <div class="flex items-center justify-between"><span>Brandstof:</span><span>{{ $car['fuel'] }}</span></div>
                        </div>

                        <div class="flex items-center justify-between mt-4 md:mt-6 mb-4">
                            <span class="text-[#0D1821] opacity-80">Prijs:</span>
                            <span class="text-[#0D1821] font-semibold">{{ $car['price'] }}</span>
                        </div>

                        <a href="{{ $car['url'] }}" target="_blank" class="text-center w-full px-6 py-3 rounded-[3px] bg-blue-500 hover:bg-blue-600 transition text-white font-semibold text-[15px]">Bekijk occasion</a>
                    </div>
                @empty
                    <div class="col-span-full text-white/80">Geen occasions gevonden.</div>
                @endforelse
            </div>

            <div class="mt-10 text-center">
                <a href="{{ $taggleUrl }}" target="_blank" class="inline-block px-6 py-3 rounded-[3px] bg-[#0D1821] hover:bg-[#0D1821]/90 transition text-white font-semibold text-[15px]">
                    Bekijk al onze occasions
                </a>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
