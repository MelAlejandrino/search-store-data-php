<!DOCTYPE html>
<html lang="en">

<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <title>Edit Employee</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-dark d-flex justify-content-center min-vh-100 p-5">
   <section class="border overflow-hidden rounded-5 position-relative d-flex w-75 justify-content-center align-items-center rounded bg-white">
      <div class="w-50 p-3">
         <h1>UPDATE FORM</h1>
         <form action="saveupdaterec.php" method="post" class="d-flex flex-column gap-2">
            <label for="Userid">Id:</label>

            <input type="text" name="bid" id="bid" class="p-2 border border-black rounded w-100 text-center" value=<?php echo $_REQUEST["bid"];  ?>>

            <label for="dname">Name:</label>

            <input type="text" name="bname" id="bname" class="p-2 border border-black rounded w-100 text-center" value='<?php echo $_REQUEST["name"];  ?>'>


            <label for="email">Email Address:</label>

            <input type="text" name="email" id="email" class="p-2 border border-black rounded w-100 text-center" value=<?php echo $_REQUEST["email"];  ?>>

            <label for="addres">Address:</label>

            <input type="text" name="address" id="address" class="p-2 border border-black rounded w-100 text-center" value=<?php echo $_REQUEST["address"];  ?>>



            <input type="hidden" name="cre" id="cre" value='<?php echo $_REQUEST["credate"];  ?>'>
            <input type="submit" value="Submit" class="bg-black border-0 p-3 text-white rounded w-100 text-center">

         </form>
      </div>

   </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>