<x-app-layout>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (for interactive components like modals, dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            {{-- <form action="{{'url(upload_winner)'}}" enctype="multipart/form-data" > --}}
               <form action="{{ url('upload_winner') }}" enctype="multipart/form-data" method="POST" class="p-4 border rounded shadow bg-gray-100">
                {{-- <form action="{{'url(upload_winner)'}}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow"> --}}
                @csrf
                <fieldset class="text-center fw-bold fs-4">Add Winner Descriptions</fieldset>
                <div class="mb-3">
                    <label for="description" class="form-label">Add Winner's Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter description">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Add Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                Post uploaded successfully!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

</x-app-layout>