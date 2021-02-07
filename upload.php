<?php

header("refresh:1;url= thanks1.php");


?>
<?php include "config.php"; ?>

	<?php

		$file = $_FILES["dosya"]["tmp_name"];
		$file_name = $_FILES["dosya"]["name"];
		$file_type = $_FILES["dosya"]["type"];
		$file_type_2 = explode("/",$file_type);
		$control = substr($file_type, 0,5);

		if ($control=="image") {
		    $file_upload_name = md5(date('d.m.Y H:i:s')).".".$file_type_2[1];
			$upload = move_uploaded_file($file, "uploads"."/".$file_upload_name);
			$file_link = $site_url."uploads/".$file_upload_name;

		} else {
		
		}
	?>
	</div>
</body>
</html>