<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses2.php" method="$_GET">
        <center>
        <table border "1" width="600">
            <tr>
                <td>Nama lengkap</td>
                <td>:</td>
                <td><input type="text" name ="Nama_Mahasiswa" size "30"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="text" name="Tanggal_Lahir" size "30"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name=""id"Alamat" rows="5">
                         </textarea>
                </td>
            </tr>
            <tr>
                <td>Tahun masuk</td>
                <td>:</td>
                <td><input type="date" name="Tahun_Masuk" size "30"></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td>:</td>
                <td>
                    <select>
                <option value="">Sains Data</option>
                <option value="">Reskom</option>
                <option value="">STI</option>
            </select>
                </td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><input type="text" name ="Email" size "30"></td>
            </tr>
            <tr>
                <td>no telpon</td>
                <td>:</td>
                <td><input type="text" name ="No_Telpon" size "30"></td>
            </tr>
            <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="SIMPAN DATA" class="input"></td>
    </tr>
</table>
</center>
    </form>
</body>
</html>