<x-app-layout>
 
    <div class="fixed w-full top-0 z-10 bg-[#FFFFFF] py-2">
        <img src="{{ asset('images/langen-logo.jpeg') }}" alt="langen" class="w-80 mx-auto">
    </div>
    <div id="" class="flex  items-center w-full h-screen bg-no-repeat bg-cover home-cover" style="background-image: url({{ asset('/storage/' .$page->image) }});">
        
        <div class="w-full block">
            <div class="text-5xl text-center text-[#1064BA] merri">Greetings to the USA</div>
            <div class="text-4xl text-center text-[#FE9601] roboto mt-10">Welcome to Lagen Island! <br />
                The island paradise</div>


            <div x-data="{ open: false }">
                <button class="mx-auto block border-2 border-[#FE9601] text-white mt-8 px-4 py-2 roboto text-lg cursor-pointer z-30 pointer-events-auto" @click="open = ! open">
                    Our US Booking partners
                </button>

                <div x-show="open" @click.outside="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 right-10"
                    x-transition:enter-end="opacity-100 right-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 right-100"
                    x-transition:leave-end="opacity-0 right-10">
                    <div class="z-10" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 flex items-center bg-gray-500 bg-opacity-75 transition-opacity z-40 top-0 bottom-0 w-full h-full">
                            <div class="w-[400px] h-[400px] bg-white relative mx-auto rounded p-10">
                                <span class="absolute top-2 right-2 cursor-pointer" @click="open = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                      </svg>                                      
                                </span>
                                @foreach($page_article as $item)
                                <div class="border-b-2 mt-9 mb-2 flex justify-between">
                                    <img src="{!! strip_tags($item->description )!!}" alt="{{$item->title }}" class="w-[100px] h-[30px]">
                                    <a href="{{$item->link }}" class="text-sm rounded-full bg-[#eeaa08] px-4 py-1 mb-2">View deal</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

</x-app-layout>