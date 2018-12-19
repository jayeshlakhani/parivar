<?php include_once("template/header.php") ?>

  <!-- Body Part -->
  <div class="wrapper nb"> 
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
        <br>

        <!-- Table -->
        <table class="table table-bordered align-center">
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
                <td class="tdetail">1</td>
                <td class="tdetail"><img class="person-icon" src="images/person-icon.png"></td>
                <td class="tdetail">jayesh lakhani</td>
                <td class="tdetail">Anjar</td>
                <td class="tdetail">Job</td>
                <td class="tdetail">12th</td>
                <td class="tdetail">Pantiya</td>
                <td class="tdetail">xxx xxx xxxx</td>
                <td class="data-column"  data-column="1"><a class="btn btn-primary" data-toggle="collapse" href="#1" role="button" aria-expanded="false" aria-controls="1"><img class="person-icon" src="images/person-icon.png"><span class="ml-10">jayesh lakhani</span></a>
                <div class="collapse" id="1">
                  <div class="card card-body">
                    <p><b>City : </b>Anjar</p>
                    <p><b>Occupation : </b>Job</p>
                    <p><b>Study : </b>12th</p>
                    <p><b>Place : </b>Pantiya</p>
                    <p><b>Number : </b>xxx xxx xxxx</p>
                  </div>
                </div>
                </td>
              </tr>
              <tr>
                <td class="tdetail">2</td>
                <td class="tdetail"><img class="person-icon" src="images/person-icon.png"></td>
                <td class="tdetail">jayesh lakhani</td>
                <td class="tdetail">Anjar</td>
                <td class="tdetail">Job</td>
                <td class="tdetail">12th</td>
                <td class="tdetail">Pantiya</td>
                <td class="tdetail">xxx xxx xxxx</td>
                <td class="data-column"  data-column="2"><a class="btn btn-primary" data-toggle="collapse" href="#2" role="button" aria-expanded="false" aria-controls="2"><img class="person-icon" src="images/person-icon.png"><span class="ml-10">jayesh lakhani</span></a>
                <div class="collapse" id="2">
                  <div class="card card-body">
                    <p><b>City : </b>Anjar</p>
                    <p><b>Occupation : </b>Job</p>
                    <p><b>Study : </b>12th</p>
                    <p><b>Place : </b>Pantiya</p>
                    <p><b>Number : </b>xxx xxx xxxx</p>
                  </div>
                </div>
                </td>
              </tr>
              <tr>
                <td class="tdetail">3</td>
                <td class="tdetail"><img class="person-icon" src="images/person-icon.png"></td>
                <td class="tdetail">jayesh lakhani</td>
                <td class="tdetail">Anjar</td>
                <td class="tdetail">Job</td>
                <td class="tdetail">12th</td>
                <td class="tdetail">Pantiya</td>
                <td class="tdetail">xxx xxx xxxx</td>
                <td class="data-column"  data-column="3"><a class="btn btn-primary" data-toggle="collapse" href="#3" role="button" aria-expanded="false" aria-controls="3"><img class="person-icon" src="images/person-icon.png"><span class="ml-10">jayesh lakhani</span></a>
                <div class="collapse" id="3">
                  <div class="card card-body">
                    <p><b>City : </b>Anjar</p>
                    <p><b>Occupation : </b>Job</p>
                    <p><b>Study : </b>12th</p>
                    <p><b>Place : </b>Pantiya</p>
                    <p><b>Number : </b>xxx xxx xxxx</p>
                  </div>
                </div>
                </td>
              </tr>              
            </tbody>
          </table>
          <!-- Pagination -->
          <nav class="float-right" aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
      </div>
    </div>
  </div>
    
    <!-- Footer Part -->
<?php include_once("template/footer.php") ?>


