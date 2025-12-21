<?php

namespace app\utils;

use HTMLPurifier;
use HTMLPurifier_Config;

class HtmlFilter
{
    private static ?HTMLPurifier $purifierText = null;
    private static ?HTMLPurifier $purifierContent = null;

    /**
     * @param string $input
     * @return string
     */
    public static function text(string $input): string
    {
        if (!self::$purifierText) {
            $config = HTMLPurifier_Config::createDefault();
            $config->set('HTML.Allowed', '');
            self::$purifierText = new HTMLPurifier($config);
        }
        return self::$purifierText->purify($input);
    }

    /**
     * @param string $input
     * @return string
     */
    public static function content(string $input): string
    {
        if (!self::$purifierContent) {
            $config = HTMLPurifier_Config::createDefault();
            $config->set('HTML.Allowed',
                'p[style],a[href],img[src|alt|title|class|data-src],ul[class],ol,li,b,strong,em,span[style],div[class],h3[class]'
            );
            $config->set('AutoFormat.RemoveEmpty', true);
            $config->set('HTML.DefinitionID', 'custom-definitions');
            $config->set('HTML.DefinitionRev', 1);
            if ($def = $config->maybeGetRawHTMLDefinition()) {
                $def->addAttribute('img', 'data-src', 'Text');
            }
            self::$purifierContent = new HTMLPurifier($config);
        }
        return self::$purifierContent->purify($input);
    }

}
