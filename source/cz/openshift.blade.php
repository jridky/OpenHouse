@extends('_layouts.page')

@section('social')
<meta property="og:title" content="Red Hat Czech Open House, Brno - Czechia">
<meta property="og:site_name" content="Red Hat Czech Open House">
<meta property="og:description" content="Red Hat Czech Open House is the annual, free, virtual event organized by Red Hat Czech associates who are keen to present their work and experience and share Red Hat culture and values.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://openhouse.redhat.com">
<meta property="og:image" content="https://openhouse.redhat.com/assets/images/oh-social.png">
<meta property="twitter:image" content="https://openhouse.redhat.com/assets/images/oh-social.png">
@endsection

@section('css')
<link rel="stylesheet" href="{{ mix('css/site.css', 'assets/build') }}">
<link rel="stylesheet" href="{{ mix('css/subsite.css', 'assets/build') }}">
@endsection

@section('title')
<title>OpenShift pro začátečníky</title>
@endsection


@section('body')
<section class="mx-auto col-lg-10 py-5 text-center">
    <h1 class="rhd-700">Kurz OpenShiftu pro začátečníky</h1>
    <div class="row mt-4 py-5">
        <div class="col-lg-4 mx-5 mb-5 text-center">
            <h4 class="rhd-700 underline pb-4">Lektoři</h4>
            <p class="rhd-400">Tomáš Tomeček (Principal Software Engineer)<br>
	       David Becvarik (Manager, Solution Architecture)<br>
	       Stanislav Láznička (Senior Software Engineer)</p>

        </div>
        <div class="col-lg-6 px-5 text-left">
            <h4 class="rhd-700 underline pb-4">Abstrakt</h4>
            <div class="rhd-400">
                <p>OpenShift je jednou z nejlepších platforem pro spouštění vašich aplikací. Proto jsme se vám v Red Hat Czech rozhodli nabídnout bezplatný kurz OpenShiftu v češtině/slovenštině, materiály jsou v angličtině.</p>

                <p>Přijďte se naučit základy OpenShiftu, jeho vztah s Kubernetes a jak kontejnerizovat a monitorovat své aplikace. Seznámíme vás se vším potřebným pro začátek, včetně příkazového řádku a webové konzole! Kurz bude převážně virtuální, pořádaný lidmi s dlouholetými zkušenostmi s kontejnery a OpenShift – nebo dokonce přímo pracujícími na OpenShiftu.</p>
            </div>
    	</div>
    </div>
    <div class="row py-5">
        <div class="col-lg-4 mx-5 mb-5 text-center">
            <h4 class="rhd-700 underline pb-4">Prerekvizity</h4>
            <p class="rhd-400">Mít základní zkušenosti s Linux administrací (<a href="https://docs.fedoraproject.org/en-US/fedora/f34/system-administrators-guide/" target="_blank">podklady</a>) a mít zkušenosti s Gitem.</p>

        </div>
        <div class="col-lg-6 px-5 text-left">
            <h4 class="rhd-700 underline pb-4">Seznam lekcí</h4>
            <div class="rhd-400">
                <p>Lekce 0 | online | středa 13. 4. 2022 | 14:30 CEST<br>OpenShift ninja in 20 minutes workshop at Open House</p>

                <p>Lekce 1 | online | středa 27. 4. 2022 | 15:00 CEST<br>Intro to Kubernetes</p>
                
                <p>Lekce 2 | online | středa 11. 5. 2022 | 15:00 CEST<br>Fundamentals: deployments, pods, services, routes, requests and limits</p>
                
                <p>Lekce 3 | online | středa 27. 5. 2022 | 15:00 CEST<br>Scheduling, placement rules, network policies</p>
                
                <p>Lekce 4 | v Brně | čtvrtek 2. 6. 2022 | 10:00 CEST<br>Metrics, logs, observability</p>
            </div>
	</div>
    </div>
    <a class="heading-text-h1 mont-400 px-5 text-red local-nav my-5 d-lg-inline-block border" href="https://forms.gle/D4dqVfaPqLVuAMWL7" target="_blank">Registrační formulář</a> 
    <br><br>
    <img src="/assets/images/openshift.png" class="mw-100" alt="Plakát na kurz">
    
    
</section>

@endsection

@include('_layouts.footercz')
