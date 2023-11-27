<?php
declare(strict_types=1);

namespace App\lesson27112023\V3;

class CreatePerson
{
    private int $number;
    private string $string;

    public function __construct(
        string $name,
        string $surname,
        string $patronymic,
        string $filename,
    )
    {
        $content = \file_get_contents($filename);

        if (!\str_contains($content, "{$name}|{$surname}|{$patronymic}")) {
            $pattern = '#([\d]+).+?$#';

            $this->number = (\preg_match($pattern, $content, $matches)) ? (int)$matches[1] + 1 : 1;
            $this->string = "{$this->getNumber()}|{$name}|{$surname}|{$patronymic}\n";

            $handle = \fopen($filename, 'a+');
            \fwrite($handle, $this->getString());
            \fclose($handle);
        } else {
            $pattern = "/([\d]+)\|{$name}\|{$surname}\|{$patronymic}/i";

            \preg_match($pattern, $content, $matches);

            $this->number = (int)$matches[1];
            $this->string = "{$this->getNumber()}|{$name}|{$surname}|{$patronymic}\n";
        }
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

}
