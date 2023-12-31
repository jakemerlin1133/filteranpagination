<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dynamic Pagination</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <main>
        <section class="header">
            <div class="items-controller">
                <h5>Show</h5>
                <select name="" id="itemperpage">
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="08" selected>08</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                </select>
                <h5>Per Page</h5>
            </div>
            <div class="search">
                <h5>Search</h5>
                <input type="text" name="" id="search" placeholder="search">
            </div>
        </section>
        <section class="field">
            <table>
                <thead>
                    <tr>
                      <th><input type="checkbox" name="" id="selectAll"></th>
                      <th>S.N</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Username</th>
                      <th>Status</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>01</td>
                        <td>Tiger Nixon</td>
                        <td>Developer</td>
                        <td>@tiger</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>02</td>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>@gakyo</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>03</td>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>@Francisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>04</td>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>05</td>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>airxam</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>06</td>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>@Williamson</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>07</td>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>Francisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>08</td>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Rohaxzam</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>09</td>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>@Francisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>10</td>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Oedinburgh</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>11</td>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>jana_max</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>12</td>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Quinn_feri</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>13</td>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>Charcisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>14</td>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>haleywods</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>15</td>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>tatyanay</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>

                    <tr>
                        <td><input type="checkbox"></td>
                        <td>01</td>
                        <td>Tiger Nixon</td>
                        <td>Developer</td>
                        <td>@tiger</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>02</td>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>@gakyo</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>03</td>
                        <td>Ashton Cox</td>
                        <td>Junior Technical Author</td>
                        <td>@Francisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>04</td>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>05</td>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>airxam</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>06</td>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>@Williamson</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>07</td>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>Francisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>08</td>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Rohaxzam</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>09</td>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>@Francisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>10</td>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Oedinburgh</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>11</td>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>jana_max</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>12</td>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Quinn_feri</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>13</td>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>Charcisco</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>14</td>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>haleywods</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>15</td>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>tatyanay</td>
                        <td><input type="checkbox"></td>
                        <td><i class="fa fa-edit"></i> | <i class="fa fa-trash"></i></td>
                    </tr>
                  </tbody>
            </table>
            <div class="bottom-field">
                <ul class="pagination">
                  <li class="prev"><a href="#" id="prev">&#139;</a></li>
                  <li class="next"><a href="#" id="next">&#155;</a></li>
                </ul>
            </div>
        </section>
    </main>

<script type="text/javascript" src="main.js"></script>
</body>
</html>
