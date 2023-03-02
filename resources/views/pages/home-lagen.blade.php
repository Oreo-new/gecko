<x-app-layout>

    <div id="scene" class="flex items-center w-full h-screen bg-no-repeat bg-cover home-cover" style="background-image: url({{ asset('/storage/' .$page->image) }})">
        <div class="home-banner w-full block ">
            <div class="text-5xl text-center text-neutral-300 roboto ">{!!$page->intro_text!!}</div>
            <div class="text-5xl text-center text-white lobster mt-4">{!!$page->full_text!!}</div>
            <button class="mx-auto block bg-stone-200 rounded mt-8 px-4 py-2 roboto text-lg">
                Plan your vacation
            </button>
        </div>
    </div>
    <div class="container mx-auto px-4">
        @foreach($page_article as $item)
            <div class="flex w-full my-36">
                <div class="bg-neutral-300 h-[500px] w-2/5 relative {{$loop->iteration % 2 == 0 ? 'order-1' : 'order-2'}}">
                    <div class="absolute bg-center bg-cover h-full w-full top-[-30px] {{$loop->iteration % 2 == 0 ? 'right-[-30px]' : 'left-[-30px]'}}" style="background-image: url({{ asset('/storage/' .$item->main_image) }});">

                    </div>
                </div>
                <div class="w-3/5 {{$loop->iteration % 2 == 0 ? 'order-2' : 'order-1'}} {{$loop->iteration % 2 == 0 ? 'pl-20' : 'pr-20'}} mt-10">
                    <span class="text-3xl text-orange-200 lobster w-full">{{$item->mini_title}}</span>
                    <h1 class="text-4xl roboto w-full font-thin">{{$item->title}}</h1>
                    <div class="roboto w-full text-xl mt-8">
                        {!!$item->description!!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="w-full h-[450px] bg-fixed bg-cover  footer-cover" style="background-image: url({{ asset('images/el-nido.jpeg') }})">

    </div>
    <div class="w-full bg-gray-400">
        <div class="container mx-auto px-4">
            <div class="flex w-full py-20">
                <div class="w-1/2 min-h-[300px] bg-cover bg-center" style="background-image: url({{ asset('/storage/' .$book->main_image) }})">
                </div>
                <div class="w-1/2">
                    <p class="lobster text-3xl text-center mt-10">{{$book->title}}</p>
                    <div class="roboto text-xl text-center mt-4">{!!$book->description!!}</div>
                    <button class="mx-auto block bg-stone-200 rounded mt-8 px-4 py-2 roboto text-lg">
                        Book now
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>