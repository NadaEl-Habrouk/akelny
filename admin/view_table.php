<style>
  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px #284678 ;
    border-radius: 12px 12px 0 0;
    margin-bottom: 50px;
  }

  td,
  th {
    padding: 10px 16px;
    text-align: center;
  }

  th {
    background-color: #284678 ;
    color: #fafafa;
    font-family: 'Open Sans', Sans-serif;
    font-weight: bold;
  }

  tr {
    width: 100%;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
  }

  tr:nth-child(even) {
    background-color: #eeeeee;
  }

</style>
<div >
  <h2>All Orders</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">User Name </th>
        <th class="text-center">Meal Name </th>
        <th class="text-center">Appointment</th>
        <th class="text-center">Num Of Tables</th>
        <th class="text-center">Num Of People</th>

       
      </tr>
    </thead>
    <?php
  include "../dbconnection.php";
  $sql="SELECT * FROM reseve";
      $result=$connect-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["user_name"]?> </td>
      <td><?=$row["meal_name"]?></td>
      <td><?=$row["appointment"]?></td>
      <td><?=$row["num_of_table"]?></td>
      <td><?=$row["num_of_people"]?></td>



      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>