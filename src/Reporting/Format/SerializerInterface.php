<?php

namespace App\Reporting\Format;

use App\Reporting\Report;

interface SerializerInterface
{
    /**
     * Format a report
     *
     * @param Report $report
     * @return string
     */
    public function serialize(Report $report): string;
}