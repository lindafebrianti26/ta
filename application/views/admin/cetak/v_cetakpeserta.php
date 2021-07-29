<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard </title>
    <!-- <link rel="shortcut icon" href="<?php //echo base_url(); ?>assets/images/Logo_IAIN_Raden_Intan_Bandar_Lampung.png"/> -->
    <link rel="stylesheet" href="<?=base_url('assets/backend/css/sb-admin-2.min.css');?>">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <style type="text/css">
/*        @page {
          size: legal;
          margin: 0mm;
      }
      @media all {
        .page-break { display: none; }
    }

    */
    @media print {
        .page-break { display: block; page-break-before: always; }
    }
    html
    {
        background-color: #FFFFFF; 
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }

    body
    {
        font-size: 12pt;
        margin: 15mm 15mm 15mm 15mm; /* margin you want for the content */
    }
</style>
<script type="text/javascript"> 
    window.onload=function(){self.print();} 
</script> 
</head>
<body>
        <div class="container">
                <h1>
                    <img align= "left" width="150px" src="<?=base_url()?>assets/img/not.png"/> 
                    Polindes Budi Ayu <br>
                    <h4>
                    <td colspan="3" align="center" style="font-size: 14pt">Jl Selamet Kebun Ayu, Nusa Tenggara Barat. Kode Pos 83363 No.Telp(087858740693)<br>
                    </h4> </td>
                </h1>
                <hr>
                <h4><b> Data Peserta KB</b></h4> 
                <table class="table table-bordered table-hover">
        <thead>
       <th>No</th>
            <th>Tanggal Daftar</th>
            <th>Nama Ibu</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>No Tlpn</th>
          
        </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $key): ?>
            <tr>
                
                <td><?= $no++; ?></td>
                <td><?= $key->tgl_daftar ?></td>
                <td><?= $key->nama_ibu ?></td>
                <td><?= $key->tgl_lahir ?></td>
                <td><?= $key->umur?></td>
                <td><?= $key->alamat?></td>
                <td><?= $key->no_tlpn?></td>
                
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>

         </div>
     </div>
 </div>
</body>
</html>