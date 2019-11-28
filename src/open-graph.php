<?php

Html::macro('ogBasic', function (array $data) {
    $html = '';
    foreach ($data as $property => $content) {
        $html .= '<meta property="og:'.$property.'" content="'.$content.'" />'."\n";
    }
    return $html;
});
