<?php

// Note: add prefix="og: http://ogp.me/ns#" to your <html> tag!
Html::macro('openGraph', function (array $data) {
    $html = '';
    foreach ($data as $property => $content) {
        $html .= '<meta property="og:'.$property.'" content="'.$content.'" />'."\n";
    }
    return $html;
});

Html::macro('twitterCard', function (array $data) {
    $html = '';
    foreach ($data as $name => $content) {
        $html .= '<meta name="twitter:'.$name.'" content="'.$content.'" />'."\n";
    }
    return $html;
});