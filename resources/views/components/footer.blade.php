<footer class="pb-3 pt-5 bg-darkblue position-relative">

    <img src="{{asset('/img/wavy-bg.webp')}}" alt="" class="w-100 position-absolute z-0 start-0 bottom-100" style="transform: rotate(180deg);">

    <div class="row justify-content-evenly mt-4">
        
        <div class="col-7 col-lg-3 col-xxl-2 mb-5 mb-lg-0">
            <img src="{{asset('/img/logo-dos-mares-blanco.webp')}}" alt="Logo de Dos Mares Residencial" class="w-100">
        </div>

        <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center text-lg-start align-self-center">
    
            <div class="fs-3 mb-3">{{__('Contacto')}}</div>

            <a href="mailto:hola@residencialdosmares.com" class="link-light fs-5 text-decoration-none d-block mb-2 fw-light">
                <i class="fa-solid fa-envelope"></i> hola@residencialdosmares.com
            </a>

            <a href="tel:+523223775619" class="link-light fs-5 text-decoration-none d-block mb-2 fw-light">
                <i class="fa-solid fa-phone"></i> +52 322 377 5619
            </a>

            <a href="https://www.facebook.com/dosmarespuntademita/" target="_blank" rel="noopener noreferrer" aria-label="Facebook page" class="link-light text-decoration-none fs-4 me-3">
                <i class="fa-brands fa-facebook-f"></i>
            </a>

            <a href="https://www.instagram.com/dosmarespuntademita" target="_blank" rel="noopener noreferrer" aria-label="Instagram page" class="link-light text-decoration-none fs-4">
                <i class="fa-brands fa-instagram"></i>
            </a>
                
        </div>

        <div class="col-12 col-lg-3 mb-5 mb-lg-0 text-center text-lg-start px-4 px-lg-3  align-self-center">
            <div class="fs-3 mb-3">{{__('Domicilio')}}</div>
    
            <address class="fs-5 fw-light mb-3">
                <i class="fa-solid fa-location-dot"></i> Punta Mita, Nayarit.
            </address>

    
        </div>

    
        <div class="col-12 pt-2 px-3 text-center mt-5">
            <i class="fa-regular fa-copyright"></i> Copyright 2024 {{__('Todos los derechos reservados')}} | <a href="{{route('privacy', request()->query() )}}" wire:navigate class="link-light fw-light">{{__('Aviso de Privacidad')}}</a>
            | 
           <a href="https://punto401.com" class="link-light fw-light text-decoration-none">
               {{__('Sitio web hecho por')}} <img width="70px" src="{{asset('img/logo-p401.svg')}}" alt="Logo de Punto401 Marketing">
           </a>
        </div>


    </div>

</footer>