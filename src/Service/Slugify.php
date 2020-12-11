<?php


namespace App\Service;



class Slugify
{
    public function generate(string $input): string
    {
        $slug = preg_replace('/[^A-Za-z0-9-]+/', "-", $input);

        return $slug;
    }
}