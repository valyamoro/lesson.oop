<?php
declare(strict_types=1);

namespace App\lesson27112023\V2;

class Person
{
    private int $number;
    public string $name;

    public string $surname;
    public string $patronymic;

    public string $filename;

    public function __construct($name, $surname, $patronymic, $filename) {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->filename = $filename;

        $content = file_get_contents($filename);

        if(!str_contains($content, "{$this->name}|{$this->surname}|{$this->patronymic}")) {
            $pattern = '#([\d]+).+?$#';

            if (\preg_match($pattern, $content, $matches)) {
                $this->number = (int)$matches[1] + 1;
            } else {
                $this->number = 1;
            }

            $handle = \fopen($this->filename, 'a+');

            if (!$handle) {
                throw new \Exception('Невозможно открыть файл');
            }

            $string = "{$this->number}|{$this->name}|{$this->surname}|{$this->patronymic}\n";
            \fwrite($handle, $string);
            \fclose($handle);
        } else {
            $pattern = "/([\d]+)\|{$this->surname}\|{$this->name}\|{$this->patronymic}/i";

            if (preg_match($pattern, $content, $matches)) {
                $this->number = (int)$matches[1];
            }
        }

    }

    public function getNumbers(): int
    {
        return $this->number;
    }

}
