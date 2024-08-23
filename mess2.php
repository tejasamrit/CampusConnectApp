<!-- <?php
require 'config.php';
if(isset($_POST["submit"])){
    $college = $_POST["college"];

  $result = mysqli_query($conn, "SELECT * FROM mess WHERE college = $college");
  $row = mysqli_fetch_assoc($result);
}
?> -->
<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <script src="https://cdn.tailwindcss.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />

  </script>
</head>
<body>
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900 shadow-md">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <div  class="flex items-center">

      <img src="https://i.ibb.co/w7zZ1jY/Whats-App-Image-2023-02-06-at-5-29-54-PM-1.jpg" class="h-6 mr-3 sm:h-9" alt="Campus Connect Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Campus Connect</span>
  </div>
  <div class="flex items-center md:order-2">
      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 " id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
       
        <ul class="py-2" aria-labelledby="user-menu-button">
       
          
          <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My Profile</a>
          </li>
          <li>
            <a href="login.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
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
        <a href="index.html" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="pg.html" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PG's</a>
      </li>
      <li>
        <a href="mess.html" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Mess</a>
      </li>
      <li>
        <a href="about.html" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About us</a>
      </li>
  
    </ul>
  </div>
  </div>
</nav>
<br>
<div class="grid justify-items-stretch">
  <div class="justify-self-end mr-4 mt-2"> <button  class="  ml-96  text-white bg-black font-medium rounded-md shadow-md text-sm h-8 w-28"> <a href="addmess.php">Add Mess </a> </button>
</div>
  <form class="  ml-48 " >
    <select class="border-2 border-black h-10 p-1 " name="college" action="" method="post" autocomplete="off">
      <option>Search your college</option>
      <option>Government College of Engineering Nagpur</option>
      <option>VNIT Nagpur - Visvesvaraya National Institute of Technology</option>
      <option>Shri Ramdeobaba College of Engineering and Management
</option>
      <option>G.H. Raisoni College of Engineering, Nagpur
</option>
      <option>
Yeshwantrao Chavan College of Engineering, Nagar Yuwak Shikshan Sanstha
</option>
<br>
 

    </select>

    <br>
    <button class="mt-6  ml-52  text-white bg-blue-600 font-medium rounded-lg text-sm h-8 w-28" name="submit" type="submit">Search</button>
  </form>
</div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                  Registerd by
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact Details
                </th>
                <th scope="col" class="px-6 py-3">
                    College Name
                </th>
                 <th scope="col" class="px-6 py-3">
                    Address
                </th>
            </tr>
        </thead>
        <tbody>
          <!--  
              <?php

require 'config.php';
if(isset($_POST["submit"])){
    $college = $_POST["college"];

  $result = mysqli_query($conn, "SELECT * FROM mess WHERE college = $college");
              while( $row = $result->fetch_assoc())
              {
              ?>
 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                   <?php echo $row['detail']; ?>
                </td>

                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            <?php
          }
          
            ?> -->
         
   
  
        </tbody>
    </table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>


</body>
</html>