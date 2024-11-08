<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Data</h1>
    <form action="{{route('user.store.data')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <ul>
            <li>
                <label for="">image</label>
                <input type="file" name="image">
                @error('image')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">artist</label>
                <input type="text" name="artist">
                @error('artist')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">genre</label>
                <input type="text" name="genre">
                @error('genre')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">name_music</label>
                <input type="text" name="name_music">
                @error('music_name')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">file_music</label>
                <input type="text" name="file_music">
                @error('music_file')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">tgl_rilis</label>
                <input type="date" name="tgl_rilis">
                @error('tgl_rilis')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <button type="submit">submit</button>
        </ul>
    </form>
</body>
</html>