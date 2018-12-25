<!-- Header -->
<?php include_once("template/header.php") ?>
<!-- Body Part -->

<div class="wrapper mt-20">
  <div class="container">
    <div class="person">
      <div class="col-6">
        <img src="images/person-icon.png" height="161px">
      </div>
      <div class="col-6">
        <p>Name : F_Name L_Name</p>
        <p>DOB : 21/07/1997</p>
        <p>Address : Village: Pantiya,<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Taluka: Anjar,<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp District: Kutch,<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp State: Gujarat,<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Pin: 370110</p>
        <p>City : Anjar</p>
        <p>Marital Status : Marride</p>
        <p>Study : 12th</p>
        <p>Occupation : Job</p>
        <p>Mobiel No. : xxx-xxx-xxxx</p>
      </div>
    </div>
  </div>
</div>


    <!-- Directory Table -->
    
<div class="wrapper mt-50">
  <div class="container">
    <!-- Table -->
    <table class="table table-bordered align-center">
      <thead>
        <tr>
          <th scope="col">SR No.</th>
          <th scope="col">Photo</th>
          <th scope="col">Full Name</th>
          <th scope="col">Relation</th>
          <th scope="col">DOB</th>
          <th scope="col">Marital Status</th>
          <th scope="col">Study</th>
          <th scope="col">Occupation</th>
          <th scope="col">Mobile Number</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-column = "SR No. :">1</td>
          <td data-column = "Photo :"><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
          <td data-column = "Full Name :"><a href="person.php">F_Name L_Name</a></td>
          <td data-column = "Relation :">Son</td>
          <td data-column = "DOB :">21/07/2018</td>
          <td data-column = "Marital Status :">unmarried</td>
          <td data-column = "Study :">12th</td>
          <td data-column = "Occupation :">Job</td>
          <td data-column = "Mobile Number :">xxx xxx xxxx</td>
        </tr>             
      </tbody>
    </table>
  </div>
</div>

<!-- Body Part -->
<!-- Footer -->
<?php include_once("template/footer.php") ?>
