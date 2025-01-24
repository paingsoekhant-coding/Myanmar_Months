<?php
class JsonConnector
{
    public function getJsonData($filePath)
    {
        $json_data = file_get_contents($filePath);
        return json_decode($json_data, true);
    }
}

class Festival
{
    private $jsonConnector;
    private $jsonFilePath = './json/MyanmarMonths.json';

    public function __construct($jsonConnector)
    {
        $this->jsonConnector = $jsonConnector;
    }

    public function getMonths()
    {
        $data = $this->jsonConnector->getJsonData($this->jsonFilePath);
        return $data['Tbl_Months'];
    }
}

$jsonConnector = new JsonConnector();
$festival = new Festival($jsonConnector);
