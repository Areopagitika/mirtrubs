<?php

namespace Local;
use Bitrix\Main\Loader; 
use Bitrix\Main\Entity;
Loader::includeModule("highloadblock");

class City
{
    private static $HL_ID = 1;

    private static function getEntityHL()
    {
        $hldata = \Bitrix\Highloadblock\HighloadBlockTable::getById(self::$HL_ID)->fetch();
		$hlentity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
		$output = new Entity\Query($hlentity);
		return $output;
    }

    private function getHostKey()
    {
        $host = $_SERVER["HTTP_HOST"];
        $arrHost = explode('.', $host);
        $key = array_shift($arrHost);

        $arrCols = array_column(self::getList(), "UF_KEY");

        if(in_array($key, $arrCols)) {
            $output = $key;
        } else {
            $output = 'kzn';
        }

        return $output;
    }

    public static function getItem()
	{
        $key = self::getHostKey();
        $query = self::getEntityHL();
		$query->setSelect(array("UF_KEY", "UF_NAME", "UF_WHERE", "UF_REGION", "UF_ADDRESS"));
        $query->setFilter(array("UF_KEY" => $key));
        $result = $query->exec();
		$output = $result->fetch();
		return $output;
    }
    
    public function getList() 
    {
        $query = self::getEntityHL();
		$query->setSelect(array("UF_KEY", "UF_NAME", "UF_WHERE", "UF_REGION", "UF_ADDRESS"));
        $query->setFilter(array("UF_ACTIVITY" => 1));
        $result = $query->exec();
		$output = $result->fetchAll();
        return $output;
    }
}