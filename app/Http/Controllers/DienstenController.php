<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DienstenController extends Controller
{
    /**
     * Alle diensten + content.
     * - 'video' mag leeg blijven; dan gebruiken we een fallback hero.
     * - 'intro' is de lead onder de H1.
     * - 'wat_title' is de sectietitel links ("Wat controleren we..." / "Wat doen we...").
     * - 'wat_intro' is de korte uitleg rechts.
     * - 'stappen' zijn de 3 tegels (1/2/3).
     */
    private const DIENSTEN = [
        // Voorbeelden uit jouw bestanden
        'apk' => [
            'title'     => 'APK-keuring',
            'video'     => '/assets/hero-bg-apk.mp4',
            'intro'     => 'De APK (Algemene Periodieke Keuring) is wettelijk verplicht en zorgt dat jouw auto veilig en milieuvriendelijk blijft. Bij Garage Overbeek voeren we de keuring snel en vakkundig uit.',
            'wat_title' => "Wat controleren we\n tijdens de APK?",
            'wat_intro' => 'Tijdens de APK-keuring controleren we jouw auto op alle essentiële punten voor veiligheid en milieuvriendelijkheid. Zo weet je zeker dat je weer veilig de weg op kunt.',
            'stappen'   => [
                ['title' => 'Visuele controle', 'desc' => "Banden, remmen, lichten en\n carrosserie"],
                ['title' => 'Technische keuring', 'desc' => "Stuur, ophanging, uitstoot\n en onderstel"],
                ['title' => 'Rapport & advies', 'desc' => 'Resultaat + eventuele reparatie-aanbeveling'],
            ],
        ],
        'onderhoud' => [
            'title'     => 'Onderhoudsbeurt',
            'video'     => '/assets/hero-bg-onderhoudsbeurt.mp4',
            'intro'     => 'Periodiek onderhoud voorkomt verrassingen en verlengt de levensduur van jouw auto.',
            'wat_title' => "Wat doen we bij\n onderhoud?",
            'wat_intro' => 'Afhankelijk van jouw auto en kilometerstand stemmen we een kleine of grote beurt af.',
            'stappen'   => [
                ['title' => 'Olie & filters vervangen', 'desc' => "Nieuwe olie, lucht-, olie- en\n interieurfilter"],
                ['title' => 'Vloeistoffen & accu checken', 'desc' => 'Bijvullen koel-, rem- en ruitenvloeistof + accutest'],
                ['title' => 'Algemeen technisch nazicht', 'desc' => 'Banden, remmen, verlichting, uitlaat en storingstest'],
            ],
        ],

        // Overige diensten (nieuw)
        'olie-en-filters' => [
            'title'     => 'Olie & filters vervangen',
            'video'     => '/assets/hero-bg-olie.mp4',
            'intro'     => 'Schone olie en filters beschermen je motor en zorgen voor optimale prestaties.',
            'wat_title' => "Wat vervangen we\n en waarom?",
            'wat_intro' => 'We verversen de motorolie en vervangen benodigde filters. Zo blijft je motor schoon en zuinig.',
            'stappen'   => [
                ['title' => 'Motorolie verversen', 'desc' => 'Specifiek type/viscositeit volgens fabrieksspecificaties'],
                ['title' => 'Filters vervangen', 'desc' => 'Oliefilter, luchtfilter en interieurfilter waar nodig'],
                ['title' => 'Controle en reset', 'desc' => 'Onderhoudsindicator reset + lekkagecheck'],
            ],
        ],
        'bandenservice' => [
            'title'     => 'Bandenservice',
            'video'     => '/assets/hero-bg-banden.mp4',
            'intro'     => 'Grip, comfort en veiligheid beginnen bij goede banden.',
            'wat_title' => "Wat hoort bij onze\n bandenservice?",
            'wat_intro' => 'We wisselen, balanceren en controleren profieldiepte en bandenspanning. Uitlijnen indien nodig.',
            'stappen'   => [
                ['title' => 'Wisselen & balanceren', 'desc' => 'Wielen (de)monteren en nauwkeurig balanceren'],
                ['title' => 'Inspectie & advies', 'desc' => 'Profiel, slijtagepatronen en spanningscheck'],
                ['title' => 'Uitlijnen (optioneel)', 'desc' => 'Corrigeert scheefstand en ongelijkmatige slijtage'],
            ],
        ],
        'aircoservice' => [
            'title'     => 'Aircoservice',
            'video'     => '/assets/hero-bg-airco.mp4',
            'intro'     => 'Hou je airco koel én gezond met periodieke service.',
            'wat_title' => "Wat doen we bij\n aircoservice?",
            'wat_intro' => 'We testen, vullen en reinigen je airco. Zo blijft het systeem efficiënt en fris.',
            'stappen'   => [
                ['title' => 'Lektest & drukmeting', 'desc' => 'Controle op werking en eventuele lekkages'],
                ['title' => 'Vullen & olie toevoegen', 'desc' => 'Koudemiddel en compressorolie volgens specificatie'],
                ['title' => 'Reinigen & geurfilter', 'desc' => 'Verdamperreiniger + (optioneel) interieurfilter'],
            ],
        ],
        'remmen-vervangen' => [
            'title'     => 'Remmen vervangen',
            'video'     => '/assets/hero-bg-remmen.mp4',
            'intro'     => 'Krachtige, voorspelbare remmen voor maximale veiligheid.',
            'wat_title' => "Wanneer vervangen we\n remmen?",
            'wat_intro' => 'Bij slijtage-indicatie, trillingen, piepen of verminderde remkracht.',
            'stappen'   => [
                ['title' => 'Diagnose & meting', 'desc' => 'Dikte, scheefloop, warmteplekken en vloeistof'],
                ['title' => 'Montage nieuwe delen', 'desc' => 'Blokken, schijven en hardware volgens OEM-kwaliteit'],
                ['title' => 'Inremadvies & check', 'desc' => 'Correct inremmen + controle op bijgeluiden'],
            ],
        ],
        'accu-service' => [
            'title'     => 'Accu controle en vervangen',
            'video'     => '/assets/hero-bg-accu.mp4',
            'intro'     => 'Startproblemen voor? Met een fitte accu blijf je mobiel.',
            'wat_title' => "Wat houdt accu-service\n in?",
            'wat_intro' => 'We testen de gezondheid, meten laadspanning en vervangen indien nodig.',
            'stappen'   => [
                ['title' => 'Gezondheidstest', 'desc' => 'Startstroom (CCA) en capaciteit'],
                ['title' => 'Laadsysteemcheck', 'desc' => 'Dynamo, spanning en lekstroom'],
                ['title' => 'Vervanging & codering', 'desc' => 'Nieuwe accu + BMS-inleren (indien vereist)'],
            ],
        ],
        'storingsdiagnose' => [
            'title'     => 'Storingsdiagnose',
            'video'     => '/assets/hero-bg-diagnose.mp4',
            'intro'     => 'Dashboardlampje aan? We vinden de oorzaak en lossen het gericht op.',
            'wat_title' => "Hoe pakken we een\n storing aan?",
            'wat_intro' => 'Uitlezen is stap één. Daarna testen we gericht componenten en bedrading.',
            'stappen'   => [
                ['title' => 'OBD-uitlezen', 'desc' => 'Foutcodes, freeze-frames en live data'],
                ['title' => 'Metingen & tests', 'desc' => 'Druk, vacuüm, spanning, signaalvormen'],
                ['title' => 'Plan & reparatie', 'desc' => 'Heldere uitleg + doelgerichte oplossing'],
            ],
        ],
        'distributieriem' => [
            'title'     => 'Distributieriem vervangen',
            'video'     => '/assets/hero-bg-riem.mp4',
            'intro'     => 'Vervang op tijd — een gebroken riem veroorzaakt zware motorschade.',
            'wat_title' => "Wat vervangen we\n standaard?",
            'wat_intro' => 'Riem, geleiders, spanrollen en vaak de waterpomp + koelvloeistof.',
            'stappen'   => [
                ['title' => 'Controle interval', 'desc' => 'Volgens fabrieksdata (km / tijd)'],
                ['title' => 'Volledige set', 'desc' => 'Riem, rollen, pakkingen en waterpomp (indien vereist)'],
                ['title' => 'Nastellen & testen', 'desc' => 'Timingcontrole en proefrit'],
            ],
        ],
        'ruitreparatie-vervanging' => [
            'title'     => 'Ruitreparatie & vervanging',
            'video'     => '/assets/hero-bg-ruit.mp4',
            'intro'     => 'Een ster snel verholpen voorkomt een barst en dure vervanging.',
            'wat_title' => "Wat is het verschil\n reparatie/vervanging?",
            'wat_intro' => 'Kleine sterren repareren we; grote of in het zichtveld vervangen we veilig.',
            'stappen'   => [
                ['title' => 'Inspectie schade', 'desc' => 'Positie, grootte en impact'],
                ['title' => 'Repareren of vervangen', 'desc' => 'Harsinjectie of nieuwe ruit volgens norm'],
                ['title' => 'Kalibratie ADAS', 'desc' => 'Camera’s/sensoren opnieuw kalibreren indien nodig'],
            ],
        ],
        'trekhaak-montage' => [
            'title'     => 'Trekhaak montage',
            'video'     => '/assets/hero-bg-trekhaak.mp4',
            'intro'     => 'Vast of afneembaar, inclusief bekabeling en module.',
            'wat_title' => "Hoe verloopt een\n montage?",
            'wat_intro' => 'We kiezen samen het juiste systeem en coderen de elektronica.',
            'stappen'   => [
                ['title' => 'Keuze & advies', 'desc' => 'Vast/afneembaar, kogeldruk en trekgewicht'],
                ['title' => 'Montage & bekabeling', 'desc' => 'Kabelset, module en stekkerdoos'],
                ['title' => 'Coderen & testen', 'desc' => 'CAN-integratie + check verlichting'],
            ],
        ],
        'uitlaat-roetfilter' => [
            'title'     => 'Uitlaat & roetfilterservice',
            'video'     => '/assets/hero-bg-uitlaat.mp4',
            'intro'     => 'Lek of foutmeldingen? We repareren, vervangen of reinigen gericht.',
            'wat_title' => "Wat omvat onze\n service?",
            'wat_intro' => 'Visuele controle, drukmeting en (regen)reiniging of vervanging.',
            'stappen'   => [
                ['title' => 'Inspectie & meting', 'desc' => 'Lektest, tegendruk en sensoren'],
                ['title' => 'Reiniging of vervanging', 'desc' => 'DPF/EGR reinigen of onderdelen vernieuwen'],
                ['title' => 'Herprogrammering', 'desc' => 'Adaptiewaarden reset + proefrit'],
            ],
        ],
        'schokdempers-vering' => [
            'title'     => 'Schokdempers & vering',
            'video'     => '/assets/hero-bg-vering.mp4',
            'intro'     => 'Voor comfort, stabiliteit en kortere remweg.',
            'wat_title' => "Wanneer is vervanging\n nodig?",
            'wat_intro' => 'Dempers lekken, stuiteren of onrustig? Wij testen en vervangen set-wise.',
            'stappen'   => [
                ['title' => 'Test op werking', 'desc' => 'Dempingskracht en veerkwaliteit'],
                ['title' => 'Vervangen per as', 'desc' => 'Links/rechts tegelijk voor balans'],
                ['title' => 'Uitlijnen & proefrit', 'desc' => 'Wegligging optimaliseren'],
            ],
        ],
        'koppeling-vervangen' => [
            'title'     => 'Koppeling vervangen',
            'video'     => '/assets/hero-bg-koppeling.mp4',
            'intro'     => 'Slip, stank of zwaar schakelen? Dan is vervangen verstandig.',
            'wat_title' => "Wat vervangen we\n doorgaans?",
            'wat_intro' => 'Koppelingsplaat, drukgroep, lager en waar nodig het dubbelmassavliegwiel.',
            'stappen'   => [
                ['title' => 'Diagnose', 'desc' => 'Proefrit + inspectie hydrauliek/kabel'],
                ['title' => 'Complete set', 'desc' => 'Nieuwe componenten volgens specificatie'],
                ['title' => 'Afstellen & testen', 'desc' => 'Vrijloop, aangrijp-punt en proefrit'],
            ],
        ],
        'verlichting' => [
            'title'     => 'Verlichting',
            'video'     => '/assets/hero-bg-verlichting.mp4',
            'intro'     => 'Zien en gezien worden — cruciaal voor veiligheid.',
            'wat_title' => "Wat controleren en\n vervangen we?",
            'wat_intro' => 'We stellen koplampen af, vervangen lampen/units en testen aansturing.',
            'stappen'   => [
                ['title' => 'Afstelling', 'desc' => 'Hoogte/spreiding volgens richtlijnen'],
                ['title' => 'Lampen & units', 'desc' => 'Halogeen, LED, xenon en DRL’s'],
                ['title' => 'Elektronica', 'desc' => 'Relais, voeding en storingen verhelpen'],
            ],
        ],
    ];

    public function show(string $slug)
    {
        $dienst = Arr::get(self::DIENSTEN, $slug);

        abort_unless($dienst, 404);

        // Fallback video wanneer niet aanwezig
        $dienst['video'] = $dienst['video'] ?? '/assets/hero-bg-home.mp4';

        return view('diensten.show', [
            'slug'   => $slug,
            'dienst' => $dienst,
            'plan_it_url' => 'https://www.plan-it-online.com/frontend?ID=1496',
        ]);
    }
}
