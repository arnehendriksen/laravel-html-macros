<?php

Html::macro('googleAnalytics', function ($trackingId) {
    return <<<EOT
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={$trackingId}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{$trackingId}');
</script>
EOT;
});

Html::macro('webFontLoader', function ($families) {
    return <<<EOT
<script type="text/javascript">
    WebFontConfig = {
        google: { families: [ {$families} ] }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
EOT;
});
