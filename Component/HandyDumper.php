<?php

namespace fabienChn\HandyDumperBundle\Component;

/**
 * Class HandyDumperBundle
 * @package fabienChn\HandyDumperBundle\Component
 */
class HandyDumper
{
    /**
     * Die and dump data. VERY convenient for debugging
     */
    public static function dd()
    {
        $datas = func_get_args();

        foreach ($datas as $data) {
            try {
                dump($data);
            } catch (\Error $e) {
                echo $e->getMessage().PHP_EOL;

                echo 'An Error Occurred While Running dump(), so used var_dump instead';

                echo PHP_EOL.PHP_EOL;

                var_dump($data);
            }
        }

        die;
    }

    /**
     * Die and echo a string. VERY useful for debugging with symfony on the browser
     *
     * @param string $text
     */
    public static function ed(string $text)
    {
        echo $text;

        die;
    }
}
