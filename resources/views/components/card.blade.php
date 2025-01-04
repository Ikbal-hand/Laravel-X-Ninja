 <div id="major" class="my-12 flex flex-row gap-4 justify-center mx-6" >
        <div>
            @foreach ($majors as $major)
            <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg my-6 ">
                <div class="m-2.5 overflow-hidden rounded-md h-80 flex  justify-center items-center">
                    <img class="w-full h-full object-cover" src = "{{$major['image']}}" alt="profile-picture" />
                </div>
                <div class="p-6 text-center">
                    <h4 class="mb-1 text-xl font-semibold text-slate-800">
                        {{$major['title']}}
                    </h4>
                <p class="text-base text-slate-600 mt-4 font-light  max-[50]">
                    @php
                        $major['description'] = substr($major['description'], 0, 200);
                    @endphp
                    {{$major['description']}} ...
                </p>
            </div>
            <div class="flex justify-center p-6 pt-2 gap-7">
                <button class="static -w-32  rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    Follow
                </button>
            </div>
        </div>

        </div>
            @endforeach
        </div>
    </div>
