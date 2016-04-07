<table>
    @foreach($pokemons as $pokemon)
        <tr>
            <td><p>{{$pokemon->name}}</p></td>
            <td><p><a href="{{route('user.mydelete', $pokemon->id)}}">Abandon Pokemon</a></p></td>
        </tr>
    @endforeach
</table>