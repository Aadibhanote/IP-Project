<?php
include("connection.php");



if (isset($_POST['book'])) {
    $fname = isset($_POST['fname'])? $_POST['fname'] : '';
    $email = isset($_POST['email'])? $_POST['email'] : '';
    $phone = isset($_POST['phone'])? $_POST['phone'] : '';
    $city = isset($_POST['city'])? $_POST['city'] : '';
    $state = isset($_POST['state'])? $_POST['state'] : '';

    if ($fname!= "" && $email!= "" && $phone!= "" && $city!= "Select" && $state!= "Select") {
        $query = "INSERT INTO form VALUES('$fname','$email','$phone','$city','$state')";
        $data = mysqli_query($conn,$query);
        if ($data){
            echo "Data Inserted in database";
        }else{
            echo " Error";
        }

    }
    else{
        $requireError= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>fill all the details</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
   
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #fff;
    background: radial-gradient(circle, #07cddb, #f9f8f7);
    max-width: 400px;
    margin: 40px auto;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(3, 56, 140, 0.1);
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="date"],
input[type="time"],
select {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #5cb5b8;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #5cb5b8;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  transition: all 0.3s ease;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-dismissible {
  padding-right: 3.5rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
  transition: all 0.3s ease;
  opacity: 0.5;
}

.alert-dismissible .close:hover {
  opacity: 1;
}

.alert:hover {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}


        
    </style>
</head>
<body>
    <div class="container">
        <h2>SIGN UP </h2>
          <?php  if(isset($requireError)) echo $requireError; ?>
        <form action="#" method="POST" required>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fname" name="fname" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" name="email" required>


            <label for="phone no.">Phone no. :</label>
            <input type="text" id="phone" name="phone" name="phone" required>


            <label for="city">City:</label>
            <select id="city" name="city" required>
                <option>Select</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Delhi">Delhi</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Bangalore">Bangalore</option>
                <option>Chandigarh</option>
                <option>Mohali</option>
                <option>Panchkula</option>
                <option>Zirakpur</option>
                <option>Baddi</option>
                <option>Lucknow</option>
                <option>Amritsar</option>
                <option>Jalandhar</option>
                <option>Kolkata</option>
                   <option>Darjeeling</option>
                   <option> Siliguri</option>
                   <option>Shimla</option>
                   <option>Dharamshala</option>
                   <option>Pinjore</option>
                   <option>Kalka</option>
                   <option>Port Blair</option>
                   <option>Mussorie</option>
                   <option>Kangra</option>
                   <option>Warangal</option>
                   <option>Ahemdabad</option>
                   <option>Surat</option>
                   <option>Pondicherry</option>
                   <option>Patna</option>
                   <option>Itanagar</option>
                   <option>Guhawati</option>
                   <option>Dehradun</option>
                   <option>Raipur</option>
                   <option>Bilaspur</option>
                   <option>Ranchi</option>
                   <option>Dhanbad</option>
                   <option>Meerut</option>
                   <option>Jamshedpur</option>
                   <option>Gorakhpur</option>
                   <option>Firozpur</option>
                   <option>Rishikesh</option>
                   <option>Haridwar</option>
                   <option>Vrindavan</option>
                   <option>Mathura</option>
                   <option>Ayodhaya</option>
                   <option>Gurgaon</option>
                   <option>Roorkee</option>
                   <option>Bhopal</option>
                   <option>Jaipur</option>
                   <option>Trichy</option>
                   <option>Shillong</option>
                   <option>Rourkela</option>
                   <option>Ludhiana</option>
                   <option>Chennai</option>
                   <option>Jodhpur</option>
                   <option>Kanpur</option>
                   <option>Varanasi</option>
                   <option>Udaipur</option>
                   <option>Kharagpur</option>
                   <option>Thane-West</option>
                   <option>Andheri</option>
           </select>

            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option>Select</option>
                
                <option>Ladakh</option>
            
           <option>Jammu & Kashmir</option>
           <option>Puducherry</option>
           <option>Lakshadweep</option>
           <option>Delhi</option>
           <option>Chandigarh</option>
           <option>Dadra and Nagar Haveli and Daman & Diu</option>
           <option> Andaman and Nicobar Islands</option>
           <option>Goa</option>
           <option>Uttar Pradesh</option>
           <option>Maharashtra</option>
           <option>Himachal Pradesh</option>
           <option>Madhya Pradesh</option>
           <option>Rajasthan</option>
           <option>Gujarat</option>
           <option>Punjab</option>
           <option>Haryana</option>
           <option>Tamil Nadu</option>
           <option>Telengana</option> 
           <option>Assam</option>
           <option>Andra Pradesh</option>
           <option>Uttarakhand</option>
           <option>Kerala</option>
           <option>Karnatka</option>
           <option>West Bengal</option>
           <option>Odisha</option>
           <option>Manipur</option>
           <option>Meghalaya</option>
           <option>Nagaland</option>
           <option>Jharkhand </option>
           <option>Mizoram</option>
           <option>Tripura</option>
           <option>Sikkim</option>
           <option>Bihar</option>

            </select>
            <input type="submit" value="Sign up" class="btn" name="book">
        </form>
    </div>

</body>
</html>

