<x-layout>

    <main class="char-main">

        <h1 class="hover title">{{ $character["name"] }}</h1>

        <article class="card-main">

            <div class="img-char">
                <img src="{{$character["image"]}}" alt="foto">
            </div>

            <section class="info-main">
                <p class="p-2">{{$character["status"]}}, {{$character["species"]}}</p>
                <p class="p-2">{{$character["gender"]}}</p>
                <span class="type">Location</span>
                <p class="p-2">{{$character["location"]["name"]}}</p>
                <span class="type">Origin</span>
                <p class="p-2">{{$character["origin"]["name"]}}</p>
            </section>

            
        </article>
        
        <section class="button-char">
            @if ($character["id"] > 1)    
                <a href="/character/{{$character["id"] - 1}}"><button>Previous character</button></a>
            @endif
            @if ($character["id"] < 826)
                <a href="/character/{{$character["id"] + 1}}"><button>Next character</button></a>
            @endif
        </section>

    </main>

</x-layout>