<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <title>Basura Location</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-dark d-flex justify-content-center min-vh-100 p-5">
  <section class="border overflow-hidden rounded-5 position-relative d-flex w-75 rounded bg-white">
    <div class="col1 border border-black p-3">
      <h1 class="display-5 text-center">Storing Form Data in Database</h1>
      <form action="insertrec.php" method="post" class="d-flex flex-column gap-2">
        <label for="Userid">ID:</label>
        <input type="text" name="bid" id="bid" class="p-2 border border-black rounded w-100 text-center" required>

        <label for="dname">Name:</label>
        <input type="text" name="bname" id="bname" class="p-2 border border-black rounded w-100 text-center" required>

        <label for="email">Email Address:</label>
        <input type="text" name="email" id="email" class="p-2 border border-black rounded w-100 text-center" required>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" class="p-2 border border-black rounded w-100 text-center" required>

        <input type="submit" value="Add Record" class="bg-black border-0 p-3 text-white rounded w-100 text-center">
        <input type="text" id="input" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="w-100 p-2 border border-black rounded w-100 text-center">


      </form>
    </div>
    <div class="col2 w-100 border border-black p-3">
      <table id='table' border=2 class="table table-striped table-hover table-dark table-bordered">
        <tr class="header">
          <th>ID</th>
          <th>Name</th>
          <th>Email Address</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "staff");

        // Check connection
        if ($conn === false) {
          die("ERROR: Could not connect. "
            . mysqli_connect_error());
        }

        $sql = "SELECT * FROM basuras";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td> " . $row["email"] .  "</td><td>" . $row["address"] .   "</td><td><a href=deleterec.php?bid=" . $row["id"] . " class='button text-decoration-none text-white bg-black border p-1 px-2'>DELETE </a>  <a href='editrec.php?bid=" . $row["id"] . "&name=" . $row["name"] . "&address=" . $row["address"] . "&email=" . $row["email"] . "&credate=" . $row["created"] . "' class='button text-decoration-none text-white bg-black border p-1 px-2'>EDIT </a>    </td></tr>";
          }
        } else {
        }
        $conn->close();


        ?>
      </table>
    </div>

  </section>

  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("input");
      filter = input.value.toUpperCase();
      table = document.getElementById("table");
      tr = table.querySelectorAll("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>