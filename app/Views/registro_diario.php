<?= $this->extend('app') ?>

<?= $this->section('content') ?>

<?php
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$date = $meses[date('n') - 1] . " (" . $calendario[1]["anno"] . ")";
	$horas = array('00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45','02:00', '02:15', '02:30', '02:45','03:00', '03:15', '03:30', '03:45','04:00', '04:15', '04:30', '04:45',
			'05:00', '05:15', '05:30', '05:45','06:00', '06:15', '06:30', '06:45','07:00', '07:15', '07:30', '07:45','08:00', '08:15', '08:30', '08:45','09:00', '09:15', '09:30', '09:45',
			'10:00', '10:15', '10:30', '10:45','11:00', '11:15', '11:30', '11:45','12:00', '12:15', '12:30', '12:45','13:00', '13:15', '13:30', '13:45','14:00', '14:15', '14:30', '14:45',
			'15:00', '15:15', '15:30', '15:45','16:00', '16:15', '16:30', '16:45','17:00', '17:15', '17:30', '17:45','18:00', '18:15', '18:30', '18:45','19:00', '19:15', '19:30', '19:45',
			'20:00', '20:15', '20:30', '20:45','21:00', '21:15', '21:30', '21:45','22:00', '22:15', '22:30', '22:45','23:00', '23:15', '23:30', '23:45');
?>

<div class="contenido">
	<div class="menu_izquierda">
		<h1>Esto es el menú de la izquierda de Registro Diario.</h1>
	</div>
	<div class="contenido_derecha">
		<div class="titulo">
			<h1><?php echo $date ?></h1>
		</div>
		<div class="registros">
				<?php $nSemana = 2;
				for ($i = 1; $i <= intval(count($calendario)); $i++) { ?>
					<?php if ($nSemana % 2 == 0) { ?>
						<h2>Semana nº<?php echo $nSemana / 2 ?>:</h2>
						<div class="registros_semana">	
					<?php $nSemana += 1; } ?>
							<div class="registro_s">
								<h3 class="registro_elemento">Día: <?php echo $i ?></h3>
								<p class="registro_elemento"> (0,0h) </p>
								<div class="registro_horario">
									<p class="registro_elemento">Desde:</p>
									<select class="registro_elemento">
										<?php for ($j = 0; $j < count($horas); $j++) { ?>
											<option><?php echo $horas[$j] ?></option>
										<?php } ?>
									</select>
									<p class="registro_elemento">Hasta:</p>
									<select class="registro_elemento">
										<?php for ($k = 0; $k < count($horas); $k++) { ?>
											<option><?php echo $horas[$k] ?></option>
										<?php } ?>
									</select>
									<button> + </button>
								</div>
							</div>
					<?php if (intval($calendario[$i - 1]["pos_dia"])%7 == 0) {?>
						</div>
					<?php $nSemana += 1; } 
				} ?>
				
		</div>
		
	</div>
</div>
<?= $this->endSection() ?>
