<form method="POST" action="/coffees/{{ $coffee->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="coffee_name" value="{{ $coffee->coffee_name }}">
        <input type="text" name="coffee_place" value="{{ $coffee->coffee_places }}">
        <input type="submit">
</form> 