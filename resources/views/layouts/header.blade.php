{{-- Header --}}
<div class="absolute z-[500] top-2 left-0 right-0 ml-auto mr-auto max-w-[1400px] w-full py-[1rem] flex items-center justify-between px-3 md:px-0">
  <a href="/" class="shrink-0" aria-label="Ga naar Home">
    <img src="/assets/logo-overbeek.png" alt="Autobedrijf Overbeek" class="max-w-[150px] lg:max-w-[200px]">
  </a>

  {{-- Desktop navigatie --}}
  <ul class="hidden lg:flex items-center gap-[3rem] font-semibold">
    <li>
      <a href="{{ url('/') }}" class="text-[15px] text-white hover:underline">Home</a>
    </li>

    {{-- Diensten (desktop dropdown) --}}
    <li class="relative group pt-0.5">
      <a href="{{ route('diensten.show','apk') }}" class="text-[15px] text-white hover:underline flex items-center gap-2">
        Diensten
        <i class="fa-solid fa-caret-down fa-xs" style="color:#ffffff;"></i>
      </a>

      <div class="absolute left-0 top-full pt-6 -mt-1.5 hidden group-hover:block z-50">
        <ul class="bg-white overflow-hidden p-2 rounded-md shadow-lg text-black w-[540px] grid grid-cols-2">
          <li><a href="{{ route('diensten.show','apk') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">APK-keuring</a></li>
          <li><a href="{{ route('diensten.show','onderhoud') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Kleine of grote onderhoudsbeurt</a></li>

          <li><a href="{{ route('diensten.show','olie-en-filters') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Olie &amp; filters vervangen</a></li>
          <li><a href="{{ route('diensten.show','bandenservice') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Bandenservice</a></li>

          <li><a href="{{ route('diensten.show','aircoservice') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Aircoservice</a></li>
          <li><a href="{{ route('diensten.show','remmen-vervangen') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Remmen vervangen</a></li>

          <li><a href="{{ route('diensten.show','accu-service') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Accu controle &amp; vervanging</a></li>
          <li><a href="{{ route('diensten.show','storingsdiagnose') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Storingsdiagnose</a></li>

          <li><a href="{{ route('diensten.show','distributieriem') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Distributieriem vervangen</a></li>
          <li><a href="{{ route('diensten.show','ruitreparatie-vervanging') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Ruitreparatie &amp; vervanging</a></li>

          <li><a href="{{ route('diensten.show','trekhaak-montage') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Trekhaak montage</a></li>
          <li><a href="{{ route('diensten.show','uitlaat-roetfilter') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Uitlaat &amp; roetfilterservice</a></li>

          <li><a href="{{ route('diensten.show','schokdempers-vering') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Schokdempers &amp; vering</a></li>
          <li><a href="{{ route('diensten.show','koppeling-vervangen') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Koppeling vervangen</a></li>

          <li><a href="{{ route('diensten.show','verlichting') }}" class="block px-4 py-2 hover:bg-gray-100 rounded-md text-sm">Verlichting vervangen &amp; afstellen</a></li>
        </ul>
      </div>
    </li>

    <li>
      <a href="https://www.taggle.nl/632279" target="_blank" rel="noopener" class="text-[15px] text-white hover:underline">Occasions</a>
    </li>
    <li>
      <a href="{{ url('/over-ons') }}" class="text-[15px] text-white hover:underline">Over ons</a>
    </li>
    <li>
      <a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" rel="noopener" class="text-[15px] text-white hover:underline">Afspraak maken</a>
    </li>
  </ul>

  {{-- Hamburger (mobiel) --}}
  <button
    id="navToggle"
    class="block lg:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white/70"
    aria-label="Open menu"
    aria-expanded="false"
    aria-controls="mobileNav"
  >
    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" aria-hidden="true">
      <path d="M4 12H20M4 8H20M4 16H12" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
</div>

{{-- Mobiel menu overlay --}}
<div
  id="mobileNav"
  class="fixed w-full h-[100dvh] inset-0 z-[9999] hidden"
  aria-hidden="true"
>
  {{-- backdrop --}}
  <div class="absolute inset-0 bg-black/60"></div>

  {{-- panel --}}
  <div class="absolute right-0 top-0 h-full w-[88%] max-w-[420px] bg-white shadow-2xl flex flex-col">
    <div class="flex items-center justify-between p-4 border-b border-gray-200">
      <img src="/assets/logo-overbeek-zwart.png" alt="Autobedrijf Overbeek" class="h-8">
      <button id="navClose" class="p-2 rounded-md" aria-label="Sluit menu">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M6 6L18 18M6 18L18 6" stroke="#111827" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>
    </div>

    <nav class="overflow-y-auto p-4">
      <ul class="flex flex-col gap-2 text-[#0D1821]">
        <li><a href="{{ url('/') }}" class="block px-3 py-3 rounded-md hover:bg-gray-100 font-semibold">Home</a></li>

        {{-- Diensten (mobiel accordion) --}}
        <li class="border rounded-md">
          <button
            type="button"
            class="w-full flex items-center justify-between px-3 py-3 font-semibold"
            aria-expanded="false"
            data-accordion-toggle="#mob-diensten"
          >
            Diensten
            <i class="fa-solid fa-caret-down"></i>
          </button>
          <ul id="mob-diensten" class="hidden px-2 pb-2">
            <li><a href="{{ route('diensten.show','apk') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">APK-keuring</a></li>
            <li><a href="{{ route('diensten.show','onderhoud') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Kleine of grote onderhoudsbeurt</a></li>

            <li><a href="{{ route('diensten.show','olie-en-filters') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Olie &amp; filters vervangen</a></li>
            <li><a href="{{ route('diensten.show','bandenservice') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Bandenservice</a></li>

            <li><a href="{{ route('diensten.show','aircoservice') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Aircoservice</a></li>
            <li><a href="{{ route('diensten.show','remmen-vervangen') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Remmen vervangen</a></li>

            <li><a href="{{ route('diensten.show','accu-service') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Accu controle &amp; vervanging</a></li>
            <li><a href="{{ route('diensten.show','storingsdiagnose') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Storingsdiagnose</a></li>

            <li><a href="{{ route('diensten.show','distributieriem') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Distributieriem vervangen</a></li>
            <li><a href="{{ route('diensten.show','ruitreparatie-vervanging') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Ruitreparatie &amp; vervanging</a></li>

            <li><a href="{{ route('diensten.show','trekhaak-montage') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Trekhaak montage</a></li>
            <li><a href="{{ route('diensten.show','uitlaat-roetfilter') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Uitlaat &amp; roetfilterservice</a></li>

            <li><a href="{{ route('diensten.show','schokdempers-vering') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Schokdempers &amp; vering</a></li>
            <li><a href="{{ route('diensten.show','koppeling-vervangen') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Koppeling vervangen</a></li>

            <li><a href="{{ route('diensten.show','verlichting') }}" class="block px-3 py-2 rounded hover:bg-gray-100 text-sm">Verlichting vervangen &amp; afstellen</a></li>
          </ul>
        </li>

        <li><a href="https://www.taggle.nl/632279" target="_blank" rel="noopener" class="block px-3 py-3 rounded-md hover:bg-gray-100 font-semibold">Occasions</a></li>
        <li><a href="{{ url('/over-ons') }}" class="block px-3 py-3 rounded-md hover:bg-gray-100 font-semibold">Over ons</a></li>
        <li><a href="https://www.plan-it-online.com/frontend?ID=1496" target="_blank" rel="noopener" class="block px-3 py-3 rounded-md hover:bg-gray-100 font-semibold">Afspraak maken</a></li>
      </ul>
    </nav>
  </div>
</div>

{{-- Mini script (zonder frameworks) --}}
<script>
  (function () {
    const $toggle = document.getElementById('navToggle');
    const $panel  = document.getElementById('mobileNav');
    const $close  = document.getElementById('navClose');

    function openNav() {
      $panel.classList.remove('hidden');
      $toggle.setAttribute('aria-expanded', 'true');
      $panel.setAttribute('aria-hidden', 'false');
      // kleine fade/slide
      requestAnimationFrame(() => {
        $panel.querySelector('.absolute.inset-0.bg-black\\/60')?.classList.add('backdrop');
      });
      document.body.style.overflow = 'hidden';
    }
    function closeNav() {
      $panel.classList.add('hidden');
      $toggle.setAttribute('aria-expanded', 'false');
      $panel.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    $toggle?.addEventListener('click', openNav);
    $close?.addEventListener('click', closeNav);
    $panel?.addEventListener('click', (e) => {
      // klik buiten panel sluit
      const panelBox = e.target.closest('.shadow-2xl');
      if (!panelBox) closeNav();
    });

    // Accordion toggle(s) in mobiel menu
    document.querySelectorAll('[data-accordion-toggle]').forEach(btn => {
      btn.addEventListener('click', () => {
        const targetSel = btn.getAttribute('data-accordion-toggle');
        const $target = document.querySelector(targetSel);
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!expanded));
        if ($target) $target.classList.toggle('hidden');
      });
    });
  })();
</script>
