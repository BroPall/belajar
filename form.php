<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Semua Inputan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center; font-weight: bold; margin-top: 20px; font-size: 40px;">Form Biodata dengan HTML</h1>
                    <form action="proses.php" method="post">

                        <div style="text-align: center; font-size: 50px; font-weight: bold;" class="mb-3 img">
                            <input type="image" src="lg.png" alt="" style="max-width: 200px; max-height: 200px; display: block; margin: auto; padding-top:30px;">
                        </div>

                        <div class="input-group mb-3">
                            <input type="search" class="form-control" name="Search" placeholder="Search" aria-label="Search">
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pw" name="pw" placeholder="Masukkan Password">
                        </div>
                        <div class="mb-3">
                            <label for="cb" class="cb">Pilih Gender Anda</label><br>
                            <label for="cb" class="cb">Cewek</label>
                            <input type="checkbox" name="Cowok" id="" name="pa" placeholder="pwp">
                            <label for="cb" class="cb">Cowok</label>
                            <input type="checkbox" name="Cowok" id="" name="pa" placeholder="pwp">
                        </div>

                        <div class="mb-3">
                             <label for="cb" class="cb">Pilih Prodi Anda</label><br>
                            <label for="radio">TIF</label>
                            <input type="radio" name="Radio" id="radio">
                            <label for="radio">TKK</label>
                            <input type="radio" name="Radio" id="radio">
                        </div>

                          <div class="mb-3">
                            <label for="">Telepon</label><br>
                            <input type="tel" class="form-control" name="Phone" id="phone">
                        </div>

                        <div class="mb-3">
                            <label for="number">Number</label><br>
                            <input type="number" class="form-control" name="Number" id="number">
                        </div>

                          <div class="mb-3">
                            <label for="url">URL</label><br>
                            <input type="url" class="form-control" name="URL" id="url">
                        </div>

                        <div style=" font-size: 20px;" class="mb-3 Pilih-warna">
                            <!-- <label for="warna" class="wrn">Pilih warna anda</label><br> -->
                            <input type="color" class="form-control" name="color" id="Color">
                        </div>

                        <div class="mb-3">
                            <label for="label">Pilih tanggal lahir</label><br>
                            <input type="date" class="form-control" name="Date" id="date">
                        </div>

                        <div class="mb-3">
                            <label for="date-lc">Pilih waktu lokal</label><br>
                            <input type="datetime-local" class="form-control" name="Datelc" id="datelc">
                        </div>

                        <div class="mb-3">
                            <label for="file">Pilih file anda</label><br>
                            <input type="file" class="form-control" name="File" id="file">
                        </div>

                        <div class="mb-3">
                            <label for="hidden">hidden</label><br>
                            <input type="hidden" name="Hidden">
                        </div>

                        <div class="mb-3">
                            <label for="month">Bulan Anda</label><br>
                            <input type="month" class="form-control"    name="Month" id="month">
                        </div>

                        <div class="mb-3">
                            <label for="range">Range</label><br>
                            <input type="range" class="form-control" name="Range" id="range">
                        </div>

                        <div class="mb-3">
                            <label for="Time">Time</label><br>
                            <input type="time" class="form-control" name="Time" id="time">
                        </div>

                        <div class="mb-3">
                            <label for="week">Week</label><br>
                            <input type="week" class="form-control" name="Week" id="week">
                        </div>

                        <div class="mb-3">
                            <label for="text">Masukkan Keterangan Anda</label><br>
                            <input type="text" class="form-control" name="Text" id="text" style=" min-height: 100px; max-height: 200px;">
                        </div>

                        <div class="mb-3 cb" style="text-align: center; gap: 10px;">
                            <input type="submit" value="Submit" style="font-weight: bold; background-color: black; color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer;">
                            <input type="reset" value="Reset" style="font-weight: bold; background-color: red; color: white; padding: 8px 16px; border: none; border-radius: 5px; cursor: pointer;">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>