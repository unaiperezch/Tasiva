<?php
namespace App\Application\Email;

class EmailIdService {
    private int $count;

    public function __construct() {
        $this->count = file_get_contents(__DIR__ . "/EmailCounterLog.txt");
    }

    public function getEmailId() {
        $this->count++;

        file_put_contents(__DIR__ . "/EmailCounterLog.txt", $this->count);

        return $this->count;
    }
}