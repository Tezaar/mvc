<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form method="POST" action="<?= base_url('input_data/cetak'); ?>">
		<?php echo validation_errors() ?>
              <tr>
                  <th colspan="3">
                      Form Input Data Siswa
                  </th>
              </tr> 
            <table>
                <tr>
                    <td>Nama Siswa</td>
                        <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                        <th>:</th>
                        <td>
                            <input type="text" name="nis" id="nis">
                        </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                        <th>:</th>
                        <td>
                            <input type="text" name="kelas" id="kelas">
                        </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                        <th>:</th>
                        <td>
                            <input type="date" name="tgl_lahir" id="tgl_lahir">
                        </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                        <th>:</th>
                        <td>
                            <input type="text" name="tmp_lahir" id="tmp_lahir">
                        </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                        <th>:</th>
                        <td>
                        <textarea type="text" name="alamat" id="alamat"></textarea>
                        </td>
                </tr>
                <tr>
                        <td>Jenis Kelamin</td>
                        <th>:</th>
                        <td>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
                            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan"> Perempuan<br>
                        </td>
                </tr>
                <tr>
                    <td>Agama</td>
                        <th>:</th>
                        <td>
                            <select name="agama" id="agama">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </td> 
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="submit">
                        </td>
                    </tr>
            </table>
       </form>
    </center>
        
</body>

</html>