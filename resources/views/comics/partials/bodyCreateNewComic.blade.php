<main class="create-comic">
    <div class="hero">
        <div class="container">
          <div class="active-series">
            CREATE A NEW COMIC
          </div>
        </div>
    </div>
    <div class="container">
        <div class="more">
            <a href="{{ route('comics.index') }}">
              <button type="button">HOMEPAGE</button>
            </a>
        </div>
        <div class="form">
            <form action="{{route('comics.store')}}" method="post">
                @csrf

                <div class="input">
                    <label for="title">Title:</label>
                    <input type="text" name="title">
                </div>
                <div class="input">
                    <label for="description">Description</label>
                    <textarea name="description"></textarea>
                </div>
                <div class="input">
                    <label for="thumb">Image URL:</label>
                    <input type="text" name="thumb">
                </div>
                <div class="input">
                    <label for="price">U.S. Price:</label>
                    <input type="text" name="price">
                </div>
                <div class="input">
                    <label for="series">Series:</label>
                    <input type="text" name="series">
                </div>
                <div class="input">
                    <label for="sale_date">On Sale Date:</label>
                    <input type="text" name="sale_date">
                </div>
                <div class="input">
                    <label for="type">Type:</label>
                    <input type="text" name="type">
                </div>



                <button type="submit">CREATE</button>
            </form>
        </div>
        {{-- <div class="more">
            <a href="{{ route('comics.index') }}">
              <button type="button">HOMEPAGE</button>
            </a>
        </div> --}}
    </div>
  </main>