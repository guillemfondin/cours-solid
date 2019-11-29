<?php

namespace App\Reporting\Format;

use App\Reporting\Report;
use App\Reporting\Format\HtmlFormatter;
use App\Reporting\Format\SerializerInterface;

class HtmlSpecialFormatter extends HtmlFormatter implements SerializerInterface
{

    /**
     * @see SerializerInterface
     */
    public function serialize(Report $report): string
    {
        $html = parent::serialize($report);

        return '
            <div stryle="font-weight: 600;">'. $html .'</div>
        ';
    }
}