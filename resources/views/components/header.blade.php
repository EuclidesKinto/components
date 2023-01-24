<div class="flex flex-row items-center justify-between py-4 w-full border-b">
    <div class="w-14" >
        <img src="{{ Vite::images($logo)}}" alt="">
    </div>

    <div class=" hidden md:flex flex-row items-center space-x-1">
        <x-form.input
            type="search"
            name="search"
            placeholder="Pesquisar..."
            size="large"
            icon="search"
            icon-position="left"
        ></x-form.input>
        <x-common.button
            type="button"
            variation="primary"
            size="large"
            icon="search"
            icon-position="left">
        </x-common.button>
    </div>

    <div class="flex flex-row items-center space-x-1">
        <x-common.button
            type="button"
            variation="primary"
            size="large"
            icon="person"
            text="Entrar"
            icon-position="left">
        </x-common.button>

        <x-common.button
            type="button"
            variation="outline"
            size="large"
            icon="shopping_cart"
            icon-position="left">
        </x-common.button>
    </div>
</div>
