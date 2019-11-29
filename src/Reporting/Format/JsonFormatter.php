<?php

namespace App\Reporting\Format;

use App\Reporting\Report;
use function json_decode;
use function json_encode;
use App\Reporting\Format\SerializerInterface;
use App\Reporting\Format\DeserializerInterface;

class JsonFormatter implements SerializerInterface, DeserializerInterface
{
    /**
     * @see SerializerInterface
     */
    public function serialize(Report $report): string
    {
        return json_encode($report->getContents());
    }

    /**
     * @see DeserializerInterface
     */
    public function deserialize(string $str): Report
    {
        list($title, $date, $data) = json_decode($str);

        return new Report($date, $title, $data);
    }
}