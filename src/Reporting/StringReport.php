<?php

namespace App\Reporting;

use function implode;

class StringReport extends Report
{
    /**
     * Retourne une string contenant la date et le titre du rapport
     */
    public function getStringContents(): string
    {
        return "title:{$this->title};data:{$this->date};data:" . implode(",", $this->data);
    }
}