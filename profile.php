<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
   
  <script src="https://cdn.tailwindcss.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  </script>
  </head>
  <body>
    <body class="bg-gray-300 antialiased">
    <div class="container mx-auto my-60">
        <div>

            <div class="bg-gradient-to-r from-indigo-400 to-cyan-400 relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto drop-shadow-2xl

">
                <div class="flex justify-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                </div>
                 <div class="mt-28 ml-32 text-4xl md:text-4xl xl:text-3xl font-medium
 texr-center tracking-tight mb-8 subpixel-antialiased
font-serif  ">
                     <h1 class="ml-12 drop-shadow-2xl">Email : <?php echo $row["email"]; ?></h1>
                       <h1 class="mb-28 drop-shadow-2xl">Contact Details : <?php echo $row["contact"]; ?></h1>
     <a class="drop-shadow-2xl inline-block px-7 py-3 mr-2 bg-black text-white font-medium text-sm leading-snug  rounded shadow-md hover:bg-gray-100 hover:text-black hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mb-6 text-end  ml-96 data-mdb-ripple="true" data-mdb-ripple-color="light" href="logout.php" role="button">Logout</a>
                 </div>
         
            </div>

        </div>
    </div>
</body>
</html>

  