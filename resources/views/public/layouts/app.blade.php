<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="Ecole doctoral de l'isp/Gombe">
    <meta property="og:description"
        content="Les principales actions de l’ECODISP consistent à permettre aux auditeurs du DEA et aux doctorants de préparer et de soutenir leurs mémoires/thèses dans les meilleures conditions possibles">
    <meta property="og:url" content="https://www.ecod-isp-gombe.fac">

    <title>{{ config('app.name', 'Ecole doctoral de') }}</title>

    <!-- Fonts -->
    <link rel="shorcut icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqwATIFdTNbigS4Zcn-DJ3rVsx0DpThGSGrw&s"
        type="image/x-icon">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50 transition-all duration-300 lg:hs-overlay-layout-open:ps-[260px] dark:bg-neutral-900">
    <div class=" min-h-screen  bg-gray-100 dark:bg-neutral-800">
        @include('public.layouts.navigation')
        <div class="">
            @isset($header)
                <header class=" bg-white text-sm py-4 dark:bg-neutral-800">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class=" mt-5">
                @yield('contents')
            </main>


        </div>



        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
        @yield('scripts')
    </div>


    @include('public.layouts.footer')


    <script src="https://cdn.cinetpay.com/seamless/main.js"></script>
    <script>
        @yield('scripts')
    </script>
    <script>
        window.addEventListener('load', function() {
            (function() {
                const collapse = window?.$hsCollapseCollection ? HSCollapse.getInstance(
                    '#hs-header-scrollspy-collapse', true) : null;
                const scrollSpy = window?.$hsScrollspyCollection ? HSScrollspy.getInstance(
                    '[data-hs-scrollspy="#scrollspy"]', true) : null;

                if (collapse && scrollSpy) scrollSpy.element.on('beforeScroll', () => {
                    console.log(1);
                    return new Promise((res) => {
                        if (window.innerWidth <= 639 && collapse.element.el.classList.contains(
                                'open')) {
                            collapse.element.hide();
                            HSStaticMethods.afterTransition(collapse.element.content, () => res(
                                true));
                        } else res(true);
                    });
                });
            })();
        });
    </script>
</body>

</html>
