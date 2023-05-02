<x-app-layout>
 
    <div class="fixed w-full top-0 z-10">
        <div class="flex items-center content-between w-full bg-slate-50 ">
            <ul class="list-none hidden lg:flex m-0 p-0 w-full items-center justify-end py-5 z-20">
                <li class="px-6 text-2xl text-blue-500 hover:text-blue-700"><a href="#">Accomodation</a></li>
                <li class="px-6 text-2xl text-blue-500 hover:text-blue-700"><a href="#">Activities</a></li>
                <li class="px-6 text-2xl text-blue-500 hover:text-blue-700"><a href="#">Transportation</a></li>
            </ul>
            <div></div>
            <div  x-cloak x-data="{ open: false }">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block lg:hidden absolute w-8 h-8 top-4 right-3 cursor-pointer" @click="open = ! open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <div x-show="open" @click.outside="open = false"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 right-10"
                    x-transition:enter-end="opacity-100 right-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 right-100"
                    x-transition:leave-end="opacity-0 right-10">
                    <div class="z-10" role="dialog" aria-modal="true">
                        <div class="fixed  justify-end flex items-center bg-gray-500 bg-opacity-75 transition-opacity z-40 top-0 bottom-0 right-0 w-full h-full">
                            <div class="w-[200px] h-screen bg-white relative p-2">
                                <span class="absolute top-2 right-2 cursor-pointer" @click="open = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-8 h-8 top-6 right-3 ">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                      </svg>                                      
                                </span>
                                <ul class="list-none mt-16">
                                    <li class="pl-4 text-xl hover:text-blue-700 text-blue-500 mt-3 underline"><a href="#">Accomodation</a></li>
                                    <li class="pl-4 text-xl hover:text-blue-700 text-blue-500 mt-3 underline"><a href="#">Activities</a></li>
                                    <li class="pl-4 text-xl hover:text-blue-700 text-blue-500 mt-3 underline"><a href="#">Transportation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
    </div>
    <div id="" class="flex  items-center w-full h-screen bg-no-repeat bg-cover home-cover bg-top" style="background-image: url({{ asset('/images/d-gecko-hotel.png') }});">
        
        <div class="w-full block mt-40 sm:mt-32 md:mt-32 lg:mt-32">


            <div x-cloak x-data="{ open: false }">
                <button class="mx-auto block bg-blue-500 hover:bg-blue-700 rounded text-white mt-8 px-4 py-2 roboto text-sm md:text-lg cursor-pointer z-30 pointer-events-auto" @click="open = ! open">
                    Check Availability
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
                            <div class="w-full sm:w-[350px] sm:h-[350px] bg-white relative mx-4 sm:mx-auto rounded p-2 md:p-10">
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