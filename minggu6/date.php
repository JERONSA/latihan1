<?php 
// date untuk menampilkan tanggal dengan format tertentu
	/*echo date("l");
	echo date ("d");
	echo date("M");
	echo date("m");
	echo date("Y");	*/
	/*echo date (
		"l, d-M-Y",
		time() -
		60 * 60 * 24 * 500
	);	
	//dengan format tersebut kita dapat mengetahui 100 hari yang akan datang jatuh pada hari apa??*/
	echo date("l", mktime());
 ?>