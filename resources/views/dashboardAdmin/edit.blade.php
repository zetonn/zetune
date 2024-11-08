<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="{{route('user.update.data',['id' => $data->id])}}" method="post">
        @csrf
        @method('PUT') 
        <ul>
            <li>
                <label for="">image</label>
                <input type="file" name="image" value="{{$data->image}}">
                @error('image')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">artist</label>
                <input type="text" name="artist" value="{{$data->artist}}">
                @error('artist')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">genre</label>
                <input type="text" name="genre" value="{{$data->genre}}">
                @error('genre')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">name_music</label>
                <input type="text" name="name_music" value="{{$data->music_name}}">
                @error('music_name')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">file_music</label>
                <input type="text" name="file_music" value="{{$data->music_file}}">
                @error('music_file')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <li>
                <label for="">tgl_rilis</label>
                <input type="date" name="tgl_rilis" value="{{$data->tgl_rilis}}">
                @error('tgl_rilis')
                    <small>{{$message}}</small>
                @enderror
            </li>
            <button type="submit">submit</button>
        </ul>
    </form>
</body>
</html>