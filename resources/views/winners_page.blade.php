<x-app-layout>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container py-5">
        <h2 class="text-center mb-4 fw-bold">Winners Table</h2>

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($post as $post) --}}
                     @foreach($post as $index => $post)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>

                        <!-- Image -->
                        <td>
                            <img src="post/{{$post->image}}" alt="Winner Image" width="80" height="80" class="rounded-circle object-fit-cover">
                        </td>

                        <!-- Description -->
                        <td>{{ $post->description }}</td>

                        <!-- Actions --> 
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                {{-- <a href="" class="btn btn-info btn-sm">View</a> --}}
                                <a href="{{url('update_post',$post->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{url('delete_post',$post->id)}}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    {{-- @if($posts->isEmpty())
                    <tr>
                        <td colspan="4" class="text-muted">No records found.</td>
                    </tr>
                    @endif --}}
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
