<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Travel Booking</title>
</head>
<body>

    <div class="booking">
       <h1 style="font-size:60px; margin-left: 35%;" >Book Your Trip</h1><br>
       <center>
 <h3><p style="color: red"><em>After filling this form we will contact you!Stay tunned...</em></p></h3></center>

        <form action="book_form.php" method ="POST" class="book-form">

            <div class="flex">
               <div class="inputBox">
                  <span>name :</span>
                  <input type="text" placeholder="enter your name" name="name">
               </div>
               <div class="inputBox">
                  <span>email :</span>
                  <input type="email" placeholder="enter your email" name="email">
               </div>
               <div class="inputBox">
                  <span>phone :</span>
                  <input type="number" placeholder="enter your number" name="phone">
               </div>
               <div class="inputBox">
                  <span>address :</span>
                  <input type="text" placeholder="enter your address" name="address">
               </div>
               <div class="inputBox">
                  <span>where to :</span>
                  <input type="text" placeholder="place you want to visit" name="location">
               </div>
               <div class="inputBox">
                  <span>how many :</span>
                  <input type="number" placeholder="number of guests" name="guests">
               </div>
               <div class="inputBox">
                  <span>arrivals :</span>
                  <input type="date" name="arrivals">
               </div>
               <div class="inputBox">
                  <span>leaving :</span>
                  <input type="date" name="leaving">
               </div>
            </div>
      <center>
            <input type="submit" value="submit" class="btn" name="send">
         </center>
         </form>
</body>
</html>