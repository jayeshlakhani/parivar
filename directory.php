<?php include_once("template/header.php") ?>

    <!-- Body Part -->

    <!-- Search Button -->
    <div class="wrapper mt-20 search_btn">
      <div class="container">
        <h2>Find from Directory</h2>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search by any...">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Search</button>
          </div>
        </div>
        <span>Search by: Full Name, Mobile Number, City, Occupation, Study, Place.</span>
      </div>
    </div>

    <!-- Directory Table -->
    
    <div class="wrapper directory_table mt-50">
      <div class="container">
        <h3>Total Families : xxx</h3>
        <h3>Total Members : xxx</h3>

        <!-- Table -->
        <table class="table">
            <thead>
              <tr>
                <th scope="col">SR No.</th>
                <th scope="col">Photo</th>
                <th scope="col">Full Name</th>
                <th scope="col">City</th>
                <th scope="col">Occupation</th>
                <th scope="col">Study</th>
                <th scope="col">Place</th>
                <th scope="col">Number</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>

    
    <!-- Body Part -->

<?php include_once("template/footer.php") ?>
