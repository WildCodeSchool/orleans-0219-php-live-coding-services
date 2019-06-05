<?php


namespace App\Service;


class PowService
{
    public function pow(int $numbers): int
    {
        if ($numbers == 0) {
            return 1;
        }

        return 2 * $this->pow(--$numbers);
        // / ! \ return 2 * $this->pow($numbers--);
    }
}