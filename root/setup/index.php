<?php
$pageid = "setup";
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/header.php'); ?>

<article class="p-setup">

<section class="p-setup1">

	<h1><i class="fas fa-desktop"></i>[1] Set up on your PC</h1>

	<h2>Git</h2>
	<textarea>https://reach.backlog.jp/git/LABO_TASK/snippet.git</textarea>

	<h2>Local path</h2>
	<textarea>C:\xampp\htdocs\vhosts\develop\snippet</textarea>

	<h2>hosts</h2>
	<p>C:\Windows\System32\drivers\etc\hosts</p>
	<textarea>snippet.cd</textarea>


	<h2>Vhosts</h2>
	<p>C:\xampp\apache\conf\extra\httpd-vhosts.conf</p>
<textarea style="height: 7.5em;">
<VirtualHost *:80>
DocumentRoot "C:\xampp\htdocs\vhosts\develop\snippet\root"
ServerName snippet.cd
</VirtualHost>
	</textarea>

	<h2>DB</h2>
	<p><a href="http://localhost/phpmyadmin" target="_blank">phpmyadmin</a></p>
	<p>Create a database named [ snippet ]</p>

</section>

<section class="p-setup2">

	<h1><i class="fas fa-database"></i>[2] Update the DB</h1>


	<p>↓↓↓ Let's update the DB using this [ DB tool ] ↓↓↓<br>
	<a href="http://snippet.cd/000_db/" target="_blank">http://snippet.cd/000_db/</a></p>

	<img src="http://flocssbem.test20008.com/sheet/db/6.png">

	<p><a href="http://snippet.cd/000_db/?t=m" target="_blank">How to use DB tool ???</a></p>


</section>



<section class="p-setup3">

	<h1><i class="far fa-smile"></i>[3] How to use Snippet.cd</h1>

	<p>For example, this page <a href="http://snippet.cd/icon/">http://snippet.cd/icon/</a>

	<p>Open these files.</p>
	<img src="image/001.png">

	<p>Use these codes for your project.</p>
	<img src="image/002.png">


</section>

<section class="p-setup3">

	<h1><i class="fab fa-wordpress"></i>[4] WP User & Pass</h1>

	<p>Here<br>
	C:\xampp\htdocs\vhosts\develop\snippet\dev\db\wp_id_pass.txt</p>


</section>





</article>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/assets/include/footer.php'); ?>