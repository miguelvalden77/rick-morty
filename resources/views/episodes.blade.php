
<x-layout>

    <h1 class="title hover">Episodes</h1>

    <main class="main-locations">

        @foreach ($episodes as $epi)

            <section class="location-card">
                <h2 class="description">{{$epi["name"]}}</h2>
                <p class="hover">{{$epi["air_date"]}}</p>
            </section>
            
        @endforeach

        <section class="button-container">
            @if ($page["prev"])
                <a href="/locations/{{$num - 2}}"><button class="button hover">Previous page</button></a>
            @endif
                <button class="button hover">Current page {{$num - 1}}</button>
            @if ($page["next"])
                <a href="/locations/{{$num}}"><button class="button hover">Next page {{$num}}</button></a>
            @endif
        </section>

    </main>


</x-layout>
