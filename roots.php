<!-- Header -->
<?php include_once("template/header.php") ?>
<!-- Body Part -->

<div class="wrapper">
  <div class="container">
    <!-- Table -->
    <table class="table table-bordered align-center">
      <thead>
        <tr>
          <th scope="col">ક્રમાંક</th>
          <th scope="col">નામ</th>
          <th scope="col">સંવત</th>
          <th scope="col">ગામ</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>૧</td>
          <td>ઓધવદાસ</td>
          <td>૨૧૨</td>
          <td>ઊંઝાગામ</td>
        </tr>
        <tr>
          <td>૨</td>
          <td>લાલદાસ</td>
          <td>૧૧૧૫</td>
          <td>લાડોલગામ</td>
        </tr>
        <tr>
          <td>૩</td>
          <td>વેણીદાસ</td>
          <td>૧૪૨૮</td>
          <td>ગીરમઠાગામ</td>
        </tr>
        <tr>
          <td>૪</td>
          <td>ગણેશ પટેલ</td>
          <td>૧૬૬૦</td>
          <td>સિકરા (કચ્છ)</td>
        </tr>
        <tr>
          <td>૫</td>
          <td>ઉકા પટેલ</td>
          <td>૧૬૮૭</td>
          <td>ગઢશીશા ગામ</td>
        </tr>
        <tr>
          <td>૬</td>
          <td>ભોજા પટેલ</td>
          <td>૧૭૬૦</td>
          <td>ખેડોઈ ગામ</td>
        </tr>
        <tr>
          <td>૭</td>
          <td>પેથા પટેલ</td>
          <td>૧૭૬૧ - સુરધન</td>
          <td>ખેડોઈ ગામ</td>
        </tr>
        <tr>
          <td>૮</td>
          <td>ખીમજી પટેલ</td>
          <td>૧૭૮૦</td>
          <td>ખેડોઈ ગામ</td>
        </tr>
        <tr>
          <td>૯</td>
          <td>માવજી પટેલ</td>
          <td>૧૭૯૯</td>
          <td>ખેડોઈ ગામ</td>
        </tr>
        <tr>
          <td>૧૦</td>
          <td>લાખા પટેલ</td>
          <td>૧૮૦૦</td>
          <td>ખેડોઈ ગામ</td>
        </tr>
        <tr>
          <td>૧૧</td>
          <td>ભાણજી પટેલ</td>
          <td>૧૮૨૦ - સુરધન</td>
          <td>ખેડોઈ ગામ</td>
        </tr>
        <tr>
          <td>૧૨</td>
          <td>શવદાસ પટેલ</td>
          <td>૧૮૪૦</td>
          <td>ખેડોઈ ગામ</td>
        </tr>
        <tr>
          <td>૧૩</td>
          <td>માનણ પટેલ</td>
          <td>૧૮૬૫</td>
          <td>ખેડોઈ ગામ</td>
        </tr>            
      </tbody>
    </table>
    <!--
    We will create a family tree using just CSS(3)
    The markup will be simple nested lists
    -->
    <div class="tree">
      <ul>
        <li>
          <a><b>ગણેશ પટેલ (૧૬૬૦)</b></a>
          <ul>
            <li>
              <a><b>ઉકાબાપા માંથી ઉકાણી (૧૬૮૭)</b></a>
              <ul>
                <li><a>રામજી ( ગઢશીશા )</a></li>
                <li>
                  <a><b>ભોજાબાપા માંથી-ભોજાણી (૧૭૬૦) ( ખેડોઈ )</b></a>
                  <ul>
                    <li><a>હરભમ</a></li>
                    <li><a><b>ખીમાબાપા માંથી ખીમાણી (૧૭૮૦)</b></a>
                      <ul>
                        <li><a>માવજી (૧૭૯૯)</a>
                          <ul>
                            <li><a><b>ભાણજી સુરધન થયા (૧૮૨૦)</b></a>
                              <ul>
                                <li><a>શવદાસ ઉર્ફે શોમજી (૧૮૪૦)</a>
                                  <ul>
                                    <li><a>માનણ (૧૮૬૫)</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li><a><b>લાખા બાપા માંથી લાખાણી (૧૮૦૦)</b></a></li>
                      </ul>
                     </li>
                    <li><a>અખૈય</a></li>
                    <li><a><b>પેથો ( સુરધન ) થાય (૧૭૬૧)</b></a></li>
                  </ul>
                </li>
                <li><a>દેવરામ ( મમાયમોરા )</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Body Part -->
<!-- Footer -->
<?php include_once("template/footer.php") ?>
