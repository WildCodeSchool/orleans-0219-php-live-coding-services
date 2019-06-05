<?php


namespace App\Service;


class BinaryService
{

    private $powService;

    public function __construct(PowService $powService)
    {
        $this->powService = $powService;
    }

    public function converterBinary(int $numbers): int
    {
        $total = 0;
        $numbersTab = str_split($numbers);
        $numbersTab = array_map('intval', array_reverse($numbersTab));
        foreach ($numbersTab as $key => $number) {
            $total += $number * $this->powService->pow($key);
        }
        return $total;
    }
}