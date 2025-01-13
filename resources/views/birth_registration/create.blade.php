<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Birth Registration</h2>
        <form action="{{ route('birth_registration.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">Child's First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Child's Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="mb-3">
                <label for="place_of_birth" class="form-label">Place of Birth:</label>
                <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" required>
            </div>
            <div class="mb-3">
                <label for="parent_first_name" class="form-label">Parent's First Name:</label>
                <input type="text" class="form-control" id="parent_first_name" name="parent_first_name" required>
            </div>
            <div class="mb-3">
                <label for="parent_last_name" class="form-label">Parent's Last Name:</label>
                <input type="text" class="form-control" id="parent_last_name" name="parent_last_name" required>
            </div>
            <div class="mb-3">
                <label for="contact_email" class="form-label">Contact Email:</label>
                <input type="email" class="form-control" id="contact_email" name="contact_email" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
