<x-app-layout>
<div>
    <form action="{{url('confirm_update', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Post</label>
            <input type="text" name="description" value="{{$data->description}}">
            <br>

            <label for="image">Curent Image</label>
            <img src="/post/{{$data->image}}" height="300px" width="250" alt="">

            <br>
            <label for="Image">Change Image</label>
            <input type="file" name="image" value="{{$data}}">

            <br>
            <div>
                <input type="submit" value="updatePost">
            </div>
        </div>
    </form>
</div>
</x-app-layout>