<?php
	global $mainProjects, $subProjects;
?>
<!DOCTYPE HTML>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title> - WeVocal Series - | ウェブ音声エディタ </title>
	</head>
	<body>
		<h1> - WeVocal Series - </h1>
		やぁやぁ(´・ω・`)<br /><br />
		(・∀・) &gt; もちろんキミたちもブラウザ上で音声ファイルをいじりたいやんな？<br />
		&nbsp;&nbsp;&nbsp;(・∀・) &gt; うちがその夢かなえたるでぇ！ぜひ使ってや～！
		
		<h3>おしらせ</h3>
<pre>
<?php 
foreach (NOTICE as $date => $msg) 
	echo $date . " - " . $msg . "\n";
?></pre>

<?php   foreach ($mainProjects as $id => $info) { ?>
		<h2 id="<?= $id ?>">『<?= $info['title'] ?>』 <?= $info['icon'] ? '<img width="18" src="' . $info['icon'] . '" />' : '' ?></h2>
		<?= $info['description'] ?><br />
		◯ <a href="<?= $info['url'] ?>" target="_blank">アプリを開く</a><?php
		if ($info['wiki']) { 
		?> | <a href="<?= $info['wiki'] ?>" target="_blank">ウィキ</a><?php
		} else { 
			?> | ウィキ (工事中) <?php 
		} ?>
<?php if ($info['image']) { ?>

		<br />
		<img width="400" src="<?= $info['image'] ?>" />
<?php } ?>

<?php } ?>
		<details>
			<summary>その他ツールなど</summary>

<?php foreach ($subProjects as $id => $info) { ?>
			<h2 id="<?= $id ?>">『<?= $info['title'] ?>』 <?= $info['icon'] ? '<img width="18" src="' . $info['icon'] . '" />' : '' ?></h2>
			<?= $info['description'] ?><br />
			◯ <a href="<?= $info['url'] ?>" target="_blank">アプリを開く</a><?php
			if ($info['wiki']) {
			?> | <a href="<?= $info['wiki'] ?>" target="_blank">ウィキ</a><?php
			} else { 
				?> | ウィキ (工事中) <?php 
			} ?>
<?php if ($info['image']) { ?>
			<br />
			<img width="400" src="<?= $info['image'] ?>" />
<?php } ?>

<?php } ?>
		</details>
		
		<br /><br />
		<hr />
		調理人: <a href="https://www.pitan76.net/" target="_blank">管理者のお部屋</a> (PITAN76.NET) - 2026

	</body>
</html>
