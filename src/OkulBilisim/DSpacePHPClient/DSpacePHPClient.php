<?php
namespace OkulBilisim\DSpacePHPClient {

    /**
     * Class DSpacePHPClient
     * @package OkulBilisim
     *
     */
    class DSpacePHPClient extends Client{
        /**
         * @param array $config configuration data
         * @return DSpacePHPClient
         */
        public static function factory($config = array()){
            $default = array(
                'scheme' => 'http',
                'expire' => 30
            );
            $required = array('base_url','username', 'password');
            $config = Collection::fromConfig($config, $default, $required);
            $client = new self($config->get('base_url'), $config);


            return $client;
        }
    }
}