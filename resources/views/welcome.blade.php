<x-layout title="Inicio">
    <x-slot:menuExtra>
        <li><a href="/categorias">Categorías</a></li>
        <li><a href="/productos">Productos</a></li>
        <li><a href="/inventarios">Inventarios</a></li>
    </x-slot:menuExtra>
    <div class="flex justify-center items-center min-h-[70vh] gap-6">
        <div
            class="card w-96 bg-base-300 card-md shadow-sm flex flex-col items-start justify-between h-[180px] transition-all duration-300 group hover:-translate-y-[5px] hover:shadow-[0_10px_25px_rgba(51,51,153,0.15)] hover:border-[#99CCFF]">
            <a href="/categorias" class="w-full">
                <div class="card-body">
                    <div
                        class="w-[50px] h-[50px] bg-base-200 rounded-[10px] flex items-center justify-center mb-4 text-[#2a1bf3] transition-all duration-300 group-hover:bg-[#2a1bf3] group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4h6v6h-6l0 -6" />
                            <path d="M14 4h6v6h-6l0 -6" />
                            <path d="M4 14h6v6h-6l0 -6" />
                            <path d="M14 17a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        </svg>
                    </div>
                    <h2 class="card-title">Categorías</h2>
                    <p>Ver categorías, agregar, editar o eliminar</p>
                </div>
            </a>
        </div>
        <div
            class="card w-96 bg-base-300 card-md shadow-sm flex flex-col items-start justify-between h-[180px] transition-all duration-300 group hover:-translate-y-[5px] hover:shadow-[0_10px_25px_rgba(51,51,153,0.15)] hover:border-[#99CCFF]">
            <a href="/productos" class="w-full">
                <div class="card-body">
                    <div
                        class="w-[50px] h-[50px] bg-base-200 rounded-[10px] flex items-center justify-center mb-4 text-[#2a1bf3] transition-all duration-300 group-hover:bg-[#2a1bf3] group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-cheese">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4.519 20.008l16.481 -.008v-3.5a2 2 0 1 1 0 -4v-3.5h-16.722" />
                            <path
                                d="M21 9l-9.385 -4.992c-2.512 .12 -4.758 1.42 -6.327 3.425c-1.423 1.82 -2.288 4.221 -2.288 6.854c0 2.117 .56 4.085 1.519 5.721" />
                            <path d="M15 13v.01" />
                            <path d="M8 13v.01" />
                            <path d="M11 16v.01" />
                        </svg>
                    </div>
                    <h2 class="card-title">Productos</h2>
                    <p>Ver productos, agregar, editar o eliminar</p>
                </div>
            </a>
        </div>
        <div
            class="card w-96 bg-base-300 card-md shadow-sm flex flex-col items-start justify-between h-[180px] transition-all duration-300 group hover:-translate-y-[5px] hover:shadow-[0_10px_25px_rgba(51,51,153,0.15)] hover:border-[#99CCFF]">
            <a href="/inventarios" class="w-full">
                <div class="card-body">
                    <div
                        class="w-[50px] h-[50px] bg-base-200 rounded-[10px] flex items-center justify-center mb-4 text-[#2a1bf3] transition-all duration-300 group-hover:bg-[#2a1bf3] group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-building-warehouse">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21v-13l9 -4l9 4v13" />
                            <path d="M13 13h4v8h-10v-6h6" />
                            <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
                        </svg>
                    </div>
                    <h2 class="card-title">Inventarios</h2>
                    <p>Ver stock actual, agregar, editar o eliminar</p>
                </div>
            </a>
        </div>
    </div>
</x-layout>