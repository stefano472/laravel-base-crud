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
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div class="definition">
                        <h5>{{ $comic['type'] }}</h5>
                        <h2>{{ $comic['title'] }}</h2>
                        <p>Price: {{ $comic['price'] }}</p>
                    </div>
                </a>
            </div>
          @endforeach
      </div>
      <div class="more">
        <button type="button">LOAD MORE</button>
      </div>
    </div>
  </main>