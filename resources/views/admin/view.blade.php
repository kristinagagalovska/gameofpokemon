<table>
    @foreach($users as $user)
        <tr>

            <td><p>{{$user->name}}</p></td>
            <td><p><a href="{{route('admin.mark', $user->id)}}">Mark</a></p></td>
            <td><p><a href="{{route('admin.destroy', $user->id)}}">destroy User</a></p></td>

        </tr>
    @endforeach
</table>