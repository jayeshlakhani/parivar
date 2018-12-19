<!-- Header -->
<?php include_once("template/header.php") ?>
<!-- Body Part -->

<div class="wrapper mt-20">
  <div class="container">
    <div class="person">
      <img src="images/person-icon.png" height="161px">
      <div class="person_info">
        <p>Name :</p>
        <p>DOB :</p>
        <p>Address :</p>
        <p>City :</p>
        <p>Marital Status :</p>
        <p>Study :</p>
        <p>Occupation :</p>
        <p>Mobiel No. :</p>
      </div>
    </div>
  </div>
</div>


    <!-- Directory Table -->
    
    <div class="wrapper directory_table mt-50">
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
                <th scope="col">Mobile No.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="tdetail">1</td>
                <td class="tdetail"><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td class="tdetail"><a href="person.php">jayesh lakhani</a></td>
                <td class="tdetail">Son</td>
                <td class="tdetail">21/07/2018</td>
                <td class="tdetail">unmarried</td>
                <td class="tdetail">12th</td>
                <td class="tdetail">Job</td>
                <td class="tdetail">xxx xxx xxxx</td>
              </tr>             
            </tbody>
          </table>

<!-- Body Part -->
<!-- Footer -->
<?php include_once("template/footer.php") ?>
