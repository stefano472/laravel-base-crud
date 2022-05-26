<main class="homepage">
    <div class="hero">
        <div class="container">
          <div class="active-series">
            CURRENT SERIES
          </div>
        </div>
    </div>
    <div class="container">
      <div class="contents">
          @foreach ($comics as $index => $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">
                  {{-- @if (getimagesize({{$comic->thumb}})) --}}
                    <img src="{{ $comic->thumb }}" alt="card">
                  {{-- @else
                    <img src="{{ asset('img/img_not_found.png') }}" alt="card">
                  @endif --}}
                  <div class="definition">
                      <h5>{{ $comic->type }}</h5>
                      <h2>{{ $comic->title }}</h2>
                      <p>Price: {{ $comic->price }}</p>
                  </div>
                </a>
            </div>
          @endforeach
      </div>
      <div class="more">
        <a href="{{ route('comics.create') }}">
          <button type="button">ADD A NEW COMIC</button>
        </a>
      </div>
    </div>
  </main>