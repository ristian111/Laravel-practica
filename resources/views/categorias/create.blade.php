<x-layout class="category create">
    <x-slot:menuExtra>
        <li><a href="/categorias">Categorías</a></li>
    </x-slot:menuExtra>
    <div class="card card-border bg-base-300 w-96 h-auto mx-auto mt-15 mb-15 shadow-xl">
        <div class="card-body mx-auto w-75">

            <h2 class="card-title mx-auto mb-6">Registrar categoría</h2>

            <form action="/categorias" method="post" id="form_create_category" class="space-y-4">
                @csrf

                <div class="flex flex-col">
                    <label for="nombre" class="label label-text pb-1">Nombre: </label>
                    <input type="text" name="nombre" id="nombre"
                        class="input input-bordered w-full @error('nombre') input-error @enderror"
                        placeholder="Nombre de la categoría" value="{{ old('nombre', '') }}">
                    <x-forms.validaciones field="nombre"></x-forms.validaciones>
                </div>

                <div class="flex flex-col">
                    <label for="descripcion" class="label label-text pb-1">Descripción: </label>
                    <textarea name="descripcion" id="descripcion" placeholder="Descripción de la categoría"
                        class="textarea textarea-sm h-24 @error('descripcion') textarea-error @enderror">{{ old('descripcion', '') }}</textarea>
                    <x-forms.validaciones field="descripcion"></x-forms.validaciones>
                </div>

            </form>
            <div class="card-actions justify-center mt-6">
                <button class="btn btn-neutral w-full" type="submit" form="form_create_category">Agregar</button>
            </div>
        </div>
    </div>

</x-layout>