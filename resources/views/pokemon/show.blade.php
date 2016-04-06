<table>
    @foreach($pokemons as $pokemon)
        <tr>
            <td><p>{{$pokemon->name}}</p></td>
            <td><p><a href="{{route('pokemon.edit', $pokemon->id)}}">Edit Pokemon</a></p></td>
        </tr>
    @endforeach
</table>