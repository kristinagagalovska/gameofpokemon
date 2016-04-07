<p>Select pokemon:</p>
<form action="" method="post">
    <select name="select">
        <option selected disabled name>Select</option>
        @foreach($pokemons as $pokemon)
            <option value="{{$pokemon->id}}">{{$pokemon->name}}</option>
        @endforeach
    </select>
    </br><input type="submit" name="save">
</form>

