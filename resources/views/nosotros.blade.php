@extends('layouts.app')


@push('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        body{
            background-color: #252836;

        }
    </style>
    
@endpush
@section('content')
    <div class="flex flex-row">
        <div class=" flex flex-col items-start py-20 pl-20 gap-3  ">
            <div>
                <h1 class="font-['Bebas_Neue'] text-[60px] leading-tight tracking-[0.04em] text-[#008DD5]">belocomputacion</h1>
                <span class="block h-1 bg-[#008DD5] -mt-4"></span>
            </div>
            <div  class="text-[15.4px] font-semibold inline-block max-w-2xl text-gray-300 leading-[1.5]">
                <p><b>Pasión por la tecnología, compromiso con vos.</b></p> <p> En belocomputacion, entendemos que tu computadora no es solo una herramienta; es tu portal al trabajo, al gaming y a tus proyectos más importantes. Por eso, nuestra misión principal es brindarte la tranquilidad y confianza que necesitás al momento de equiparte.</p>

                <p> <b>¿Por qué elegirnos?</b> </p>
                <p>Calidad sin compromisos: Seleccionamos meticulosamente cada componente de nuestro catálogo, trabajando exclusivamente con marcas líderes y confiables del mercado internacional.</p>

                <p> <b>Asesoramiento experto:</b> </p> <p> No solo vendemos hardware; te acompañamos en la elección. Nuestra predisposición es total para ayudarte a encontrar el equilibrio perfecto entre rendimiento y presupuesto, asegurando que cada pieza
                se adapte a tus necesidades específicas.</p> 

                <p><b>Garantía de confianza:</b> </p>  <p> Tu inversión está protegida. Nos esforzamos por ofrecer productos que superen los estándares de calidad, para que tu única preocupación sea disfrutar de la potencia de tu nueva PC.</p>

            <p> Estamos acá para convertir la complejidad de elegir componentes en una experiencia simple, segura y a un solo  <b>click</b.</p>

            </div>

        </div>

            <p class="text-[24px] font-semibold inline-block max-w-4xl py-20 pl-55 text-gray-300"> Nos podes encontrar en: <iframe src="https://www.google.com/maps/embed?pb=!3m2!1ses-419!2sar!4v1777957890473!5m2!1ses-419!2sar!6m8!1m7!1spR_M07mkBDPDg_W3sZtIgQ!2m2!1d-34.66527539203259!2d-58.47086869563246!3f186.24431515499384!4f-15.441706786084879!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </p>
</div>
@endsection