<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentModule) ? ucwords($currentModule->name) : "Modules"}}
            
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item 
        href="/" 
        :active="request()->routeIs('home')"
    >
        All
    </x-dropdown-item>

    @foreach (\App\Models\Module::all() as $module)
        <x-dropdown-item
            href="/?module={{ $module->name }}"
            :active="request()->is('modules/{{ $module->name }}')"
        >
            {{ ucwords($module->name) }} 
        </x-dropdown-item>
    @endforeach
</x-dropdown>