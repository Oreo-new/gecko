@php
    $menu  = App\Models\Menu::getMenus();
    $counter = 0;
@endphp

<div class="navigation">
    <div class="w-full">
        <div class="container mx-auto px-4">
            <div class="flex items-center">
                <div class="menu flex  w-full">
                    <ul class="list-none flex m-0 p-0 justify-center w-full items-center">
                        @foreach($menu as $item)
                            @php
                                $counter++;
                            @endphp
                            @if($counter == 3)
                                <div class="logo flex py-4 px-14">
                                    <img src="{{ asset('images/lagen-logo.png') }}" alt="langen" class="w-80">
                                </div> 
                            @endif
                            <li class="px-6 text-xl"><a href="{{$item->url}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                
            </div>
            
        </div>
    </div>
</div>