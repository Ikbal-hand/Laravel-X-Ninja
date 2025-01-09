<nav class="sticky top-0 z-50 bg-white linear-gradient py-2 ">
    <div class="">
        <nav class="navbar mx-9">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a class="navbar-brand" href="#">
                        <img src='{{
                        asset("img/STT-CIPASUNG-2-e1688823058980.png")
                        }}' alt="Logo Here" width="50" height="auto" />
                </a>
                <h1  class="font-extrabold text-[#03824f] text-[25px]">STT CIPASUNG</h1>
            </div>
        <div class="flex items-center space-x-4">
            <x-nav-link href="/" class="{{request()->is('/')? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative'}}  rounded-lg"> Beranda </x-nav-link>
            <x-nav-link href="/profile" class="{{request()->is('profile') ?'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative'}} rounded-lg"> Profile </x-nav-link>
            <x-nav-link href="/kehidupan-kampus" class="{{request()->is('kehidupan-kampus')? 'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative'}}  rounded-lg"> Kehidupan Kampus </x-nav-link>
            <x-nav-link href="/layanan" class="{{request()->is('layanan') ?'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative'}}  rounded-lg"> Layanan </x-nav-link>
            <x-nav-link href="/tautan" class="{{request()->is('tautan') ?'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative'}}  rounded-lg"> Tautan </x-nav-link>
            <x-nav-link href="/pmbonline" class="{{request()->is('pmbonline') ?'bg-green-700 text-white py-2 px-2' : 'bg-white py-2 px-2 hover:bg-yellow-200 relative'}}  rounded-lg"> PMB Online </x-nav-link>
        </div>
        </nav>
    </div>
</nav>


