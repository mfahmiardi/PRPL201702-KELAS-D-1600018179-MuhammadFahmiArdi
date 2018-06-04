<!DOCTYPE html>
<html>
<head>
  <title>Tampil Customer</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <center>
      <h1>Daftar Customer</h1>
      <a href='dashboard.html'>Kembali</a>
      <form>
        <div>
          <input type="Search" id="mySearch" name="nik">
        </div>
        <button>Search</button>
      </form>
      <table border='1'>
      <tr>
          <td>No.</td>
          <td>NIK</td>
          <td>Nama</td>
          <td>No. HP/Telepone</td>
          <td>E-mail</td>
          <td>Tipe Ruangan</td>
          <td>Check In</td>
          <td>Check Out</td>
          <td>Jumlah Orang</td>
          <td colspan=2>Aksi</td>
      </tr>
    </center>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotelmedan";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM reservasi";
$data = $konek->query($sql);

if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['nik']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['nohp']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['tipe_ruangan']."</td>";
    echo "<td>".$row['cekin']."</td>";
    echo "<td>".$row['cekot']."</td>";
    echo "<td>".$row['jumlah_orang']."</td>";
    echo "<td><a href='formupdate_customer.php?nik=".$row['nik']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?nik=".$row['nik']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();
?>
        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Januari', 2],
          ['Februari', 1],
          ['Maret', 1],
          // ['April', 1],
          // ['Mei', 0]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'Monthly Visitor Data', 'width':550, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
        </script>
</body>
</html>