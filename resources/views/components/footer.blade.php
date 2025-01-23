<?php
// Footer Component
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Footer</title>
</head>
<body>
    <footer class="bg-dark text-white py-3">
        <div class="container">
            <div class="row align-items-center">
                <!-- Social Media Links -->
                <div class="col-md-6 mb-3 mb-md-0">
                    <h6 class="text-uppercase mb-2">Follow Us</h6>
                    <ul class="list-unstyled d-flex gap-3 mb-0">
                        <li>
                            <a href="https://facebook.com" target="_blank" class="text-decoration-none text-light d-flex align-items-center small">
                                <i class="bi bi-facebook me-2"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com" target="_blank" class="text-decoration-none text-light d-flex align-items-center small">
                                <i class="bi bi-twitter me-2"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank" class="text-decoration-none text-light d-flex align-items-center small">
                                <i class="bi bi-instagram me-2"></i> Instagram
                            </a>
                        </li>
                        <li>
                             <a href="https://tiktok.com" target="_blank" class="text-decoration-none text-light d-flex align-items-center small">
                                <i class="bi bi-tiktok me-2"></i> TikTok
                             </a>
                        </li>
                    </ul>
                </div>

                <!-- Address Section -->
                <div class="col-md-6 text-md-end">
                    <h6 class="text-uppercase mb-2">Address</h6>
                    <p class="small mb-0">
                        Birth Registration Office<br>
                        Chabahil, Kathmandu<br>
                        Phone: (123) 456-7890<br>
                        Email: info@birthregistration.com
                    </p>
                </div>
            </div>

            <div class="text-center mt-3 small">
                &copy; <?php echo date('Y'); ?> Birth Registration Platform. All Rights Reserved.
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </footer>
</body>
</html>
