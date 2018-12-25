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
                <th scope="col">Mobile No.</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-column = "SR No. :" >1</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
                <!-- <td class="data-column"  data-column="1"><a class="btn btn-primary" data-toggle="collapse" href="#1" role="button" aria-expanded="false" aria-controls="1"><img class="person-icon" src="images/person-icon.png"><span class="ml-10">jayesh lakhani</span></a>
                <div class="collapse" id="1">
                  <div class="card card-body">
                    <p><b>City : </b>Anjar</p>
                    <p><b>Occupation : </b>Job</p>
                    <p><b>Study : </b>12th</p>
                    <p><b>Place : </b>Pantiya</p>
                    <p><b>Number : </b>xxx xxx xxxx</p>
                  </div>
                </div>
                </td> -->
              </tr>
              <tr>
                <td data-column = "SR No. :" >2</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
              </tr>
              <tr>
                <td data-column = "SR No. :" >3</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
              </tr>
              <tr>
                <td data-column = "SR No. :" >4</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
              </tr>
              <tr>
                <td data-column = "SR No. :" >5</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
              </tr>
              <tr>
                <td data-column = "SR No. :" >6</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
              </tr>
              <tr>
                <td data-column = "SR No. :" >7</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
              </tr>
              <tr>
                <td data-column = "SR No. :" >8</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
              </tr>
              <tr>
                <td data-column = "SR No. :" >9</td>
                <td data-column = "Photo :" ><a href="person.php"><img class="person-icon" src="images/person-icon.png"></a></td>
                <td data-column = "Full Name :" ><a href="person.php">F_Name L_Name</a></td>
                <td data-column = "" class="tdetail">Anjar</td>
                <td data-column = "" class="tdetail">Job</td>
                <td data-column = "" class="tdetail">12th</td>
                <td data-column = "" class="tdetail">Pantiya</td>
                <td data-column = "" class="tdetail">xxx xxx xxxx</td>
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


