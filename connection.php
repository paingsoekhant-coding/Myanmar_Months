<?php


class Festival
{
    public function connectJson()
    {

        $json_file = './json/MyanmarMonths.json';

        $json_data = file_get_contents($json_file);

        $data = json_decode($json_data, true);

        return $data;
    }

    public function month()
    {
        $data = $this->connectJson();
        $months = $data['Tbl_Months'];

        return $months;
    }

    public function getId()
    {
        $id = $_GET['id'];

        return $id;
    }
}

$festival = new Festival();
