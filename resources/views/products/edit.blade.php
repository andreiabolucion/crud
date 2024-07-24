@extends('layout')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Product</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Fill Details</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Edit Product Information</h5>
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="productName" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="productName" name="name" value="{{ $product->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Description:</label>
                            <textarea class="form-control" id="productDescription" name="description" rows="4" required>{{ $product->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="productPrice" name="price" value="{{ $product->price }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">
                    &copy; Your Website 2023
                </div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
