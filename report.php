<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canteen Food Complaint</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      max-width: 400px;
      width: 100%;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }

    .error-message {
      color: #ff0000;
      margin-bottom: 16px;
    }
  </style>
</head>
<body>

  <form action="report1.php" method="POST">
    
        
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="complaint"> Complaint:</label>
    <textarea id="complaint" name="complaint" rows="4" required></textarea>

    <p class="error-message" id="error-message"></p>

    <button type="submit">Submit Complaint</button>
  </form>

  <script>
    function validateForm() {
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var complaint = document.getElementById('complaint').value;
      var errorMessage = document.getElementById('error-message');

      errorMessage.innerHTML = '';

      if (name.trim() === '' || email.trim() === '' || complaint.trim() === '') {
        errorMessage.innerHTML = 'All fields are required';
        return;
      }

      // Additional validation logic can be added here

      // If all validations pass, you can submit the form data
      alert('Complaint submitted successfully!');
    }
  </script>

</body>
</html>
