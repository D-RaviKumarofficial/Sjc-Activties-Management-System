<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    .footer {
      width: 100%;
      background-color: #022352;
      color: white;
      text-align: center;
      padding: 20px 0;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start; /* Adjust alignment as per your design */
      flex-wrap: wrap;
    }

    .footer-section {
      flex-basis: calc(50% - 20px); /* Adjust width with margin */
      text-align: left;
      padding: 20px;
      border: 2px solid #ffc107; /* Border color for each section */
      border-radius: 10px;
      margin-bottom: 20px; /* Add space between sections */
      box-sizing: border-box; /* Ensure padding is included in width calculation */
    }

    .footer-section h4 {
      color: #ffc107;
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .footer-section p {
      margin-bottom: 5px;
    }

    .footer-icons {
      margin-top: 10px;
    }

    .footer-icons a {
      color: white;
      margin: 0 10px;
    }
  </style>
</head>
<body>
  <!-- Your content here -->
  
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <!-- Developer Info -->
        <div class="footer-section">
          <h4>Developer</h4>
          <p><b>Name:</b> Ravi Kumar D</p>
          <p><b>Email:</b> ravikumar.offical2003@gmail.com</p>
          <p><b>Phone:</b> +91 ******9461</p>
          <p><b>Dept:</b> COMPUTER APPLICATIONS</p>
          <p><b>Batch:</b> 2023-25  </p>
        </div>
        
        <!-- Freelancing Info -->
        <div class="footer-section">
          <h4>Freelancing</h4>
          <p>Offering services in:</p>
          <ul>
            <li>PHP</li>
            <li>Laravel</li>
            <li>Flutter</li>
          </ul>
          <p>Available for freelance projects and collaborations</p>
        </div>
      </div>

      <!-- Copyright -->
      <div class="text-center mt-4">
        <div class="footer-icons">
          <a href="https://www.instagram.com/idoit__fellow?igsh=MWI5eWwyY2JiZ3V0aA==" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
        <p>&copy; 2024 All rights reserved by St. Joseph's College</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap and Font Awesome scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
