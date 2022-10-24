
<x-layout>

    <h1 class="title hover">Episodes</h1>

    <main class="main-locations">

        @foreach ($episodes as $epi)

            <section class="location-card">
                <h2 class="description">{{$epi["name"]}}</h2>
                <p class="hover">{{$epi["air_date"]}}</p>
            </section>
            
        @endforeach

    </main>


</x-layout>
