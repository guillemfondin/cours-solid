<?php

namespace App\Reporting;

use App\Reporting\Format\SerializerInterface;

class ReportExtractor
{
    protected $formatters = [];

    public function addFormatter(SerializerInterface $formatter)
    {
        $this->formatters[] = $formatter;
    }

    /**
     * Doit afficher l'ensemble des formats possibles pour un rapport en se servant
     * des formatters ajoutés dans le tableau
     *
     * @param Report $report
     *
     * @return array
     */
    public function process(Report $report): array
    {
        $results = [];
        
        foreach ($this->formatters as $formatter) {
            $results[] = $formatter->serialize($report);
        }

        return $results;
    }
}
