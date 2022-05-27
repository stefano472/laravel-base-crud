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
        <div class="edit">
          <a href="{{ route('comics.index') }}">
            <button type="button">HOMEPAGE</button>
          </a>
          <a href="{{ route('comics.edit', $comic->id) }}">
            <button type="button">EDIT COMIC</button>
          </a>

          <button id='open-modal' class="delete-btn" type="button">DELETE</button>

          <div id="modal-container">
            <div class="modal">
              <h2>Are you 100% sure????</h2>
              <p>Pay Attention!!!! once you delete this comic you can't come back...</p>
              <form class="delete" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
    
                @method('DELETE')
    
                <button class="delete-btn" type="submit">YES</button>
                <button id='close-modal' type="button">NO</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script defer src="/js/app.js"></script>