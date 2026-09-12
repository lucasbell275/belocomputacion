@extends('layouts.app')

@push('scripts')
@endpush

@section('content')

<div class="fixed inset-0 -z-10 bg-fixed bg-cover bg-center bg-[url('{{ asset('images/pc-gaming.png') }}')]" >
    <div class="absolute inset-0 bg-black/80 backdrop-blur-[18px]"></div>
</div>


<div class="relative z-10 flex flex-col min-h-screen justify-between">
    

    <div class="flex flex-col lg:flex-row justify-between items-center w-full">
        

        <div class="container mx-auto py-20 px-5 text-[#008DD5] flex flex-col items-start gap-3">
            <div class="inline-block">
                <h1 class="font-[Bebas_Neue] text-5xl md:text-9xl leading-tight tracking-[0.04em]">belocomputacion</h1>
                <span class="block h-1 bg-[#008DD5] md:-mt-5"></span>
            </div>
            
            <p class="text-sm md:text-2xl font-[Montserrat] font-semibold text-gray-300 tracking-wide">
                La computadora de tus sueños, a un solo click.
            </p>

            <div class="flex items-center mt-5 px-5 bg-gradient-to-l from-[#3a3d4c] to-blue-600 rounded-lg group shadow-lg shadow-[#008DD5]/30 hover:shadow-[#008DD5]/60 transition-all">
                <a href="{{route('computadoras.index')}}" class="px-8 py-6 text-xl md:text-2xl font-bold text-gray-200 flex gap-5 items-center">
                    EXPLORAR NUESTRAS PCS 
                    <svg xmlns="http://www.w3.org/2000/svg" width="45px" height="45px" class="group-hover:text-[#008DD5] group-hover:translate-x-1 duration-200" viewBox="0 0 24 24"><title>round-arrow-right-bold-duotone</title><g fill="currentColor"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" opacity=".3"/><path d="M13.5303 8.46967C13.2374 8.17678 12.7626 8.17678 12.4697 8.46967C12.1768 8.76256 12.1768 9.23744 12.4697 9.53033L14.1893 11.25H8C7.58579 11.25 7.25 11.5858 7.25 12C7.25 12.4142 7.58579 12.75 8 12.75H14.1893L12.4697 14.4697C12.1768 14.7626 12.1768 15.2374 12.4697 15.5303C12.7626 15.8232 13.2374 15.8232 13.5303 15.5303L16.5303 12.5303C16.8232 12.2374 16.8232 11.7626 16.5303 11.4697L13.5303 8.46967Z"/></g></svg>
                </a>
            </div>
        </div>


        <div class="px-5 py-5 py-20 md:px-20 w-full flex justify-center">
            <div class="container relative w-full max-w-[700px] h-[550px] bg-[#3a3d4c]/70 backdrop-blur-4xl  rounded-lg hover:scale-[1.01] transition-transform duration-400 group hover:shadow-lg hover:shadow-[#008DD5]/25">
                <div x-data="{
                    recorrido: 0,
                    totalOfertas: {{ count($oferta) - 1 }},
                    siguiente() {
                        if (this.recorrido >= this.totalOfertas) { this.recorrido = 0 } else { this.recorrido++ }
                    },
                    anterior() {
                        if (this.recorrido === 0) { this.recorrido = this.totalOfertas } else { this.recorrido-- }
                    }
                }" x-init="setInterval(() => {
                    if (recorrido >= totalOfertas) { recorrido = 0 } else { recorrido++ }
                }, 2500)" class="py-6 h-full flex flex-col justify-between">
                    
                    <p class="absolute top-2 left-1/2 -translate-x-1/2 rounded-md bg-gradient-to-r from-blue-400 to-pink-500 px-5 py-2 md:text-xl font-semibold text-white">
                        🔥 OFERTAS 🔥
                    </p>

                    <button @click="siguiente" class="absolute top-1/2 z-10 right-0 transform -translate-y-1/2 bg-blue-400/10 hover:bg-blue-400/20 text-blue-400 p-4 rounded-r-lg">                        <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><title>arrow-right-2</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 17l5-5m0 0l-5-5"/></svg></button>
                    <button @click="anterior" class="absolute top-1/2 z-10 left-0 transform -translate-y-1/2 bg-blue-400/10 hover:bg-blue-400/20 text-blue-400 p-4 rounded-l-lg"><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><title>arrow-left-2</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 7l-5 5m0 0l5 5"/></svg></button>

                    @foreach ($oferta as $index => $computadora)
                        <div x-show="recorrido === {{ $index }}" x-transition class="absolute inset-0 w-full h-full flex flex-col items-center justify-center pt-10">
                            <a href="{{ route('computadoras.show', $computadora->slug) }}" class="w-full h-full flex flex-col items-center justify-center">
                                <img src="{{ asset('storage/' . $computadora->imagen) }}" alt="Oferta {{ $index + 1 }}" class="object-contain max-h-[380px] px-2 drop-shadow-lg">
                                <p class="pb-6 text-gray-300 font-bold text-sm md:text-lg mt-2">
                                    {{ $computadora->nombre }} - ${{ number_format($computadora->precio, 2) }}
                                </p>
                            </a>
                        </div>
                    @endforeach

                    <div class="absolute bottom-2 flex justify-center -translate-x-1/2 left-1/2 z-20">
                        @foreach ($oferta as $index => $computadora)
                            <button @click="recorrido = {{ $index }}"
                                :class="recorrido === {{ $index }} ? 'bg-blue-400' : 'bg-gray-400'"
                                class="w-3 h-3 rounded-full mx-1"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-5 md:px-10 py-8 text-gray-200 mt-auto">
        <div class="bg-[#3a3d4c]/90 backdrop-blur-sm p-6 rounded-lg items-center flex justify-between gap-4 shadow-md">
            <p class="font-[Doppio_One] tracking-wider text-xl md:text-2xl font-bold">ENVÍOS A TODO EL PAÍS</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 24 24" class="shrink-0"><title>truck</title><path fill="#008DD5" d="M5.5 14a2.5 2.5 0 0 1 2.45 2H15V6H4a2 2 0 0 0-2 2v8h1.05a2.5 2.5 0 0 1 2.45-2m0 5a2.5 2.5 0 0 1-2.45-2H1V8a3 3 0 0 1 3-3h11a1 1 0 0 1 1 1v2h3l3 4v5h-2.05a2.5 2.5 0 0 1-4.9 0h-7.1a2.5 2.5 0 0 1-2.45 2m0-4A1.5 1.5 0 0 0 4 16.5A1.5 1.5 0 0 0 5.5 18A1.5 1.5 0 0 0 7 16.5A1.5 1.5 0 0 0 5.5 15m12-1a2.5 2.5 0 0 1 2.45 2H21v-3.68l-.24-.32H16v2.5c.42-.31.94-.5 1.5-.5m0 1a1.5 1.5 0 0 0-1.5 1.5a1.5 1.5 0 0 0 1.5 1.5a1.5 1.5 0 0 0 1.5-1.5a1.5 1.5 0 0 0-1.5-1.5M16 9v2h4l-1.5-2z"/></svg>
        </div>

        <div class="bg-[#3a3d4c]/90 backdrop-blur-sm p-6 rounded-lg items-center flex justify-between gap-4 shadow-md">
            <p class="font-[Doppio_One] tracking-wider text-xl md:text-2xl font-bold">ASESORAMIENTO EXPERTO</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 16 16" class="shrink-0"><title>service-outline</title><path fill="none" stroke="#008DD5" stroke-linejoin="round" d="M14.5 12.5h-2v-4h2zm0 0c.667-3.667.3-11-6.5-11s-7.167 7.333-6.5 11m0 0h2v-4h-2zm7 2c1.31.11 3.476-.268 4.816-2m-4.816 2v-1h-1v1z"/></svg>
        </div>

        <div class="bg-[#3a3d4c]/90 backdrop-blur-sm p-6 rounded-lg items-center flex justify-between gap-4 shadow-md">
            <p class="font-[Doppio_One] tracking-wider text-xl md:text-2xl font-bold">GARANTÍA Y SERVICIO TÉCNICO</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 2048 2048" class="shrink-0"><title>c-r-m-services</title><path fill="#008DD5" d="M1185 1179q-88-75-195-115t-222-40q-88 0-170 23t-153 64t-129 100t-100 130t-65 153t-23 170H0q0-120 35-231t101-205t156-167t204-115q-113-74-176-186t-64-248q0-106 40-199t109-163T568 40T768 0t199 40t163 109t110 163t40 200q0 66-16 129t-48 119t-75 103t-101 83q65 25 124 61t111 81zM384 512q0 80 30 149t82 122t122 83t150 30q79 0 149-30t122-82t83-122t30-150q0-79-30-149t-82-122t-123-83t-149-30q-80 0-149 30t-122 82t-83 123t-30 149m1344 256q66 0 124 25t101 69t69 102t26 124t-25 124t-69 102t-102 69t-124 25q-23 0-45-3l-587 587q-27 27-62 41t-74 15q-40 0-75-15t-61-41t-41-61t-15-75q0-38 14-73t42-63l587-587q-3-22-3-45q0-66 25-124t68-101t102-69t125-26m0 512q40 0 75-15t61-41t41-61t15-75q0-41-19-82l-146 146h-91v-91l146-146q-41-19-82-19q-40 0-75 15t-61 41t-41 61t-15 75q0 41 19 82l-640 641q-19 19-19 45t19 45t45 19t45-19l641-640q41 19 82 19"/></svg>
        </div>
    </div>

<a href="https://wa.me/1111111111?text=Hola,%20estoy%20interesado%20en%20comprarles%20una%20PC" 
   target="_blank" 
   rel="noopener noreferrer"
   class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-14 h-14 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-2xl transition-all duration-300 hover:scale-110 hover:shadow-green-500/50 group">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>


    <span class="absolute right-16 bg-gray-900 text-white text-xs font-semibold px-3 py-1.5 rounded-md shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none whitespace-nowrap">
        ¡Escribinos por WhatsApp!
    </span>
</a>

</div>
@endsection