<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

interface DeserializerInterface
{
    /**
     * Deserialize a report
     *
     * @param string $str
     * @return Report
     */
    public function deserialize(string $str): Report;
}