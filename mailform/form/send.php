<?php
$form->send('apply');
$form->send('reply');
$form->put_log();
$form->clear_all();
$res['uri']='thanks.html';
?>
<div class="cmf-contents">
	<h3 class="cmf-heading">
		お問い合せ
		ありがとうございます
	</h3>
	<p class="cmf-text is-center">
		お問い合せいただき誠にありがとうございます。<br>
		お問い合せ内容を確認させて頂き、後日ご連絡を差し上げますので、<br>
		今しばらくお待ちくださいますよう、よろしくお願い申し上げます。
	</p>
	<ul class="cmf-buttons">
		<li class="cmf-buttons__item is-secondary"><?=$form->button('戻る','init')?></li>
	</ul>
</div>