<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

  <img width="1000px" src="https://i.ibb.co/YZtPSdr/header.png" alt="header" border="0">
  
    

   <br/>
   <br>
   <br>
   <p>
    <center>
 
		<h2>LAPORAN DATA ORDER PERTANGGAL</h2><br>
 
	</center>
 <section class="panel">
							<div class="panel-body">
                    <table class="table"  style="width: 100%">
							<thead>
										<tr>
										<th class="text-center">ID</th>
											<th class="text-center">Nama</th>
											<th class="text-center">Email</th>
											<th class="text-center">Telepon</th>
											<th class="text-center">Produk</th>
											<th class="text-center">Deadline</th>
										
										</tr>
									</thead>
									<tbody>
                         @foreach ($cetakpertanggal as $item)
                      <tr>
                        <td align="center">{{ $item->id }}</td>
                        <td align="center">{{ $item->nama}}</td>
                        <td align="center">{{ $item->email }}</td>
                        <td align="center">{{ $item->telepon }}</td>
                        <td align="center">{{ $item->produk }}</td>
                        <td align="center">{{ $item->deadline }}</td>
                   
                      </tr>
                     @endforeach
                    </tbody>
								</table>
							</div>
						</section><br><br>

            <h4 align="right"  style="margin-right: 18px;">Mengetahui,</h4>
            <h4 align="right">Admin Cyberlabs</h4><br><br>
            <h5 align="right" style="margin-right:35px;"><b><u>( Fito Satrio )</u></b></h5>

		<script>
			window.print();
		</script>
</body>
</html>