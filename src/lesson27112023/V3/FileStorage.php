<?php

namespace App\lesson27112023\V3;

class FileStorage
{
    private Person $person;
    private string $filename;

    public function __construct(
        Person $person,
        string $filename,
    ) {
        $this->person = $person;
        $this->filename = $filename;
    }

    public function readPerson(): Person
    {
        $content = \file_get_contents($this->filename);
        $personData = "{$this->person->getName()}|{$this->person->getSurname()}|{$this->person->getPatronymic()}";

        if (!\str_contains($content, $personData)) {
            $pattern = '#([\d]+).+?$#';

            $number = (\preg_match($pattern, $content, $matches)) ? (int)$matches[1] + 1 : 1;

            $handle = \fopen($this->filename, 'a+');
            $data = "{$number}|" . $personData;

            \fwrite($handle, $data);
            \fclose($handle);
        } else {
            $pattern = "/([\d]+)\|" . \str_replace('|', '\|', $personData) . "/i";

            \preg_match($pattern, $content, $matches);

            $number = (int)$matches[1];
        }

        $this->person->setNumber($number);

        return $this->person;
    }

}
