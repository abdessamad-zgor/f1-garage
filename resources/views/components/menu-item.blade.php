@props(['item'])
@if(Auth::check())
    @if(in_array(Auth::user()->role,$item['roles']))
        <li>
            <a href="{{$item['url']}}" class="inline-flex items-center px-2 py-3 text-white bg-blue-700 rounded-lg active w-full " aria-current="page">
                @component("components.icon", ['name'=>$item['icon']])
                @endcomponent
                {{$item['name']}}
            </a>
        </li>
    @endif
@endif
