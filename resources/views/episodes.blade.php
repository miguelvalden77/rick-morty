
<x-layout>

    <h1>Episodes</h1>

    <main class="main-episodes">

        @foreach ($episodes as $epi)

            <section>
                <a href="/episode/{{$epi["id"]}}"><h2>{{$epi["name"]}}</h2></a>
                <p>{{$epi["air_date"]}}</p>
            </section>
            
        @endforeach

    </main>


</x-layout>
