<div class="row justify-content-evenly position-relative z-1 mb-6 pt-5 px-3 px-lg-0">
    {{-- The whole world belongs to you. --}}

    <div class="col-12 col-lg-5 align-self-center mb-2 mb-lg-0">
        
        <h5 class="fs-3">{{__('¿Necesitas más información?')}}</h5>
        <p class="text-blue fs-5">{{__('Llena el formulario y nos pondremos en contacto')}}</p>
        <hr class="blue-hr">

    </div>

    <div class="col-12 col-lg-5 p-4 p-lg-5 rounded-4" style="background-image: url('{{asset('/img/form-bg.webp')}}'); background-repeat:no-repeat; background-size:cover;">
        <img src="{{asset('img/logo-dos-mares-blanco.webp')}}" alt="Logo de Dos Mares Residencial" class="w-25 d-block mx-auto">

        <form wire:submit="save" id="lead_form">
                                
            <div class="row fs-5 fw-light">
    
                <div class="col-12 mb-3">
                    <label for="full_name" class="me-3 align-self-center">{{__('Nombre')}}:</label>
                    <input type="text" wire:model="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror" required>
                </div>
    
                <x-honeypot/>
    
                <div class="col-12 mb-3">
                    <label for="contact_email" class="me-3 align-self-center">{{__('Correo')}}:</label>
                    <input type="email" wire:model="contact_email" id="contact_email" class="form-control" required>
                </div>
    
                <div class="col-12 mb-3">
                    <label for="contact_phone" class="me-3 align-self-center">{{__('Teléfono')}}:</label>
                    <input type="tel" wire:model="contact_phone" id="contact_phone" class="form-control">
                </div>
    
                <div class="col-12 mb-4">
                    <label for="message" class="me-3">{{__('Notas')}}:</label>
                    <textarea wire:model="message" id="message" cols="30" required class="form-control" rows="3"></textarea>
                </div>
    
                <input type="hidden" wire:model="url" id="url" value="{{ request()->fullUrl() }}">
    
                <div class="col-12 text-center mb-3">
                    <button type="submit" class="btn btn-light fs-5 w-100" @if(session('message')) disabled @endif>
                        {{__('Enviar')}}
                    </button>
                </div>
    
            </div>
    
        </form>

        {{-- Mensaje de éxito --}}
        @if (session('message'))
            <div class="text-white rounded-2 p-3 bg-success fw-semibold fs-5 text-center mt-3 mb-4">
                <i class="fa-regular fa-circle-check"></i> {{__(session('message'))}}
            </div>
        @endif

        <div wire:loading class="text-center fs-5 my-3 text-white"> 
            <i class="fa-solid fa-spin fa-spinner"></i> {{__('Enviando, por favor espere')}}
        </div>    

    </div>

</div>
