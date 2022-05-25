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
          @foreach ($comics as $index => $card)
            <div class="card">
                <a href="/card/{{$index}}">
                    <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                    <div class="definition">
                        <h5>{{ $card['type'] }}</h5>
                        <h2>{{ $card['title'] }}</h2>
                        <p>Price: {{ $card['price'] }}</p>
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