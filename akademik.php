<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas 2 menampilkan data dari mysql dari situs 000webhost.com</title>

</head>

<body>
<center>    
            <h3>DATA MAHASISWA</h3>
            <table class="minimalistBlack">
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">PRODI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $q = "SELECT * FROM mahasiswa";
                    $hasil = mysqli_query($connection, $q);

                    foreach ($hasil as $data) { ?>
                    <tr>
                        <th scope="row"><?= $data['nim']; ?></th>
                        <td><?= $data['nama']; ?></td>
                        <td><?= $data['prodi']; ?></td>
                    </tr>
                    <?php

                }
                ?>
                </tbody>
            </table>

<br>
            <h3>DATA MATA KULIAH</h3>
            <table class="minimalistBlack">
                    <tr>
                        <th scope="col">KDMK</th>
                        <th scope="col">NMMK</th>
                        <th scope="col">SKS</th>
						<th scope="col">PRODI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $q = "SELECT * FROM matakuliah";
                    $hasil = mysqli_query($connection, $q);

                    foreach ($hasil as $data) { ?>
                    <tr>
                        <th scope="row"><?= $data['kdmk']; ?></th>
                        <td><?= $data['nmmk']; ?></td>
                        <td><?= $data['sks']; ?></td>
						<td><?= $data['prodi']; ?></td>
                    </tr>
                    <?php

                }
                ?>
                </tbody>
            </table>

<br>
            <h3>DATA NILAI</h3>
            <table class="minimalistBlack">
                    <tr>
                        <th scope="col">THAKD</th>
                        <th scope="col">NIM</th>
                        <th scope="col">KDMK</th>
						<th scope="col">NILAI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $q = "SELECT * FROM nilai";
                    $hasil = mysqli_query($connection, $q);

                    foreach ($hasil as $data) { ?>
                    <tr>
                        <th scope="row"><?= $data['thakd']; ?></th>
                        <td><?= $data['nim']; ?></td>
                        <td><?= $data['kdmk']; ?></td>
						<td><?= $data['nilai']; ?></td>
                    </tr>
                    <?php

                }
                ?>
                </tbody>
            </table>

<br>
            <h3>DATA CUSTOMER</h3>
            <table class="minimalistBlack">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">PASSWORD</th>
						<th scope="col">NAMA</th>
                        <th scope="col">UMUR</th>
                        <th scope="col">ALAMAT</th>
						<th scope="col">TELP</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TANGGAL LAHIR</th>
						<th scope="col">KODE POS</th>
                        <th scope="col">NAMA IBU KANDUNG</th>
                        <th scope="col">JENIS KELAMIN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $q = "SELECT * FROM customer";
                    $hasil = mysqli_query($connection, $q);

                    foreach ($hasil as $data) { ?>
                    <tr>
                        <th scope="row"><?= $data['id_customer']; ?></th>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['password']; ?></td>
						<td><?= $data['nama']; ?></td>
                        <td><?= $data['umur']; ?></td>
						<td><?= $data['alamat']; ?></td>
                        <td><?= $data['telp']; ?></td>
						<td><?= $data['email']; ?></td>
                        <td><?= $data['tgl_lahir']; ?></td>
						<td><?= $data['kode_pos']; ?></td>
                        <td><?= $data['nama_ibu_k']; ?></td>
						<td><?= $data['gender']; ?></td>
                    </tr>
                    <?php

                }
                ?>
                </tbody>
            </table>

<br>

</center>
    </body>

<style>
table.minimalistBlack {
  border: 3px solid #000000;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 10px;
}
table.minimalistBlack tbody td {
  font-size: 15px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 18px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
</style>
</html> 