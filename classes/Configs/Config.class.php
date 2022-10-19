<?php
    class Config {

        private array $arrConf;
        private string $pathToConfFile;

        public function __construct (string $pathToConfFile = 'core/config.ini') {

            $this->changeConfigFile($pathToConfFile);

            if(!parse_ini_file($this->pathToConfFile)) {
                throw new ConfigException('Сonfiguration file not found!');
            }
            $this->arrConf = parse_ini_file($this->pathToConfFile);
        }
        //получает свойство по имени
        public function getConfig (string $configName):string {
            if(!array_key_exists($configName, $this->arrConf)) {
                throw new ConfigException('Сonfig name *'.$configName.'* does not exist!');
            }
            return $this->arrConf[$configName];
        }
        //сменить путь к файлу конфигурации
        public function changeConfigFile (string $pathToConfFile):void {
            $this->pathToConfFile = $pathToConfFile;
        }
    }