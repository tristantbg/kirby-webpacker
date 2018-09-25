</div>

</div>

</div>

</div>

<div id="outdated">
  <div class="inner">
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser.
  <br>Please <a href="http://outdatedbrowser.com" target="_blank">upgrade your browser</a> to improve your experience.</p>
  </div>
</div>

<?php if(c::get('environnement') != 'qa' && $site->googleanalytics()->isNotEmpty()): ?>
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

<?php if(c::get('environnement') == 'dev'): ?>
  <script src="http://localhost:8080/assets/bundle.js"></script>
<?php else: ?>
  <?= js('assets/build/bundle.js'); ?>
<?php endif ?>

</body>
</html>
