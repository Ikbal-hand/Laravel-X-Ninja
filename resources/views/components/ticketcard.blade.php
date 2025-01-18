       <article class="flex bg-white transition hover:shadow-xl justify-center">
           <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
               <time datetime="2022-10-10"
                   class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                   <span>{{ $timeline }}</span>
                   <span class="w-px flex-1 bg-gray-900/10"></span>
                   <span>{{ $month }}</span>
               </time>
           </div>
           <div class="hidden sm:block sm:basis-56">
               <img alt="" src="{{ $image_url }}" class="aspect-square h-full w-full object-cover" />
           </div>
           <div class="flex flex-1 flex-col justify-between">
               <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                   <a href="#">
                       <h3 class="font-bold uppercase text-gray-900">
                           {{ $name }}
                       </h3>
                   </a>

                   <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
                       {{ $descriptions }}
                   </p>
               </div>

               <div class="sm:flex sm:items-end sm:justify-end">
                   <a href="#"
                       class="block bg-green-700 px-5 py-3 text-center text-xs font-bold uppercase text-white transition hover:bg-yellow-400 hover:text-gray-900">
                       Read More
                   </a>
               </div>
           </div>
       </article>
