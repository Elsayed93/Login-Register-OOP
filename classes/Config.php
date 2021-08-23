<?php

class Config
{
    public static function get($requiredConfig = null)
    {
        if ($requiredConfig) {
            $config = $GLOBALS['config'];
            $data = explode('/', $requiredConfig);

            foreach ($data  as  $value) {
                if (isset($config[$value])) {
                    $config = $config[$value];
                } else {
                    return false;
                }
            }

            return $config;
        } else {
            return '<h3>get require a parameter</h3>';
        }
    }
}
