<?php

namespace App\Reporting\Format;

use App\Reporting\Report;
use App\Reporting\Format\SerializerInterface;

class HtmlFormatter implements SerializerInterface
{
    /**
     * @see SerializerInterface
     */
    public function serialize(Report $report): string
    {
        $contents = $report->getContents();

        $data = "";

        foreach ($contents['data'] as $value) {
            $data .= "<li>$value</li>";
        }

        return "
            <h2>{$contents['title']}</h2>
            <em>Date : {$contents['date']}</em>
            <h4>Données : </h4>
            <ul>
                $data
            </ul>
        ";
    }
}