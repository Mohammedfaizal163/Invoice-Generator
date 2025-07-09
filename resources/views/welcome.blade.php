<!DOCTYPE html>
<html>

<head>
    <title>Invoice Generator</title>
    <!-- Bootstrap 5 CDN -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h4 class="mb-0">🧾 Client Invoice Form</h4>
                </div>
                <div class="card-body bg-light">

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('client.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col">
                                <label for="client_name" class="form-label">Client Name</label>
                                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="John Doe" required>
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="item" class="form-label">Item</label>
                            <input type="text" class="form-control" id="item" name="item" placeholder="Product Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Add more details about the item..."></textarea>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="quantity" class="form-label">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>
                            <div class="col-md-4">
                                <label for="price" class="form-label">Price per Item</label>
                                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="col-md-4">
                                <label for="tax" class="form-label">Tax %</label>
                                <input type="number" step="0.01" class="form-control" id="tax" name="tax" required>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg rounded-3">
                                <i class="bi bi-send-fill me-1"></i> Submit Invoice
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>