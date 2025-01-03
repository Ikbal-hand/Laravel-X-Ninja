<header>
    <div class="fixed-top bg-body sixe">
        <nav class="navbar">
            <div class="flex justify-between items-center">
                <a class="navbar-brand" href="#">
                    <img src='{{
                        asset("img/STT-CIPASUNG-2-e1688823058980.png")
                    }}' alt="Logo Here" width="250" height="auto" />
                </a>
                <ul class="flex space-x-4">
                    <li
                        class="{{request()->is('/') ? 'bg-green-700 rounded-lg text-white py-2 px-2 font-bold': 'bg-white hover:bg-yellow-200   py-2 px-2 ' }} relative rounded-lg p-2 "
                    >
                        <a href="/">Home</a>
                    </li>
                    <li
                        class="{{request()->is('profile') ? 'bg-green-700 rounded-lg text-white py-2 px-2 ': 'bg-white  hover:bg-yellow-200  py-2 px-2 ' }} relative rounded-lg p-2 "
                    >
                        <a href="/profile">Profile</a>
                    </li>
                    <li
                        class="{{request()->is('kehidupan-kampus') ? 'bg-green-700 rounded-lg text-white py-2 px-2 ': 'bg-white    py-2 px-2 ' }} hover:bg-yellow-200 relative rounded-lg p-2 "
                    >
                        <a href="/kehidupan-kampus">Kehidupan Kampus</a>
                    </li>
                    <li
                        class="{{request()->is('layanan') ? 'bg-green-700 rounded-lg text-white py-2 px-2 ': 'bg-white    py-2 px-2 ' }} hover:bg-yellow-200 relative rounded-lg p-2 "
                    >
                        <a href="/layanan">Layanan</a>
                    </li>
                    <li
                        class="{{request()->is('tautan') ? 'bg-green-700 rounded-lg text-white py-2 px-2 ': 'bg-white    py-2 px-2 ' }} hover:bg-yellow-200 relative rounded-lg p-2 "
                    >
                        <a href="/tautan">Tautan</a>
                    </li>
                    <li
                        class="{{request()->is('pmbonline') ? 'bg-green-700 rounded-lg text-white py-2 px-2 ': 'bg-white    py-2 px-2 ' }} hover:bg-yellow-200 relative rounded-lg p-2 "
                    >
                        <a href="/pmbonline">PMB Online</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
