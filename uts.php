<!DOCTYPE html>
<html>
<body>

<h1>Tabel Si Bambang</h1>

	<?php
	$array = array(
		array("No"=>1, "Nama"=>"Christiano Messi", "Tinggi Badan"=>180, "Posisi"=>"Striker"),
		array("No"=>2, "Nama"=>"Bejo Leonardo", "Tinggi Badan"=>167, "Posisi"=>"Midfielder"),
		array("No"=>3, "Nama"=>"Alfa Midi", "Tinggi Badan"=>190, "Posisi"=>"Defender")
	);
	?>
	
	<?php if (count($array) > 0): ?>
	<table class="table table-bordered">
		<thead>
			<tr>
			<th><?php echo implode('</th><th>', array_keys(current($array))); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($array as $row): array_map('htmlentities', $row); ?>
			<tr>
			<td><?php echo implode('</td><td>', $row); ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>

</body>
</html>
