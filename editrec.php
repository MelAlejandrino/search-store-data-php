<!DOCTYPE html>
<html lang="en">
<head>
      <title>Basura Location</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

      .button {
        background-color: #1c87c9;
        border: none;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 1px 1px;
        cursor: pointer;
      }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}
</style>



   </head>   

   <body>
      <center>
         <h1>Storing Form data in Database</h1>
         <table>
         <form action="saveupdaterec.php" method="post">

         <tr><td>
               <label for="Userid">Id:</label></td><td>
               <input type="text" name="bid" id="bid" value=<?php echo $_REQUEST["bid"];  ?> >
               </td></tr>      
             
            <tr><td>
               <label for="dname">Name:</label></td><td>
               <input type="text" name="bname" id="bname" value='<?php  echo $_REQUEST["name"];  ?>'>
               </td></tr>

        
             
            <tr><td>
               <label for="email">Email Address:</label></td><td>
               <input type="text" name="email" id="email" value=<?php echo $_REQUEST["email"];  ?>>
               </td></tr>


               <tr><td>
               <label for="addres">Address:</label></td><td>
               <input type="text" name="addres" id="addres" value=<?php echo $_REQUEST["addres"];  ?>>
               </td></tr>

               <tr><td>
                  <input type="hidden" name="cre" id="cre" value ='<?php echo $_REQUEST["credate"];  ?>'>
            <input type="submit" value="Submit">
            </td></tr>
         </form>
 <?php



?>
</table>
      </center>
   </body>
</html>

