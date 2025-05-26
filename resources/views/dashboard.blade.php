<x-app-layout>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div id="formCarousel" class="carousel slide w-100" data-bs-ride="false">
            <div class="carousel-inner">

                <!-- Slide 1: Winner Upload Form -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
                        <div class="col-md-6">
                            <form action="{{ url('upload_winner') }}" enctype="multipart/form-data" method="POST" class="p-4 border rounded shadow bg-light">
                                @csrf
                                <fieldset class="text-center fw-bold fs-4">Add Winner Description</fieldset>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Winner's Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Enter description">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Creative Simple Submit Form -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 70vh;">
                        <div class="col-md-6">
                            <form action="{{ url('view_winner') }}" method="GET" class="p-4 border rounded shadow bg-white">
                                @csrf
                                <fieldset class="text-center fw-bold fs-4 mb-4">View Winner</fieldset>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-success w-100">View My winner</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#formCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#formCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</x-app-layout>
