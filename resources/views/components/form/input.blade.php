<div class="flex flex-col">
    @if(!empty($label))
        <label for="{{$name}}" class="text-sm font-bold text-gray-600">
            {{$label}}
        </label>
    @endif

    <div class="relative w-full flex items-center justify-center">
        @if(!empty($icon) && $iconPosition === 'left')
        <x-common.icon :name="$icon" class="absolute left-4"></x-common.icon>
        @endif
        <input
            type="{{$type}}"
            name="{{$name}}"
            placeholder="{{$placeholder}}"

            @class([
                " w-full bg-gray-200 border border-gray-400 px-3 active:border-blue-500 disabled:border-gray-500 disabled:bg-gray-500 rounded ",
                "py-3" => $size === "large",
                "py-2" => $size === "medium",
                "py-0.5" => $size === "small",
                 "pl-12" =>  !empty($icon) && $iconPosition === 'left',
                 "pr-12" =>  !empty($icon) && $iconPosition === 'right'
            ])
        />
            @if(!empty($icon) && $iconPosition === 'right')
                <x-common.icon :name="$icon" class="absolute right-4"></x-common.icon>
            @endif
    </div>
</div>
