<main class="card-focus">
    <div class="hero"></div>
    <div class="blue-banner">
        <div class="container">
          <div class="active-series">
            <a href="/">
              {{-- @if (asset("{{$comic->thumb}}")) --}}
              <img src="{{ $comic->thumb }}" alt="card">
              {{-- @else
                <img src="{{ asset('img/img_not_found.png') }}" alt="card">
              @endif --}}
              <div class="view-gallery">View Gallery</div>
            </a>
          </div>
        </div>
    </div>
    <div class="container">
      <div class="description">
        <h2>{{ strtoupper($comic->title) }}</h2>
        <div class="green-banner">
          <div class="status">
            <p>
              <span>U.S. Price: </span>
              {{ $comic->price }}
            </p>
            <div>AVAILABLE</div>
          </div>
          <div class="check-status">Check Availability &#9662;</div>
        </div>
        <p class="text-description">{{ $comic->description }}</p>
      </div>
      <div class="advertisement">
        <h5>ADVERTISEMENT</h5>
        <img src="/img/advertise.png" alt="advertisement">
      </div>
    </div>
    <div class="more-infos">
      <div class="container">
        {{-- <div class="talent">
          <h3>Talent</h3>
          <div class="info">
            <h5>Art by:</h5>
            <p>
              @foreach ($card['artists'] as $artist)
                <a href="#">
                  {{ $artist }} 
                </a>
              @endforeach
          </div>
          <div class="info">
            <h5>Written by:</h5>
            <p>
              @foreach ($card['writers'] as $writer)
                <a href="#">
                  {{ $writer }} 
                </a>
              @endforeach
            </p>
          </div>
        </div> --}}
        <div class="specs">
          <h3>Specs</h3>
          <div class="info">
            <h5>Series:</h5>
            <p>
              <a href="#">
                {{ strtoupper($comic->series) }}
              </a>
            </p>
          </div>
          <div class="info">
            <h5>U.S. Price:</h5>
            <p>{{ $comic->price }}</p>
          </div>
          <div class="info">
            <h5>On Sale Date:</h5>
            <p>{{ $comic->sale_date }}</p>
          </div>
        </div>
      </div>
    </div>
  </main>