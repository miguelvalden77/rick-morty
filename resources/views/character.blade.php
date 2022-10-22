<x-layout>

    <main class="char-main">

        <article class="card-main">

            <h1 class="name-main">{{ $character["name"] }}</h1>

            <div class="img-char">
                <img src="{{$character["image"]}}" alt="foto">
            </div>

        </article>

        <article class="info-main">

            <p>Status: {{$character["status"]}}</p>
            <p>Specie: {{$character["species"]}}</p>
            <p>Gender: {{$character["gender"]}}</p>
            <p>Location: {{$character["location"]["name"]}}</p>
            <p>Origin: {{$character["origin"]["name"]}}</p>
            
            <h4>Episodes</h4>
            <section class="episodes">
                @foreach ($character["episode"] as $episode)
                    <a href="#">{{$episode}}</a>
                @endforeach
            </section>

        </article>

    </main>

</x-layout>