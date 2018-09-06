</div>

</div>

</div>

<?php if($site->googleanalytics()->isNotEmpty()): ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $site->googleanalytics() ?>"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '<?= $site->googleanalytics() ?>');
	</script>
<?php endif ?>

<script>
	var $sitetitle = '<?= $site->title()->escape() ?>';
</script>

<?= js('assets/js/build/app.min.js'); ?>

</body>
</html>
