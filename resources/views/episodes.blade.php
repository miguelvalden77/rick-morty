
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
    
    <section class="button-container">
        @if ($page["prev"])
            <a href="/episodes/{{$num - 2}}"><button class="button hover">Previous {{$num - 2}}</button></a>
        @endif
            <button class="button hover">{{$num - 1}}</button>
        @if ($page["next"])
            <a href="/episodes/{{$num}}"><button class="button hover">Next {{$num}}</button></a>
        @endif
    </section>

</x-layout>
