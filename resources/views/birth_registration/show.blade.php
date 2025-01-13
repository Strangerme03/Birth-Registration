<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Registration Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Birth Registration Details</h2>
        <table class="table table-bordered">
            <tr>
                <th>Child's First Name</th>
                <td>{{ $birthRegistration->first_name }}</td>
            </tr>
            <tr>
                <th>Child's Last Name</th>
                <td>{{ $birthRegistration->last_name }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $birthRegistration->dob }}</td>
            </tr>
            <tr>
                <th>Place of Birth</th>
                <td>{{ $birthRegistration->place_of_birth }}</td>
            </tr>
            <tr>
                <th>Parent's First Name</th>
                <td>{{ $birthRegistration->parent_first_name }}</td>
            </tr>
            <tr>
                <th>Parent's Last Name</th>
                <td>{{ $birthRegistration->parent_last_name }}</td>
            </tr>
            <tr>
                <th>Contact Email</th>
                <td>{{ $birthRegistration->contact_email }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $birthRegistration->address }}</td>
            </tr>
            <tr>
                <th>Registration Token</th>
                <td>{{ $birthRegistration->token }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
