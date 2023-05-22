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
  .btn-primary{
    background-color: #0277bd;
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 1%;
}
.btn-primary:hover{
    background-color: #3742fa;
}
.btn-secendary{
    background-color: #2ba13e;
    padding: 10%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-secendary:hover{
    background-color: #34e24c;
} 
      .btn-danger{
    background-color: #af4929;
    padding: 10%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-danger:hover{
    background-color: #e24e34;
}



</style>
<div >
  <h2>All Users</h2>
  
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Phone</th>

       
      </tr>
    </thead>

    <?php
  include "../dbconnection.php";
        $sql="SELECT * FROM user WHERE is_admin=0";
      $result=$connect-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["fname"]?> <?=$row["lname"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["phone"]?></td>


      
    <?php
            $count=$count+1;
           
        }
    }
    
    ?>
</div>
</div>
  </table>

        </form>
        </td>

      