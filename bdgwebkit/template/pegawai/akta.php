<?php
require_once("dompdf/dompdf_config.inc.php");

use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

$dompdf = new DOMPDF();
$dompdf->set_paper("A4");
  
$html = <<<'ENDHTML'

<html>
<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<style type="text/css">
		body{
			padding: 110px 90px;
			width: 976px;
		}
		.text-underline {
			text-decoration: underline;
		}

		.h4 {
			font-size: 16px;
		}
		.h3{
			font-size: 20px;
		}
		#nik{
			padding: 5px 40px;
		}
		#no{
			margin-top: -20px;
		}
		hr{
			margin: 0px;
		}
		.title {
			margin-top: 150px;
			text-align: center;
		}
		#WN {
			padding: 0px 3px;
		}

		.content {
			margin-top: 100px;
		}

		.content-indonesian {
			font-size: 17px;
		}

		.content-english {
			font-size: 15px;
		}

		.footer {
			margin-top: 150px;
		}
	</style>
</head>
<body>
<div class ="header">
	<div class = "row">

		<div class = "col-md-4">
		<span class="text-underline h4">Nomor Induk Kependudukan</span> :</br>
		<em>Personnel Registration Number</em>
		</div>
		<div class = "col-md-4 col-md-pull-1" id="nik">
		<strong>123325576723676<strong>
		</div>

		<div class = "col-md-4" id="no">
		No. <span class="h3" >AL 60604365360435</span>
		</div>
	</div>
	
</div>

<div class ="title" >
	<div class = "row">
		<div class = "col-md-6 col-md-push-3">
			<span class="text-underline">
				<h4><strong>PENCATATAN SIPIL</strong></h4>
			</span>
			<h4><em>REGISTRY OFFICE</em></h4>


			<div class = "row">
				<div id="WN" class = "col-md-5 col-md-push-2" style="text-align: center">
					<h4>WARGA NEGARA
					<hr style= " border-top: solid black 1px;">
					<em>NATIONALITY</em></h4>
				</div>
				<div id="WN" class = "col-md-3 col-md-push-2" style="text-align: left">
					<h4><strong>INDONESIA</strong>
					<hr style= " border-top: dotted 1px;">
					<em>INDONESIAN</em></h4>
				</div>
			</div>
			<span class="text-underline">
				<h4><strong>KUTIPAN AKTA KELAHIRAN</strong></h4>
			</span>
			<h5><em>EXCERPT OF BIRTH CERTIFICATE</em></h5>
			
		</div>
	</div>
</div>

<div class = "content">
	<div class = "row">
		<div class = "col-md-5 content-indonesian" style="text-align: left">
			Berdasarkan Akta Kelahiran Nomor
			<hr style= " border-top: solid black 1px;">
			<em>By virtue of Birth Certificate Number</em>
		</div>
		<div class = "col-md-7 content-english" style="text-align: left">
			<strong>1702-LU-09022012-0014</strong>
			<hr style= " border-top: dotted 1px;">
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-5 content-indonesian" style="text-align: left">
			menurut stbld
			<hr style= " border-top: solid black 1px;">
			<em>in accordance with state gazette</em>
		</div>
		<div class = "col-md-7 content-english" style="text-align: left">
			<strong>-</strong>
			<hr style= " border-top: dotted 1px;">
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-2 content-indonesian" style="text-align: left">
			bahwa di
			<hr style= " border-top: solid black 1px;">
			<em>that in</em>
		</div>
		<div class = "col-md-4 content-english" style="text-align: left">
			<strong>REJANG REMBONG</strong>
			<hr style= " border-top: dotted 1px;">
		</div>
		<div class = "col-md-3 content-indonesian" style="text-align: left">
			pada tanggal
			<hr style= " border-top: solid black 1px;">
			<em>on date</em>
		</div>
		<div class = "col-md-3 content-english" style="text-align: left">
			<strong>DELAPAN</strong>
			<hr style= " border-top: dotted 1px;">
			<em>EIGHT</em>
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-2 content-indonesian" style="text-align: left">
			OKTOBER
			<hr style= " border-top: dotted black 1px;">
			<em>OCTOBER</em>
		</div>
		<div class = "col-md-2 content-english" style="text-align: left">
			<strong>TAHUN</strong>
			<hr style= " border-top: solid 1px;">
			<em>on date</em>
		</div>
		<div class = "col-md-6 content-indonesian" style="text-align: left">
			DUA RIBU SEBELAS
			<hr style= " border-top: dotted black 1px;">
			<em>TWO THOUSAND ELEVEN</em>
		</div>
		<div class = "col-md-2 content-english" style="text-align: left">
			<strong>telah lahir :</strong>
			<hr style= " border-top: solid 1px;">
			<em>was born</em>
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-12 h3" style="text-align: center">
			<strong>VIONA OCTRIANI</strong>
			<hr style= " border-top: dotted 1px;">
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-2 content-indonesian" style="text-align: left">
			anak ke
			<hr style= " border-top: solid black 1px;">
			<em>child no</em>
		</div>
		<div class = "col-md-10 content-english" style="text-align: left">
			<strong>SATU, PEREMPUAN DARI AYAH TRIONO SUGIANTO DAN IBU TARI PUJI ASTUTI</strong>
			<hr style= " border-top: dotted 1px;">
			<em>FIRST, FEMALE FROM FATHER TRIONO SUGIANTO AND MOTHER TARI PUJI ASTUTI</em>
		</div>
	</div>
</div>

<div class = "footer">
	<div class = "row">
		<div class = "col-md-4 col-md-push-4 content-indonesian" style="text-align: left">
			Kutipan ini dikeluarkan 
			<hr style= " border-top: solid black 1px;">
			<em>The excerpt is issued</em>
		</div>
		<div class = "col-md-4 col-md-push-4 content-english" style="text-align: left">
			<strong>DI KAB. REJANG LEBONG</strong>
			<hr style= " border-top: dotted 1px;">
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-3 col-md-push-4 content-indonesian" style="text-align: left">
			pada tanggal
			<hr style= " border-top: solid black 1px;">
			<em>on date</em>
		</div>
		<div class = "col-md-5 col-md-push-4 content-english" style="text-align: left">
			<strong>SEMBILAN FEBRUARI</strong>
			<hr style= " border-top: dotted 1px;">
			<em>NINE of FEBRUARY</em>
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-8 col-md-push-4 content-indonesian" style="text-align: left">
			<strong>TAHUN DUA RIBU DUA BELAS</strong>
			<hr style= " border-top: solid black 1px;">
			<em>ON YEAR TWO THOUSAND TWELVE</em>
		</div>
	</div>

	<div class = "row">
		<div class = "col-md-2 col-md-push-4 content-indonesian" style="text-align: left">
			Kepala 
			<hr style= " border-top: solid black 1px;">
			<em>Head of</em>
		</div>
		<div class = "col-md-6 col-md-push-4 content-english" style="text-align: left">
			<strong>DINAS KEPENDUDUKAN DAN</strong>
			<hr style= " border-top: dotted 1px;">
			<strong>CATATAN SIPIL</strong>
		</div>
	</div>

	<div class = "row">
		<br>
		<div class = "col-md-8 col-md-push-4 content-indonesian" style="text-align: left">
			<hr style= " border-top: dotted black 1px;">
		</div>
	</div>

	<div class = "row">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class = "col-md-8 col-md-push-4 content-indonesian" style="text-align: left">
			<strong>SANTOSO, SH, M.Si</strong>
			<hr style= " border-top: solid black 1px;">
			<strong>NIP 123456789765456789</strong>
		</div>
	</div>
</div>

</body>
</html>
ENDHTML;

$dompdf->load_html($html);
$dompdf->render();
  
$dompdf->stream("akta.pdf");
?>