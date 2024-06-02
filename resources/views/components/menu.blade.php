@props(['items'])
<ul class="flex-column space-y space-y-2 text-sm font-medium text-gray-500 ">
    @foreach($items as $item)
        @component("components.menu-item")
            @prop(['item'=>$item])
        @endcomponent
    @endforeach
</ul>

