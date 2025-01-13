<?php
// Footer Component
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Footer</title>
</head>
<body>
    <footer class="bg-dark text-white pt-4">
        <div class="container">
            <div class="row">
                <!-- Social Media Links -->
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://facebook.com" target="_blank" class="text-decoration-none text-light">
                                <i class="bi bi-facebook"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com" target="_blank" class="text-decoration-none text-light">
                                <i class="bi bi-twitter"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank" class="text-decoration-none text-light">
                                <i class="bi bi-instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://linkedin.com" target="_blank" class="text-decoration-none text-light">
                                <i class="bi bi-linkedin"></i> LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Address Section -->
                <div class="col-md-4">
                    <h5>Address</h5>
                    <p>
                        Birth Registration Office<br>
                        Chabahil,Kathmandu<br>
                        Phone: (123) 456-7890<br>
                        Email: info@birthregistration.com
                    </p>
                </div>

                
                
            </div>
            <div class="text-center mt-4">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> Birth Registration Platform. All Rights Reserved.</p>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </footer>
</body>
</html>
