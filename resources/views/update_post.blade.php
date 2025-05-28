<x-app-layout>
    <!-- Optional Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white fw-semibold">
                        Update Post
                    </div>
                    <div class="card-body">
                        <form action="{{ url('confirm_update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="description" class="form-label">Post Description</label>
                                <input type="text" class="form-control" name="description" value="{{ $data->description }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Image</label><br>
                                <img src="{{ asset('post/' . $data->image) }}" alt="Current Post Image" class="rounded border mb-2" width="100%" height="auto">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Change Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Update Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
