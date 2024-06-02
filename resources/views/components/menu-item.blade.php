@props(['item'])
@if(Auth::check())
    @if( in_array(Auth::user()->role,$item->roles))
        <li>
            <a href="{{$item->path}}" class="inline-flex items-center px-2 py-3 text-white bg-blue-700 rounded-lg active w-full " aria-current="page">
                @inculde("{{$item->icon}}")
                {{$item->name}}
            </a>
        </li>
    @endif
@endif
