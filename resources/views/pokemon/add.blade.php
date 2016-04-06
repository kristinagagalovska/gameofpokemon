<form action="" method="post" enctype="multipart/form-data">

    </br><input name="name" type="text" placeholder="Pokemon Name">
    </br><input name="strength" type="text" placeholder="Pokemon Strength">
    </br><input name="image" type="file" id="file">
    </br><input type="hidden" value="{{ csrf_token() }}" name="_token">
    </br><input type="submit" name="save">

</form>