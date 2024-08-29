<?php
    $PPLG = [
        [
         "nama" =>  "Arya",
             "kelas" => "XI",
         "Umur" => "16",
         "Jurusan" => "PPLG",
         "Keterangan" => "Hadir"
       ],
        [
         "nama" =>  "Bani",
             "kelas" => "XI",
         "Umur" => "17",
         "Jurusan" => "PPLG",
         "Keterangan" => "Tidak Hadir"
       ]
        
    ];
     
?>
<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <?php include 'template/Header.php'; ?>
</head>
<body>
<div class="panel">
                    <div class="panel-header">
                        <h5>Recent Orders</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php
                                
                                foreach ($PPLG as $siswa) {
                                echo "<tr>";
                                 echo "<td>$siswa[nama]</td>";
                                echo "<td>$siswa[kelas]</td>";                                    
                                 echo "<td>$siswa[Umur]</td>";
                                 echo "<td>$siswa[Jurusan]</td>";
                                 echo "<td>" . ($siswa['Keterangan'] == 'Hadir' ? '<span class="bg-success p-2 rounded text-light">Hadir</span>' : '<span class="bg-danger p-2 rounded text-light">Tidak Hadir</span>') . "</td>";
                                 echo "<td>";
                                     echo "<div class='btn-box'>";
                                         echo "<button><i class='fa-light fa-eye'></i></button>";
                                         echo "<button><i class='fa-light fa-pen'></i></button>";
                                         echo "<button><i class='fa-light fa-trash'></i></button>";
                                     echo "</div>";
                                 echo "</td>";
                              echo "</tr>";

                             }

                             ?>
                                    
                                
                               
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
    
        

    
</body>

</html>