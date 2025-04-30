<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Check if the request method is POST

        $formData = [
            'firstname' => trim($_POST['firstname'] ?? ''),
            'lastname' => trim($_POST['lastname'] ?? ''),
            'id' => trim($_POST['id'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'password' => trim($_POST['password'] ?? ''),
            'address' => trim($_POST['address'] ?? ''),
            'username' => trim($_POST['username'] ?? ''),
            'dob' => trim($_POST['dob'] ?? ''),
            'profilePicture' => trim($_POST['profilePicture'] ?? ''),
            'gender' => trim($_POST['gender'] ?? ''),
            'profession' => trim($_POST['profession'] ?? ''),
            'skills' => trim($_POST['skills'] ?? '')
        ];

        $errors = [];

        // Validate required fields
        foreach ($formData as $key => $value) {
            if (empty($value)) {
                $errors[] = ucfirst($key) . " cannot be empty!";
            }
        }

        // Additional validations
        if (!empty($formData['firstname']) && strlen($formData['firstname']) < 5) {
            $errors[] = "Firstname must be at least 5 characters long.";
        }

        if (!empty($formData['lastname']) && strlen($formData['lastname']) < 5) {
            $errors[] = "Lastname must be at least 5 characters long.";
        }

        if (!empty($formData['password']) && strlen($formData['password']) < 8) {
            $errors[] = "Password must be at least 8 characters long.";
        }

        if (!empty($formData['email']) && !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        // Output errors or success message
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            echo "Form submitted successfully!";
        }
    } else {
        echo "Invalid request! Please submit the form!";
    }
?>