<?php
$form->receive();
$form->clear();
$res['uri']='./confirm.html';
?>
<div class="cmf-contents">
	<table class="cmf-table">
		<tbody>
<?php foreach($form->inputs as $name=>$input): ?>
			<tr class="<?=$input->required?'required':'optional'?>">
				<th><?=$input->label?></th>
				<td><?=$form->output($name)?></td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
	<ul class="cmf-buttons">
		<li class="cmf-buttons__item is-secondary"><?=$form->button('戻る','init')?></li>
		<li class="cmf-buttons__item is-primary"><?=$form->button('送信','send','primary')?></li>
	</ul>
</div>