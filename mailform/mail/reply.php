<?php
$isHTML=true;
$to="{$form->values['name']}<{$form->values['email']}>";
$subject="CatpowMailer HTML Mail Sample";
ob_start();
?>
<header>
	<img src="images/logo-catpow-mailer.png" alt="CatpowMailForm" class="logo"/>
</header>
<row>
	<mail-frame>
		<row>
			<mail-heading>INDEX</mail-heading>
			<mail-index>
				<item>HTMLメール対応</item>
				<item>PHPで機能拡張</item>
			</mail-index>
		</row>
	</mail-frame>
</row>
<row>
	<mail-section>
		<header>HTMLメール対応</header>
		<row>
			<mail-ordered>
				<item>
					<mail-heading>簡単テーブルレイアウト</mail-heading>
					<mail-text>
						CatpowMailerは面倒なHTMLメール用テーブルレイアウトのHTMLを効率化するためのコンポーネントを用意しています。<br/>
						CatpowMailerでコンポーネントを使ってHTMLメールをどのようにコーディングするかはこのメールのテンプレートをGitHubでチェックしてみてください。
						<a href="https://github.com/synchrovision/catpow-mailform/blob/master/mail/reply.php" class="link">GitHubでこのメールのテンプレートを見る</a>
					</mail-text>
				</item>
				<item>
					<mail-heading>CSSをインライン化</mail-heading>
					<mail-text>
						Gmailではcssのファイルを読み込んだり、styleタグでCSSを記述するといったことができません。<br/>
						CatpowMailerはHTMLメール送信時、各要素に適用されるCSSをstyle属性に転写してGmailに対応します。
					</mail-text>
				</item>
				<item>
					<mail-heading>URLを自動で置き換え</mail-heading>
					<mail-text>
						HTMLメールでは画像などはフルパスで記述しなければリンク切れしてしまいます。<br/>
						CatpowMailerはHTMLメール送信時、相対パスで書かれた画像のリンクURLは、フォームのURLを基準にフルパスのURLに置き換えられます。
					</mail-text>
				</item>
			</mail-ordered>
		</row>
	</mail-section>
</row>
<row class="has-bg-color-weak">
	<mail-section>
		<header>PHPで機能拡張</header>
		<row>
			<mail-ordered>
				<item>
					<mail-heading>オリジナルの入力タイプを作成</mail-heading>
					<mail-text>
						PHPでCatpow/inputsの名前空間にクラスを定義することで、設定のinputのtypeで使用できる入力タイプを追加することができます。
						<a href="https://github.com/synchrovision/catpow-mailer/blob/master/classes/input" class="link">GitHubで入力タイプのクラスを見る</a>
					</mail-text>
				</item>
				<item>
					<mail-heading>オリジナルの入力検証を追加</mail-heading>
					<mail-text>
						PHPでCatpow/validationの名前空間にクラスを定義することで、入力タイプのクラスおよび設定のinputのvalidationで使用できる検証処理を追加することができます。
						<a href="https://github.com/synchrovision/catpow-mailer/blob/master/classes/validation" class="link">GitHubで入力検証のクラスを見る</a>
					</mail-text>
				</item>
			</mail-ordered>
		</row>
	</mail-section>
</row>
<footer>
	Catpow MailForm
	<a href="https://github.com/synchrovision/catpow-mailform" class="link">View on Git Hub</a>
</footer>
<mail-alt>
	HTMLを受け取れないユーザーのためにプレーンテキストによる代替メッセージも用意することができます。
</mail-alt>