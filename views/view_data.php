<html> 
<head> 
<title>Tampil Data Siswa</title> 
</head> 
 
<body>
    <center>
            <header>     
                <tr>                 
                    <th colspan="3">                     
                        Tampil Data Siswa              
                    </th>            
                </tr>             
            </header>                  
            <table>              
                    <tr>                 
                        <td>Nama Siswa</td>                 
                        <td>:</td>                 
                        <td>                     
                            <?= $nama; ?>                 
                        </td>             
                    </tr>             
                    <tr>                 
                        <td>NIS</td>                 
                        <td>:</td>                 
                        <td>                    
                            <?= $nis; ?>                 
                        </td>             
                    </tr>
                    <tr>                 
                        <td>Kelas</td>                 
                        <td>:</td>                 
                        <td>                    
                            <?= $kelas; ?>                 
                        </td>             
                    </tr>
                    <tr>                 
                        <td>Tanggal Lahir</td>                 
                        <td>:</td>                 
                        <td>                    
                            <?= $tgl_lahir; ?>                 
                        </td>             
                    </tr>
                    <tr>                 
                        <td>Tempat Lahir</td>                 
                        <td>:</td>                 
                        <td>                    
                            <?= $tmp_lahir; ?>                 
                        </td>             
                    </tr>
                    <tr>                 
                        <td>Alamat</td>                 
                        <td>:</td>                 
                        <td>                    
                            <?= $alamat; ?>                 
                        </td>             
                    </tr>
                    <tr>                 
                        <td>Jenis Kelamin</td>                 
                        <td>:</td>                 
                        <td>                    
                            <?= $jenis_kelamin; ?>                 
                        </td>             
                    </tr>
                    <tr>                 
                        <td>Agama</td>                 
                        <td>:</td>                 
                        <td>                    
                            <?= $agama; ?>                 
                        </td>             
                    </tr>

                    <tr>                 
                        <td colspan="3" align="center">                    
                        <a href="<?= base_url('input_data'); ?>">Kembali</a>                 
                        </td> 
                    </tr>         
                </table>          
    </center> 
</body> 
 
</html>