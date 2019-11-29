<?php

namespace App\Reporting\Format;

use function implode;
use App\Reporting\Report;
use App\Reporting\Format\SerializerInterface;
use App\Reporting\Format\DeserializerInterface;

class CsvFormatter implements SerializerInterface, DeserializerInterface
{
    /**
     * @see SerializerInterface
     */
    public function serialize(Report $report): string
    {
        $contents = $report->getContents();

        $data = implode(";", $contents['data']);

        unset($contents['data']);
        
        return implode(';', $contents) . ";" . $data;
    } 

    /**
     * @see DeserializerInterface
     */
    public function deserialize(string $str): Report
    {
        list($title, $date, $data1, $data2) = explode(";", $str);

        return new Report($date, $title, [$data1, $data2]);
    }
}