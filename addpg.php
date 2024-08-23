<?php
require 'config.php';
// if(!empty($_SESSION["id"])){
//   header("Location: index.php");
// }
if(isset($_POST["submit"])){
 
  $detail = $_POST["detail"];
  $username = $_POST["username"];
  $contact = $_POST["contact"];
  $college = $_POST["college"];
  $address = $_POST["address"];

 
 
      $query = "INSERT INTO pg VALUES('','$detail','$username','$contact','$college','$address')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Mess Registered'); </script>";
       header("Location: pg.php");
    
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <script src="https://cdn.tailwindcss.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

  </script>
</head>
<body>
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 shadow-md ">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <div  class="flex items-center">

      <img src="https://i.ibb.co/w7zZ1jY/Whats-App-Image-2023-02-06-at-5-29-54-PM-1.jpg" class="h-6 mr-3 sm:h-9" alt="Campus Connect Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Campus Connect</span>
  </div>
  <div class="flex items-center md:order-2">
      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="https://static.vecteezy.com/system/resources/thumbnails/005/544/718/small/profile-icon-design-free-vector.jpg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
       
        <ul class="py-2" aria-labelledby="user-menu-button">
       
          
          <li>
            <a href="profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Profile</a>
          </li>
          <li>
            <a href="login.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-16 md:mt-0 md:text-md md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="index.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="pg.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PG's</a>
      </li>
      <li>
        <a href="mess.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Mess</a>
      </li>
      <li>
        <a href="about.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About us</a>
      </li>
  
    </ul>
  </div>
  </div>
</nav>
<div class=" mt-8 grid justify-items-stretch">
  <div class="justify-self-center w-1/3">
  <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4" action="" method="post" autocomplete="off" >
     <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Are you a student or owner ?
      </label>
      <select  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="detail"  name="detail" placeholder="Contact details">
        <option>Student</option>
         <option>Owner</option>
      </select> 
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Enter your name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" placeholder="Full name..." required="">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Enter your contact details
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contact" type="number" name="contact" placeholder="Contact details..." required="">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Select your college
      </label>
      <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="college"  name="college" placeholder="Contact details">
        <option>Government College of Engineering Nagpur</option>
      <option>VNIT Nagpur - Visvesvaraya National Institute of Technology</option>
      <option>Shri Ramdeobaba College of Engineering and Management
</option>
      <option>G.H. Raisoni College of Engineering, Nagpur
</option>
      <option>
Yeshwantrao Chavan College of Engineering, Nagar Yuwak Shikshan Sanstha
</option>
      </select> 
    </div>
     <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Enter Address
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" type="text" placeholder="Address..." name="address" required="">
    </div>
    <div class="">
      <input class="ml-32 bg-blue-500 hover:bg-blue-700 text-white  font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"  type="submit" name="submit">
       
      </input>
      
    </div>

  </form>
 </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>


</body>
</html>