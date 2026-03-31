<?php
$form->clear();
$res['uri']='#';
?>
<div class="cmf-contents">
	<table class="cmf-table">
		<tbody>
<?php foreach($form->inputs as $name=>$input): ?>
			<tr class="<?=$input->required?'required':'optional'?>">
				<th><?=$input->label?></th>
				<td>
					<?=$form->input($name)?>
					<?php if(!empty($input->conf['caption'])): ?>
					<small class="cmf-caption"><?=$input->conf['caption']?></small>
					<?php endif; ?>
				</td>
			</tr>
<?php endforeach; ?>
			<tr class="required">
				<th>個人情報の取り扱い</th>
				<td>
					ここにサイトの個人情報の取り扱いや利用規約へのリンクを設置します。
					<?=$form->agreement('同意する')?>
					<small class="cmf-caption">
						このチェックボックスは必須入力と同様にチェックしていなければフォームの送信を行うことはできませんが、入力値としては扱われない特別なチェックボックスです。
					</small>
				</td>
			</tr>
		</tbody>
	</table>
	<ul class="cmf-buttons">
		<li class="cmf-buttons__item is-primary"><?=$form->button('確認','confirm','primary')?></li>
	</ul>
</div>