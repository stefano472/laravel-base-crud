<main class="create-comic">
    <div class="hero">
        <div class="container">
          <div class="active-series">
            UPDATE COMIC
          </div>
        </div>
    </div>
    <div class="container">
        <div class="more">
            <a href="{{ route('comics.show', $comic->id ) }}">
                <button type="button">ANNULLA</button>
                <a href="{{ route('comics.index') }}">
            </a>
                <button type="button">HOMEPAGE</button>
            </a>
        </div>
        <div class="form">
            <form class="edit" action="{{route('comics.update', $comic->id)}}" method="POST">
                @csrf

                @method('PUT')

                <div class="input">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ $comic->title }}">
                </div>
                <div class="input">
                    <label for="description">Description</label>
                    <textarea name="description">{{ $comic->description }}</textarea>
                </div>
                <div class="input">
                    <label for="thumb">Image URL:</label>
                    <input type="text" name="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="input">
                    <label for="price">U.S. Price:</label>
                    <input type="text" name="price" value="{{ $comic->price }}">
                </div>
                <div class="input">
                    <label for="series">Series:</label>
                    <input type="text" name="series" value="{{ $comic->series }}">
                </div>
                <div class="input">
                    <label for="sale_date">On Sale Date:</label>
                    <input type="date" name="sale_date" value="{{ $comic->sale_date }}">
                </div>
                <div class="input">
                    <label for="type">Type:</label>
                    <input type="text" name="type" value="{{ $comic->type }}">
                </div>

                <button type="submit">UPDATE</button>
            </form>
        </div>

    </div>
  </main>