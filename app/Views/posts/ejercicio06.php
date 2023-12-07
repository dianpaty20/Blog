<table border="1">
	<tr>
		<td>Total de autores</td>
		<td>Total de Categorías</td>
	</tr>
	<tr>
		<td>
			<?php foreach($postsPorCategoria as $ppc): ?>
				<?= $ppc['ppc'] ?>
			<?php endforeach; ?>
		</td>

		<td>
			<?php foreach($postsPorAutor as $ppa): ?>
				<?= $ppa['ppa'] ?>
			<?php endforeach; ?>
		</td>
	</tr>
</table>