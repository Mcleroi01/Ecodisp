@extends('public.layouts.app')

@section('contents')
    <!-- Hero -->
    <div class="overflow-hidden">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 mt-4 mb-4">
            <div class="relative mx-auto max-w-4xl grid space-y-5 sm:space-y-10">
                <!-- Title -->
                <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                    <div>
                        <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
                            Commencez vos études universitaires
                        </p>
                        <h1
                            class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
                            Construire son avenir <span class="text-blue-800">avec les meilleurs</span>
                        </h1>

                        <!-- Form -->
                        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('admissions.home') }}">
                                Future Etudians
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                href="#">
                                Future Enseignats
                            </a>
                        </div>
                        <!-- End Form -->
                    </div>

                    <div>
                        <img class="rounded-md"
                            src="https://media.istockphoto.com/id/1474378386/fr/photo/%C3%A9tudiants-noirs-c%C3%A2lins-et-c%C3%A9l%C3%A9bration-de-lobtention-du-dipl%C3%B4me-de-l%C3%A9ducation-et-de-la.webp?b=1&s=170667a&w=0&k=20&c=bPp8SFID-UCGtTahukjOtQyjrC7UxgQwu7w7jv9Ke8g="
                            alt="Hero Image">
                    </div>

                </div>
                <!-- End Title -->




                <!-- SVG Element -->
                <div class="hidden sm:hidden absolute top-2/4 start-0 transform -translate-y-2/4 -translate-x-40 md:hidden lg:-translate-x-80 lg:block"
                    aria-hidden="true">
                    <svg class="w-52 h-auto" width="717" height="653" viewBox="0 0 717 653" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M170.176 228.357C177.176 230.924 184.932 227.329 187.498 220.329C190.064 213.329 186.47 205.574 179.47 203.007L170.176 228.357ZM98.6819 71.4156L85.9724 66.8638L85.8472 67.2136L85.7413 67.5698L98.6819 71.4156ZM336.169 77.9736L328.106 88.801L328.288 88.9365L328.475 89.0659L336.169 77.9736ZM616.192 128.685C620.658 122.715 619.439 114.254 613.469 109.788L516.183 37.0035C510.213 32.5371 501.753 33.756 497.286 39.726C492.82 45.696 494.039 54.1563 500.009 58.6227L586.485 123.32L521.788 209.797C517.322 215.767 518.541 224.227 524.511 228.694C530.481 233.16 538.941 231.941 543.407 225.971L616.192 128.685ZM174.823 215.682C179.47 203.007 179.475 203.009 179.48 203.011C179.482 203.012 179.486 203.013 179.489 203.014C179.493 203.016 179.496 203.017 179.498 203.018C179.501 203.019 179.498 203.018 179.488 203.014C179.469 203.007 179.425 202.99 179.357 202.964C179.222 202.912 178.991 202.822 178.673 202.694C178.035 202.437 177.047 202.026 175.768 201.456C173.206 200.314 169.498 198.543 165.106 196.099C156.27 191.182 144.942 183.693 134.609 173.352C114.397 153.124 97.7311 122.004 111.623 75.2614L85.7413 67.5698C68.4512 125.748 89.856 166.762 115.51 192.436C128.11 205.047 141.663 213.953 151.976 219.692C157.158 222.575 161.591 224.698 164.777 226.118C166.371 226.828 167.659 227.365 168.578 227.736C169.038 227.921 169.406 228.065 169.675 228.168C169.809 228.22 169.919 228.261 170.002 228.293C170.044 228.309 170.08 228.322 170.109 228.333C170.123 228.338 170.136 228.343 170.147 228.347C170.153 228.349 170.16 228.352 170.163 228.353C170.17 228.355 170.176 228.357 174.823 215.682ZM111.391 75.9674C118.596 55.8511 137.372 33.9214 170.517 28.6833C204.135 23.3705 255.531 34.7533 328.106 88.801L344.233 67.1462C268.876 11.0269 210.14 -4.91361 166.303 2.01428C121.993 9.01681 95.9904 38.8917 85.9724 66.8638L111.391 75.9674ZM328.475 89.0659C398.364 137.549 474.018 153.163 607.307 133.96L603.457 107.236C474.34 125.837 406.316 110.204 343.864 66.8813L328.475 89.0659Z"
                            fill="currentColor" class="fill-gray-800 dark:fill-white" />
                        <path
                            d="M17.863 238.22C10.4785 237.191 3.6581 242.344 2.62917 249.728C1.60024 257.113 6.75246 263.933 14.137 264.962L17.863 238.22ZM117.548 265.74L119.421 252.371L119.411 252.37L117.548 265.74ZM120.011 466.653L132.605 471.516L132.747 471.147L132.868 470.771L120.011 466.653ZM285.991 553.767C291.813 549.109 292.756 540.613 288.098 534.792L212.193 439.92C207.536 434.098 199.04 433.154 193.218 437.812C187.396 442.47 186.453 450.965 191.111 456.787L258.582 541.118L174.251 608.589C168.429 613.247 167.486 621.742 172.143 627.564C176.801 633.386 185.297 634.329 191.119 629.672L285.991 553.767ZM14.137 264.962L115.685 279.111L119.411 252.37L17.863 238.22L14.137 264.962ZM115.675 279.11C124.838 280.393 137.255 284.582 145.467 291.97C149.386 295.495 152.093 299.505 153.39 304.121C154.673 308.691 154.864 314.873 152.117 323.271L177.779 331.665C181.924 318.993 182.328 307.301 179.383 296.818C176.451 286.381 170.485 278.159 163.524 271.897C149.977 259.71 131.801 254.105 119.421 252.371L115.675 279.11ZM152.117 323.271C138.318 365.454 116.39 433.697 107.154 462.535L132.868 470.771C142.103 441.936 164.009 373.762 177.779 331.665L152.117 323.271ZM107.417 461.79C103.048 473.105 100.107 491.199 107.229 508.197C114.878 526.454 132.585 539.935 162.404 543.488L165.599 516.678C143.043 513.99 135.175 505.027 132.132 497.764C128.562 489.244 129.814 478.743 132.605 471.516L107.417 461.79ZM162.404 543.488C214.816 549.734 260.003 554.859 276.067 556.643L279.047 529.808C263.054 528.032 217.939 522.915 165.599 516.678L162.404 543.488Z"
                            fill="currentColor" class="fill-red-500" />
                        <path
                            d="M229.298 165.61C225.217 159.371 216.85 157.621 210.61 161.702C204.371 165.783 202.621 174.15 206.702 180.39L229.298 165.61ZM703.921 410.871C711.364 410.433 717.042 404.045 716.605 396.602L709.47 275.311C709.032 267.868 702.643 262.189 695.2 262.627C687.757 263.065 682.079 269.454 682.516 276.897L688.858 384.71L581.045 391.052C573.602 391.49 567.923 397.879 568.361 405.322C568.799 412.765 575.187 418.444 582.63 418.006L703.921 410.871ZM206.702 180.39C239.898 231.14 343.567 329.577 496.595 322.758L495.394 295.785C354.802 302.049 259.09 211.158 229.298 165.61L206.702 180.39ZM496.595 322.758C567.523 319.598 610.272 335.61 637.959 353.957C651.944 363.225 662.493 373.355 671.17 382.695C675.584 387.447 679.351 391.81 683.115 396.047C686.719 400.103 690.432 404.172 694.159 407.484L712.097 387.304C709.691 385.166 706.92 382.189 703.298 378.113C699.837 374.217 695.636 369.362 690.951 364.319C681.43 354.07 669.255 342.306 652.874 331.451C619.829 309.553 571.276 292.404 495.394 295.785L496.595 322.758Z"
                            fill="currentColor" class="fill-blue-600" />
                    </svg>
                </div>
                <!-- End SVG Element -->

                <!-- SVG Element -->
                <div class="hidden absolute top-2/4 end-0 transform -translate-y-2/4 translate-x-40 md:block lg:translate-x-80 md:hidden lg:block"
                    aria-hidden="true">
                    <svg class="w-72 h-auto " width="1115" height="636" viewBox="0 0 1115 636" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z"
                            fill="currentColor" class="fill-red-500" />
                        <path
                            d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z"
                            fill="currentColor" class="fill-blue-600" />
                        <path
                            d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z"
                            fill="currentColor" class="fill-gray-800 dark:fill-white" />
                    </svg>
                </div>
                <!-- End SVG Element -->
            </div>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Slider -->
    <div data-hs-carousel='{"loadingClasses": "opacity-0","isAutoPlay": true }' class="relative h-4/6">
        <div class="hs-carousel relative h-full overflow-hidden w-full min-h-96 bg-white rounded-lg">
            <div
                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                <div class="hs-carousel-slide ">
                    <div
                        class="flex justify-center h-full bg-gray-100  dark:bg-neutral-900 bg-[url('https://pbs.twimg.com/media/EgPyaaPWoAE5eJt.jpg')]">
                        <div class="  backdrop-blur-sm w-full lg:p-10 p-4  text-white bg-[#0000007c]">

                            <div>
                                <h3
                                    class="mb-4 text-1xl font-extrabold tracking-tight leading-none text-bleu-800 md:text-5xl lg:text-6xl sm:px-16 lg:px-48">
                                    Le doctorat est basé sur un projet de recherche individuel sous la direction d'un-e
                                    professeur-e de l’Université.
                                </h3>

                                <p class=" mb-8 text-sm font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eius possimus illum
                                    voluptas
                                    deserunt quisquam minus soluta tenetur in repellat provident pariatur modi doloribus
                                    quos
                                    dolor, quis
                                    obcaecati expedita odio.
                                </p>
                            </div>







                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div
                        class="flex justify-center h-full bg-gray-200 dark:bg-neutral-800 bg-[url('https://www.minesu.gouv.cd/images/WhatsApp%20Image%202022-12-22%20at%2018.32.53.jpeg')]">
                        <div class="  backdrop-blur-sm w-full lg:p-10 p-4   text-white bg-[#0000007c]">

                            <h3
                                class="mb-4 text-1xl  font-extrabold tracking-tight leading-none text-bleu-800 md:text-5xl lg:text-6xl sm:px-16 lg:px-48">
                                Forme ainsi non seulement les futurs chercheurs et enseignants-chercheurs mais aussi les
                                futurs cadres de haut niveau.
                            </h3>

                            <p class=" mb-8 text-sm font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eius possimus illum
                                voluptas
                                deserunt quisquam minus soluta tenetur in repellat provident pariatur modi doloribus quos
                                dolor, quis
                                obcaecati expedita odio.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div
                        class="flex justify-center h-full bg-gray-200 dark:bg-neutral-800 bg-[url('https://ispgombe.ac.cd/images/_MG_2556.jpg')]">
                        <div class="  backdrop-blur-sm w-full lg:p-10 p-4   text-white bg-[#0000007c]">

                            <h3
                                class="mb-4 text-1xl font-extrabold tracking-tight leading-none text-bleu-800 md:text-5xl lg:text-6xl sm:px-16 lg:px-48">
                                Engagée dans une politique doctorale ayant pour objectif la formation à la recherche et la
                                formation par la recherche
                            </h3>

                            <p class=" mb-8 text-sm font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates eius possimus illum
                                voluptas
                                deserunt quisquam minus soluta tenetur in repellat provident pariatur modi doloribus quos
                                dolor, quis
                                obcaecati expedita odio.
                            </p>





                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button"
            class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button"
            class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>

        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
            <span
                class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
            <span
                class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
            <span
                class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"></span>
        </div>
    </div>

    <!-- End Slider -->
    <div class=" bg-[#63c4fc0a] ">
        <div class="grid md:grid-cols-2 px-4 gap-4 md:gap-8 xl:gap-10 md:items-center p-2 lg:items-center sm:items-center mx-auto max-w-[85rem] mb-4 mt-4">

            <!-- Features -->
            <div class="  mx-auto">
                <!-- Grid -->
                <div class=" sm:grid sm:grid-cols-1 md:grid md:grid-cols-1 md:items-center  md:gap-12 xl:grid-cols-2 xl:gap-20">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <img class="rounded-xl object-cover hover:scale-105 focus:scale-105 transition-transform duration-500 ease-in-out"
                            src="https://newscd.net/wp-content/uploads/2024/05/1000212608-edited.jpg "
                            alt="Features Image">
                    </div>
                    <!-- End Col -->

                    <div class="mt-5  sm:mt-10 lg:mt-0">
                        <div class="space-y-6 sm:space-y-8">
                            <!-- Title -->
                            <div class="space-y-2 md:space-y-4">
                                <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                                    Gertrude Ekombe Ekofo
                                </h2>
                                <p class="text-gray-500 dark:text-neutral-500">
                                    Une professeure met son expérience à contribution pour aider à comprendre et à
                                    accompagner ces patients et leur entourage

                                    Avec un parcours très élogieux et riche en expériences professionnelles vécues, la
                                    Professeure Gertrude EKOMBE EKOFO a été, tour à tour, Déléguée active aux assises du
                                    Dialogue Inter Congolais ; Députée Nationale de Transition ; Directrice Générale de
                                    l'Ecole
                                </p>
                            </div>
                            <!-- End Title -->

                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>

            <div class="mx-auto">
                <!-- Grid -->
                <div class=" sm:grid sm:grid-cols-1 md:grid md:grid-cols-1 md:items-center  md:gap-12 xl:grid-cols-2 xl:gap-20">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <img class="rounded-xl object-cover hover:scale-105 focus:scale-105 transition-transform duration-500 ease-in-out"
                            src="https://lh3.googleusercontent.com/-RnzLmtyhh9k/VqZCQA5Fs_I/AAAAAAABsDY/t-SndSvrXQY/DSC_0173.JPG?imgmax=400"
                            alt="Features Image">
                    </div>
                    <!-- End Col -->

                    <div class="mt-5 sm:mt-10 lg:mt-0">
                        <div class="space-y-6 sm:space-y-8">
                            <!-- Title -->
                            <div class="space-y-2 md:space-y-4">
                                <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                                    Pascal Isumbisho Mwapu
                                </h2>
                                <p class="text-gray-500 dark:text-neutral-500">
                                    Un professeur qui met son expérience et ses compétences à l'œuvre en vue de contribuer à
                                    l'apprentissage de ses apprenants et à l'avancement de la société

                                    Pascal Isumbisho Mwapu est un homme politique de la république démocratique du Congo...
                                </p>
                            </div>
                            <!-- End Title -->


                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Features -->

        </div>

    </div>

    <div id="features" class="mx-auto max-w-[85rem] mb-4 mt-4 px-4">
        <p class="text-center text-base font-semibold leading-7 text-primary-500">Les Filières Organisées</p>
        <h2 class="text-center font-display text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
            Explorer les principaux Filières
        </h2>
        <ul class="mt-16 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

                <img src="https://www.svgrepo.com/show/530438/ddos-protection.svg" alt=""
                    class="mx-auto h-10 w-10">
                <h3 class="my-3 font-display font-medium">Anglais et didactique de l'anglais</h3>
                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                    the cutting-edge language model that makes interactions a breeze. With its user-friendly interface,
                    effortlessly tap into the world of AI-generated text.
                </p>

            </li>
            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">

                <img src="https://www.svgrepo.com/show/530442/port-detection.svg" alt=""
                    class="mx-auto h-10 w-10">
                <h3 class="my-3 font-display font-medium">Francais et didactique du Francais</h3>
                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                    Psychopédagogie et didactique de la psychopédagogie
                </p>

            </li>
            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                <img src="https://www.svgrepo.com/show/530444/availability.svg" alt="" class="mx-auto h-10 w-10">
                <h3 class="my-3 font-display font-medium">Biologie Phyto-Ecologie et didactique de la biologie</h3>
                <p class="mt-1.5 text-sm leading-6 text-secondary-500">
                    We offer advanced customization. You can freely combine options like roles, languages, publish,
                    tones,
                    lengths,
                    and formats.
                </p>

            </li>

            <li class="rounded-xl bg-white px-6 py-8 shadow-sm">
                <a href="/templates" class="group">
                    <img src="https://www.svgrepo.com/show/530450/page-analysis.svg" alt=""
                        class="mx-auto h-10 w-10">
                    <h3 class="my-3 font-display font-medium group-hover:text-primary-500">
                        cours en commun, Informatique, et la pédagogie.
                    </h3>
                    <p class="mt-1.5 text-sm leading-6 text-secondary-500">We offer many templates covering areas such
                        as
                        writing,
                        education, lifestyle and creativity to inspire your potential. </p>
                </a>
            </li>

        </ul>
    </div>

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-4 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="text-center space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">ECODISP Gombe</h2>
                    <p class="text-lg leading-8 text-gray-300">L’Ecole Doctorale, sur le plan national, organise les
                        études de troisième cycle (DEA + Doctorat) dans les Universités et Instituts Supérieurs publics
                        et privés de la République Démocratique du Congo (RDC), conformément aux prescrits du Décret n°
                        15/041 du 14 décembre 2015 portant critérium pour l’organisation de la formation de 3 ème cycle
                        (Instruction académique N° 020, art. 86).
                    </p>
                </div>
                <dl
                    class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">Les Professeurs</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">12 million</dd>
                    </div>
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">Etudiants</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">10k</dd>
                    </div>
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">LABO ET UER</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">6.6k</dd>
                    </div>
                    <div class="flex flex-col bg-white/5 p-8">
                        <dt class="text-sm font-semibold leading-6 text-gray-300">Partenaire et Pools DEA</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white">2.1k</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Dernières nouvelles</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">Stay in the know with insights from industry
                experts.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <a class="group flex flex-col focus:outline-none" href="#">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                        src="https://ispgombe.ac.cd/images/WhatsAppImage2022-10-22at08.35.58.jpeg" alt="Blog Image">
                    <span
                        class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                        Sponsored
                    </span>
                </div>

                <div class="mt-7">
                    <h3
                        class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                        Studio by Preline
                    </h3>
                    <p class="mt-3 text-gray-800 dark:text-neutral-200">
                        Produce professional, reliable streams easily leveraging Preline's innovative broadcast
                        studio
                    </p>
                    <p
                        class="mt-5 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
                        Read more
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group flex flex-col focus:outline-none" href="#">
                <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                    <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJYBntHNP5Ct7k1LoQUdYSuui-mvYND_qtiA&s"
                        alt="Blog Image">
                </div>

                <div class="mt-7">
                    <h3
                        class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                        Onsite
                    </h3>
                    <p class="mt-3 text-gray-800 dark:text-neutral-200">
                        Optimize your in-person experience with best-in-class capabilities like badge printing and
                        lead
                        retrieval
                    </p>
                    <p
                        class="mt-5 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
                        Read more
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </p>
                </div>
            </a>
            <!-- End Card -->

            <!-- Card -->
            <a class="group relative flex flex-col w-full min-h-60 bg-[url('https://ispgombe.ac.cd/images/_MG_2556.jpg')] bg-center bg-cover rounded-xl hover:shadow-lg focus:outline-none focus:shadow-lg transition"
                href="#">
                <div class="flex-auto p-4 md:p-6">
                    <h3 class="text-xl text-white/90 group-hover:text-white"><span class="font-bold">Preline</span>
                        Press
                        publishes books about economic and technological advancement.</h3>
                </div>
                <div class="pt-0 p-4 md:p-6">
                    <div
                        class="inline-flex items-center gap-2 text-sm font-medium text-white group-hover:text-white/70 group-focus:text-white/70">
                        Visit the site
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </div>
                </div>
            </a>
            <!-- End Card -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->

    <!-- Voir tous les travaux -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Traveaux</h2>
            <p class="mt-1 text-gray-600 dark:text-neutral-400">DOCTORAT(PHD) / DEA</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full size-20"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5lgIsFQAncZCY_LVjrrSrtVZVTtlMnD5IVg&s"
                        alt="Avatar">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Prof PATRICK KAPITA MVEMBA
                        </h3>
                        <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Promoteur
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    Impact de techniques de Beamforming dans la couverture des réseaux sans fil modernes de génération 5
                </p>

                <!-- Social Brands -->
                <div class="mt-3 space-x-1">
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                        </svg>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
            <!-- End Col -->

            <div
                class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full size-20"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5lgIsFQAncZCY_LVjrrSrtVZVTtlMnD5IVg&s"
                        alt="Avatar">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Amil Evara
                        </h3>
                        <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                            UI/UX Designer
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    I am an ambitious workaholic, but apart from that, pretty simple person.
                </p>

                <!-- Social Brands -->
                <div class="mt-3 space-x-1">
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                        </svg>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
            <!-- End Col -->

            <div
                class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full size-20"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5lgIsFQAncZCY_LVjrrSrtVZVTtlMnD5IVg&s"
                        alt="Avatar">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Ebele Egbuna
                        </h3>
                        <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Support Consultant
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    I am an ambitious workaholic, but apart from that, pretty simple person.
                </p>

                <!-- Social Brands -->
                <div class="mt-3 space-x-1">
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                        </svg>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
            <!-- End Col -->

            <div
                class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full size-20"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5lgIsFQAncZCY_LVjrrSrtVZVTtlMnD5IVg&s"
                        alt="Avatar">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Maria Powers
                        </h3>
                        <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Director of sales
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    I am an ambitious workaholic, but apart from that, pretty simple person.
                </p>

                <!-- Social Brands -->
                <div class="mt-3 space-x-1">
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                        </svg>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
            <!-- End Col -->

            <div
                class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full size-20"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5lgIsFQAncZCY_LVjrrSrtVZVTtlMnD5IVg&s"
                        alt="Avatar">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Delia Pawelke
                        </h3>
                        <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                            Front-end Developer
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    I am an ambitious workaholic, but apart from that, pretty simple person.
                </p>

                <!-- Social Brands -->
                <div class="mt-3 space-x-1">
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                        </svg>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
            <!-- End Col -->

            <div
                class="flex flex-col rounded-xl p-4 md:p-6 bg-white border border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center gap-x-4">
                    <img class="rounded-full size-20"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5lgIsFQAncZCY_LVjrrSrtVZVTtlMnD5IVg&s"
                        alt="Avatar">
                    <div class="grow">
                        <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                            Tom Lowry
                        </h3>
                        <p class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                            UI/UX Designer
                        </p>
                    </div>
                </div>

                <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    I am an ambitious workaholic, but apart from that, pretty simple person.
                </p>

                <!-- Social Brands -->
                <div class="mt-3 space-x-1">
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                        </svg>
                    </a>
                    <a class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        href="#">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z" />
                        </svg>
                    </a>
                </div>
                <!-- End Social Brands -->
            </div>
            <!-- End Col -->



            <a class="col-span-full lg:col-span-1 group flex flex-col justify-center text-center rounded-xl p-4 md:p-6 border border-dashed border-gray-200 hover:shadow-sm focus:outline-none focus:shadow-sm dark:border-neutral-700"
                href="#">
                <h3 class="text-lg text-gray-800 dark:text-neutral-200">
                    We are hiring!
                </h3>
                <div>
                    <span
                        class="inline-flex items-center gap-x-2 text-blue-600 group-hover:text-blue-700 group-focus:text-blue-700 dark:text-blue-500 dark:group-hover:text-blue-400 dark:group-focus:text-blue-400">
                        Voir tous les travaux
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </span>
                </div>
            </a>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- Voir tous les travaux-->

    <!-- Masonry Cards -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-12 gap-6">
            <div class="sm:self-end col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-5 lg:col-start-3">
                <!-- Card -->
                <a class="group relative block rounded-xl overflow-hidden focus:outline-none" href="#">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                            src="https://elitenews.cd/wp-content/uploads/2023/02/IMG-20230206-WA05341.jpg"
                            alt="Masonry Cards Image">
                    </div>
                    <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                        <div
                            class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-neutral-800 dark:text-neutral-200">
                            Workplace personalities
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="sm:self-end col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3">
                <!-- Card -->
                <a class="group relative block rounded-xl overflow-hidden focus:outline-none" href="#">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                            src="https://ispgombe.ac.cd/images/WhatsApp%20Image%202020-10-14%20at%202.10.55%20PM.jpeg"
                            alt="Masonry Cards Image">
                    </div>
                    <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                        <div
                            class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-neutral-800 dark:text-neutral-200">
                            Women in engineering
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-span-12 md:col-span-4">
                <!-- Card -->
                <a class="group relative block rounded-xl overflow-hidden focus:outline-none" href="#">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                            src="https://ispgombe.ac.cd/images/_MG_2556.jpg" alt="Masonry Cards Image">
                    </div>
                    <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                        <div
                            class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-neutral-800 dark:text-neutral-200">
                            Pride 2021
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <!-- Card -->
                <a class="group relative block rounded-xl overflow-hidden focus:outline-none" href="#">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                            src="https://ispgombe.ac.cd/images/IMG-20220502-WA0056.jpg" alt="Masonry Cards Image">
                    </div>
                    <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                        <div
                            class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-neutral-800 dark:text-neutral-200">
                            Data at Preline
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-span-12 sm:col-span-6 md:col-span-4">
                <!-- Card -->
                <a class="group relative block rounded-xl overflow-hidden focus:outline-none" href="#">
                    <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                        <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                            src="https://ispgombe.ac.cd/images/slidehotelerie001262022_08_0612_23_23UTC.jpg"
                            alt="Masonry Cards Image">
                    </div>
                    <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                        <div
                            class="text-sm font-semibold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-neutral-800 dark:text-neutral-200">
                            Empowered management
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Masonry Cards -->

   <x-contacts />
@endsection
