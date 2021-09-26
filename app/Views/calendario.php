<?= $this->extend('app') ?>

<?= $this->section('content') ?>
<br><br>

<?php
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$date = $meses[date('n') - 1] . " (" . $calendario[1]["anno"] . ")";
?>

<div class="contenido">
	<div class="menu_izquierda">
		<h1>Esto es el menú de la izquierda de Calendario.</h1>
	</div>
	<div class="contenido_derecha">
		<div class="titulo">
			<h1><?php echo $calendario[1]["anno"] ?></h1>
		</div>
		<div class="calendario">
			<?php for($i = 1; $i <= count($calendario); $i++) { 
				if ($calendario[$i- 1]['dia'] == 1) { ?>
					<div class="mes">
						<h1><?php echo $meses[$calendario[$i]['mes']-1] ?></h1>
						<div class="dias">
							<div class="semana sPrimera">
				<?php } if (intval($calendario[$i-1]['pos_dia']) % 7 == 1 && intval($calendario[$i-1]['dia']) != 1) { ?>
							<div class="semana">
						<?php }?>
								<button class="dia
									<?php if (intval($calendario[$i]['pos_dia']) % 7 == 0 || intval($calendario[$i-1]['pos_dia']) % 7 == 0) { ?> 
										finSemana
									<?php } for ($j = 1; $j < count($calendarioNoLaboral); $j++) {
										if (($calendarioNoLaboral[$j]['mes'] == $calendario[$i]['mes']) && ($calendarioNoLaboral[$j]['dia'] == $calendario[$i-1]['dia'])) {?>
											fiesta
										<?php } 
									} ?>
								"> <?php echo $calendario[$i-1]['dia'] ?></button>
						<?php if (intval($calendario[$i-1]['pos_dia']) % 7 == 0 || $calendario[$i]['dia'] == 1) { ?>
							</div>
						<?php }?>
				<?php if ($calendario[$i]['dia'] == 1) { ?>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>
<?= $this->endSection() ?>
