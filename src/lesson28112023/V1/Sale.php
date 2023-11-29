<?php
declare(strict_types=1);

namespace App\lesson28112023\V1;

class Sale
{
    public function __construct(
        private Manager $manager,
        private Customer $customer,
        private string $filename,
    ) {}

    public function readSale(): array
    {
        $content = \file_get_contents($this->filename);

        $saleData = "{$this->manager->getName()}|{$this->customer->getName()}";

        if (!\str_contains($content, $saleData)) {
            $pattern = '#([\d]+).+?$#';

            $number = (\preg_match($pattern, $content, $matches)) ? (int)$matches[1] + 1 : 1;

            $this->manager->setNumber($number);
            $this->customer->setNumber($number);

            $currentDate = date('d-m-Y H:i:s');
            $data = "{$number}|{$saleData}|{$currentDate}";

            $handle = \fopen($this->filename, 'a+');
            \fwrite($handle, $data . "\n");
            \fclose($handle);
        } else {
            echo 'Такая продажа уже была!';
            $pattern = "/([\d]+)\|" . \str_replace('|', '\|', $saleData) . "/i";

            \preg_match($pattern, $content, $matches);

            $number = (int)$matches[0];
            $this->manager->setNumber($number);
            $this->customer->setNumber($number);
        }

        return ['manager' => $this->manager, 'customer' => $this->customer];
    }

}
