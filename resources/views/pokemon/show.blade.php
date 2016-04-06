<table>
    @foreach($pokemons as $pokemon)
        <tr>
            <td><p>{{$pokemon->name}}</p></td>

            <td><p><a href="{{route('pokemon.edit', $pokemon->id)}}">Edit Pokemon</a></p></td>
            <td><p><a href="{{route('pokemon.delete', $pokemon->id)}}">Delete Pokemon</a></p></td>
        </tr>
    @endforeach
        <tr>
            <td><p><a href="{{route('pokemon.add')}}">Create New Pokemon</a></p></td>
        </tr>
</table>