<div>

    @section('titles')
        <title>Dos Mares {{__('Residencial')}} - {{__('Preventa de Lotes en Punta de Mita')}}</title>
        <meta name="description" content="{{__('Exclusiva preventa de lotes en Punta de Mita, Nayarit, donde el lujo y la naturaleza se fusionan. Imagina despertar con la brisa del océano y vivir en un entorno privilegiado con baja densidad, diseñado para ofrecer privacidad y confort. Este desarrollo cuenta con 282 lotes residenciales y 125 departamentos distribuidos en 6 torres, rodeados de impresionantes áreas verdes y amenidades de primer nivel: casa club, alberca, canchas de pádel, terrazas pergoladas, parques ecológicos y más. Invierte en el paraíso y construye la vida que siempre soñaste en Punta de Mita.')}}">
    @endsection

    {{-- Inicio --}}
    <div class="row justify-content-center position-relative mb-6" style="background-image: url('{{asset('/img/wavy-bg.webp')}}'); background-position:top; background-repeat:no-repeat; background-size: cover;">

        <div class="col-6 col-lg-2 my-5">
            <img src="{{asset('/img/logo-dos-mares.webp')}}" alt="{{__('Logo de Dos Mares')}}" class="w-100">
        </div>

        <div class="position-absolute end-0 top-0 mt-3 me-3 col-3 col-lg-1 text-end">

            @if ( app()->getLocale() == 'es')
                <a href="{{route('home', [], true, 'en')}}" class="btn btn-darkblue shadow fs-5" wire:navigate>
                    <i class="fa-solid fa-globe"></i> EN
                </a>
            @else
                <a href="{{route('home', [], true, 'es')}}" class="btn btn-darkblue shadow fs-5" wire:navigate>
                    <i class="fa-solid fa-globe"></i> ES
                </a>
            @endif

        </div>

    </div>


    {{-- Descripción --}}
    <div class="row justify-content-evenly mb-6">

        <div class="col-12 col-lg-5 col-xxl-4 position-relative z-3">

            <h1>
                <div class="fs-4 mb-2 fw-light">{{__('¡Gran oportunidad en Punta de Mita!')}}</div>
                <div class="fs-2 fw-bold">{{__('Lotes para vivienda unifamiliar')}}</div>
                <div class="fs-0">{{__('$7,000')}} <span class="fs-1 text-blue">{{('MXN / m²')}}</span> </div>
            </h1>

            <p class="fs-4 fw-light mb-4">
                {{__('Con hasta')}} <strong>{{__('24 meses sin intereses')}}</strong>
            </p>

            <div class="text-center text-lg-start">
                <a href="#contact-section" class="btn btn-darkblue px-4 fs-5">
                    {{__('Quiero más información')}}
                </a>
            </div>
        </div>

        <div class="col-12 col-lg-5"></div>

    </div>


    <div class="position-relative pt-6">
        <img src="{{asset('/img/blue-waves.webp')}}" alt="" class="w-100 position-relative z-2" loading="lazy">

        <img src="{{asset('/img/vista-isometrica-dos-mares.webp')}}" alt="Vista isométrica de Dos Mares" class="position-absolute bottom-0 end-0 z-1 w-85" loading="lazy">
    </div>
    
    {{-- Qué es dos mares --}}
    <div class="row justify-content-evenly py-5 bg-darkblue">

        <div class="col-12 col-lg-5 col-xxl-4 align-self-center mb-5 mb-lg-0 pb-5 pb-lg-0">

            <h2 class="fw-bold fs-3 mb-3">
                {{__('¿Qué es Dos Mares?')}}
            </h2>

            <p class="fs-5 mb-4 ">
                {{__('Contemplado por un total de 282 lotes para vivienda unifamiliar, así como 6 torres de departamentos que sumaran un total de 125 unidades más, manteniendo así una densidad baja y óptima para el total del área del proyecto.')}}
            </p>

            <div class="text-center text-lg-start">
                <a href="https://youtu.be/B1TskH8w48k" data-fancybox="video" class="btn btn-light px-4 fs-5 rounded-4">
                    <i class="fa-solid fa-play"></i> {{__('Ver video')}}
                </a>
            </div>
        </div>

        <div class="col-10 col-lg-2 text-center">

            @if ( app()->getLocale() == 'en' )
                <img src="{{asset('/img/282-lots-en.webp')}}" alt="282 Lots for sale" class="w-50 d-block mx-auto mb-3" loading="lazy">  
            @else
                <img src="{{asset('/img/282-lotes-es.webp')}}" alt="282 Lotes en venta" class="w-50 d-block mx-auto mb-3" loading="lazy">
            @endif

            <p class="fs-4">{{__('Vivienda unifamiliar')}}</p>
        </div>

    </div>

    {{-- Amenidades --}}
    <div class="row justify-content-between mb-4">

        <div class="col-12 col-lg-6 px-0 mb-5 mb-lg-0 position-relative">

            <div id="carouselAmenities" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('img/amenities-1.webp')}}" class="d-block w-100" alt="Amenidades de Dos Mares Residencial">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/amenities-2.webp')}}" class="d-block w-100" alt="Amenidades de Dos Mares Residencial">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/amenities-3.webp')}}" class="d-block w-100" alt="Amenidades de Dos Mares Residencial">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/amenities-4.webp')}}" class="d-block w-100" alt="Amenidades de Dos Mares Residencial">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/amenities-5.webp')}}" class="d-block w-100" alt="Amenidades de Dos Mares Residencial">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAmenities" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselAmenities" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

            </div>

            <img src="{{asset('img/logo-dos-mares-blanco.webp')}}" width="100px" alt="" class="position-absolute top-0 start-0 ms-5 mt-4">

        </div>

        <div class="col-12 col-lg-5 px-3 px-lg-5 align-self-center">

            <h2 class="mb-4">{{__('Amenidades')}}</h2>
            
            <ul class="fs-5 mb-5 mb-lg-4">
                <li>
                    <i class="text-blue fa-solid fa-house"></i> {{__('Casa club')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-person-swimming"></i> {{__('Alberca')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-people-roof"></i> {{__('Terrazas pergoladas')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-baseball"></i> {{__('Canchas de padel')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-person-walking"></i> {{__('Andadores')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-burger"></i> {{__('Área de asadores')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-binoculars"></i> {{__('Terrazas y miradores')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-mountain-sun"></i> {{__('Área de contemplación')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-leaf"></i> {{__('Jardines')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-person-hiking"></i> {{__('Parques con andadores')}}
                </li>

                <li>
                    <i class="text-blue fa-solid fa-tree"></i> {{__('Parques de conservación ecológica')}}
                </li>
            </ul>

        </div>

    </div>

    <div class="row justify-content-between mb-5 mb-lg-0">

        <div class="col-12 col-lg-5 px-0 align-self-center d-none d-lg-block mb-3 ">
            <img src="{{asset('/img/dos-mares-alberca.webp')}}" alt="Alberca de Dos Mares Residencial" class="w-100 rounded-end object-fit-cover" style="min-height: 60vh;" loading="lazy" data-fancybox="gallery">
        </div>

        <div class="col-12 col-lg-7 pe-0 ps-0 ps-lg-5 mb-3 ">

            <img src="{{asset('/img/dos-mares-vialidades.webp')}}" alt="" class="w-100 rounded-start object-fit-cover mb-5" style="object-position:bottom; height:280px;" loading="lazy" data-fancybox="gallery">

            <div class="px-3 px-lg-0">

                @if ( app()->getLocale() == 'en' )
                    <h3 class="text-blue">Perfect climate all year long</h3>
                @else
                    <img src="{{asset('/img/clima-perfecto-todo-el-tiempo.svg')}}" alt="Clima perfecto todo el año" class="col-8 col-lg-6 d-block me-auto mb-3">
                @endif

                <p class="fs-4 fw-light mb-4">{{__('Desde surfear en las olas del Pacífico hasta practicar yoga en la playa, siempre hay algo emocionante que hacer.')}}</p>
            </div>

            <div class="text-center text-lg-start">
                <a href="#gallery-1" class="btn btn-darkblue fs-5 px-4">
                    <i class="fa-regular fa-images"></i> {{__('Galería')}}
                </a>
            </div>
        </div>

        <div class="col-4 col-lg-5 px-2 px-lg-0 d-none d-lg-block">
            <img src="{{asset('/img/andadores-dos-mares.webp')}}" alt="Andadores de Dos Mares" class="w-100 rounded-end" loading="lazy" data-fancybox="gallery">
        </div>

        <div class="col-12 col-lg-4 d-none d-lg-block">
            <img src="{{asset('/img/terraza-de-dos-mares.webp')}}" alt="Vista de la terraza de Dos Mares" class="w-100 object-fit-cover h-100 rounded-2" loading="lazy" data-fancybox="gallery">
        </div>

        <div class="col-4 col-lg-3 px-2 px-lg-0 d-none d-lg-block">
            <img src="{{asset('/img/jardines-dos-mares.webp')}}" alt="Jardines de Dos Mares" class="w-100 object-fit-cover h-100 rounded-start" loading="lazy" data-fancybox="gallery">
        </div>

    </div>

    {{-- Master Plan --}}
    <div class="pt-5 row justify-content-evenly position-relative mb-5">

        <img src="{{asset('/img/wavy-bg.webp')}}" alt="" class="w-100 position-absolute top-0 start-0 px-0 z-1" loading="lazy">

        <div class="col-12 col-lg-5 position-relative z-2 mb-5">

            <div id="carouselAmenities" class="carousel slide carousel-dark">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{asset('/img/fases-dos-mares.webp')}}" class="d-block w-100 object-fit-contain master-img" alt="Fases de Dos mares residencial" loading="lazy">
                    </div>

                    <div class="carousel-item ">
                        <img src="{{asset('/img/fase-2-2-mares.webp')}}" class="d-block w-100 object-fit-contain master-img" alt="Master Plan de Dos Mares residencial" loading="lazy">
                    </div>

                    <div class="carousel-item ">
                        <img src="{{asset('/img/master-plan.webp')}}" class="d-block w-100 object-fit-contain master-img" alt="Master Plan de Dos Mares residencial" loading="lazy">
                    </div>


                    <div class="carousel-item p-4">
                        <img src="{{asset('/img/vista-iso-2.webp')}}" class="d-block w-100 object-fit-contain master-img" alt="Vista Isométrica de Dos mares residencial" loading="lazy">
                    </div>

                    <div class="carousel-item p-4">
                        <img src="{{asset('/img/vista-superior.webp')}}" class="d-block w-100 object-fit-contain master-img" alt="Vista superior de Dos mares residencial" loading="lazy">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAmenities" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAmenities" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>
            
        </div>


        <div class="col-12 col-lg-4 align-self-center position-relative z-2 mb-5">
            <h3 class="fs-2 mb-4">{{__('Master Plan')}}</h3>
            <p class="fs-5 mb-4">{{__('Este proyecto consta de 4 etapas, con áreas de extensión desde 26,122 m² hasta 47,788 m².')}}</p>

            <table class="table table-bordered mb-5">

                <thead>
                    <tr class="table-primary fw-bold">
                        <td>{{__('Etapa')}}</td>
                        <td>{{__('Área')}}</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="fw-bold">1</td>
                        <td class="">33,304.48 m²</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">2</td>
                        <td class="">38,543.46 m²</td>
                    </tr>
                </tbody>

            </table>

            <div class="text-center text-lg-start">
                <a href="#contact-section" class="btn btn-darkblue px-4">
                    {{__('Quiero más información')}}
                </a>
            </div>

        </div>


    </div>


    {{-- Etapas --}}
    <ul class="nav nav-tabs" id="myTab" role="tablist">

        <li class="nav-item ms-3 ms-lg-5" role="presentation">
          <button class="nav-link fs-2 px-3 px-lg-5" id="phase-1-tab" data-bs-toggle="tab" data-bs-target="#phase-1-tab-pane" type="button" role="tab" aria-controls="phase-1-tab-pane" aria-selected="true">
            {{__('Etapa')}} 1
          </button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link fs-2 px-3 px-lg-5 active" id="phase-2-tab" data-bs-toggle="tab" data-bs-target="#phase-2-tab-pane" type="button" role="tab" aria-controls="phase-2-tab-pane" aria-selected="false">
            {{__('Etapa')}} 2
          </button>
        </li>

    </ul>

    <div class="tab-content bg-darkblue" id="myTabContent">
        
        <div class="tab-pane fade py-5" id="phase-1-tab-pane" role="tabpanel" aria-labelledby="phase-1-tab" tabindex="0">

            <div class="row justify-content-evenly">

                <div class="col-12 col-lg-5 align-self-center mb-5 mb-lg-0">

                    <h3 class="fs-2 mb-4">{{__('Descripción')}}</h3>

                    <p class="fs-5 fw-light">
                        {{__('Contará con amplias zonas verdes con más de 10,000 m² en total, las cuales contendrán diversas amenidades distribuidas en múltiples áreas y zonas compartidas.')}}
                    </p>
        
                    <p class="fs-5 fw-light">
                        {{__('Dos Mares Residencial estará conformado como un condominio, el cual contará con un reglamento interno que ayudará a que la conservación y mantenimiento de tu inversión esté asegurada. De igual forma, se contará con un reglamento de construcción para cuidar la imagen urbana y el paisaje del entorno del desarrollo.')}}
                    </p>

                </div>

                <div class="col-12 col-lg-5" style="background-image: url('{{asset('/img/fondo-logo-dos-mares.webp')}}'); background-position:center; background-size:contain; background-repeat:no-repeat; min-height:50vh;">
                    <div class="d-flex h-100">
                        <img src="{{asset('/img/dos-mares-etapa-1.webp')}}" alt="Master Plan de Etapa 1 de Dos Mares Residencial" class="w-100 align-self-center" data-fancybox="Fase-1" loading="lazy">
                    </div>
                </div>

            </div>

        </div>

        <div class="tab-pane fade show active" id="phase-2-tab-pane" role="tabpanel" aria-labelledby="phase-2-tab" tabindex="0">

            <div class="row justify-content-between">

                <div class="col-12 col-lg-5 align-self-center px-3 px-lg-5 py-5 py-lg-2">

                    <h3 class="fs-2 mb-4">{{__('Descripción')}}</h3>

                    <p class="fs-5 fw-light">
                        {{__('Un diseño bioclimático, con características muy orgánicas, considerando el entorno inmediato como parte del diseño. Las pendientes y vistas en el proyecto son parte esencial del paisaje.')}}
                    </p>
        
                    <p class="fs-5 fw-light">
                        {{__('Tomando en cuenta los materiales de la región para lograr una simbiosis con su entorno, tales como piedras, palapas y vegetación, con estilo único de un lugar netamente de playa.')}}
                    </p>

                </div>

                <div class="col-12 col-lg-6 px-0 position-relative pb-5 pb-lg-0">

                    <img src="{{asset('/img/dos-mares-segunda-etapa.webp')}}" alt="Master Plan de Etapa 1 de Dos Mares Residencial" class="w-100 px-2 px-lg-0" data-fancybox="Fase-2" loading="lazy">

                    <div class="position-absolute start-0 bottom-0 w-25 bg-darkblue p-3 mb-5 mb-lg-0" style="border-top-right-radius: 20px;">
                        <img src="{{asset('/img/planos-segunda-etapa.webp')}}" class="w-100" alt="Planos de segunda etapa de Dos Mares Residencial" data-fancybox="Fase-2">
                    </div>
                   
                    
                </div>

            </div>

        </div>

    </div>


    {{-- Mapa de ubicación --}}
    <div class="row position-relative mb-6">
        <img src="{{asset('/img/wavy-bg.webp')}}" alt="" class="w-100 position-absolute top-0 start-0 px-0 z-1" loading="lazy">

        <div class="col-12 col-lg-4 align-self-end ps-3 ps-lg-5 order-2 order-lg-1 mt-4 mt-lg-0">
            <h4 class="fs-2 mb-4">{{__('Ubicación')}} <img src="{{asset('/img/riviera-nayarit.svg')}}" alt="Riviera Nayarit" height="38px" class="ms-2"></h4>

            <ul class="row fs-5">

                <div class="col-12 col-lg-6">

                    <li>
                        <span class="fw-bold text-blue">5 min.</span> Punta Mita
                    </li>

                    <li>
                        <span class="fw-bold text-blue">15 min.</span> Sayulita
                    </li>

                    <li>
                        <span class="fw-bold text-blue">20 min.</span> Cruz de Huanacaxtle
                    </li>

                    <li>
                        <span class="fw-bold text-blue">25 min.</span> Bucerías
                    </li>

                </div>

                <div class="col-12 col-lg-6">

                    <li>
                        <span class="fw-bold text-blue">30 min.</span> Nuevo Nayarit
                    </li>

                    <li>
                        <span class="fw-bold text-blue">45 min.</span> {{__('Aeropuerto internacional PVR')}}
                    </li>

                    <li>
                        <span class="fw-bold text-blue">60 min.</span> Puerto Vallarta
                    </li>

                </div>

            </ul>

        </div>

        <div class="col-12 col-lg-8 position-relative z-2 order-1 order-lg-2 pe-0">
            <img src="{{asset('/img/mapa-de-dos-mares.webp')}}" alt="Mapa de ubicación de Dos Mares Residencial" class="w-100" loading="lazy">
        </div>

    </div>

    {{-- Playa --}}
    <div class="row justify-content-center mb-5">

        <div class="col-12 col-lg-5 mb-4 mb-lg-0 position-relative">

            <div class="bg-darkblue position-absolute start-0 ms-5 top-0 fs-5 rounded-pill px-4 py-2" style="transform: translateY(-50%);">
                {{__('Playa principal')}}
            </div>

            <img src="{{asset('/img/map-dos-mares.webp')}}" alt="Ubicacion de Dos Mares Residencial" class="w-100" loading="lazy">
        </div>

        <div class="col-12 col-lg-5 align-self-center px-3 px-lg-5">

            <h4 class="mb-4">
                <div class="fs-2 mb-2">{{__('La Lancha')}}</div>
                <div class="text-blue fs-5">{{__('Ubicada aproximadamente a 600 m')}}</div>
            </h4>

            <p class="fs-5">
                {{__('La Lancha es una playa pintoresca con arena dorada y aguas cristalinas, ideal para surfistas y amantes de la naturaleza. Rodeada de exuberante vegetación, ofrece un ambiente tranquilo y relajado, perfecto para escapar del bullicio y disfrutar de la belleza natural.')}}
            </p>

        </div>

    </div>


    {{-- Formulario de contacto --}}
    <livewire:contact-form />


    @script
        <script>
            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>
    @endscript

</div>