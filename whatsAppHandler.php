<?php
	include('dbConnection.php');

	$whatsAppList = array(
		// Lulu
		0 => '5214492104138',
		// Claudia
		1 => '5214492255144',
		// Daniel
		2 => '5214491732054',
	);

	$counterQuery = "Select contacto_num from contadores where contacto_nombre = 'whatsApp'";
	$whatsAppCounter = mysqli_fetch_array(mysqli_query($connect, $counterQuery))[0];

	$whatsAppLink = $_POST['whatsAppCounterLink'];

	if (isset($whatsAppLink)) {    
		$newCounter = $whatsAppCounter + 1;
		
		$updateQuery = "Update contadores set contacto_num = $newCounter where contacto_nombre = 'whatsApp'";
		mysqli_query($connect, $updateQuery);

		echo "<meta http-equiv='refresh' content='0;URL=$whatsAppLink'/>";
	}
?>
<script>
const whatsAppList = {
	0: "<?php echo $whatsAppList[0]; ?>",
	1: "<?php echo $whatsAppList[1]; ?>",
	2: "<?php echo $whatsAppList[2]; ?>",
}

$(document).ready(() => {
	const device = "<?php echo str_replace(' ', '%20', $device); ?>"
	const phoneNumber = whatsAppList[<?php echo $whatsAppCounter ?> % 3]
	const whatsAppLink =
		`https://api.whatsapp.com/send?phone=${phoneNumber}&text=Hola,%20estoy%20visitando%20su%20página%20web%20y%20me%20interesaría%20recibir%20información%20sobre%20el%20equipo%20${device}`

	$("#whatsAppLink").val(whatsAppLink)
	$("#whatsAppCounterLink").val(whatsAppLink)
})
</script>