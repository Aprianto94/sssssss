<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Catatan waktu</title>
</head>
<body>
    <div class="container-sm">
    <div class="row row-cols-3">
        <div></div>
        <div>
            <form action="proses_tambah2.php" method="post">
                <div>
                    <label>Nik</label>
                    <input type="text" name="nik" class="form-control" id="floatingInput">
                </div>
                <div>
                <div>   
            
                <div>
                    <label>Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" id="floatingInput">
                </div>
                <div>
                    <label>Waktu</label>
                    <input type="text" name="waktu" class="form-control" id="floatingInput">
                </div>
                <div>
                    <label>Lokasi Terakhir</label>
                    <input type="text" name="lokasi" class="form-control" id="floatingInput">
                </div>
                <div>
                    <label>Suhu Tubuh</label>
                    <input type="text" name="suhu" class="form-control" id="floatingInput">
                </div>
                <div>
                <div><br>
              
                    
                <button type="submit" class="btn btn-info">Simpan</button>
                </div>

                <h1><marquee width="100%" direction="left" height="150px">Semoga Lekas Sembuh :)</marquee></h1> 
            </form>
        </div>

    </div>
    </div>
</body>
</html>