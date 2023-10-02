<?php 

namespace App\Service;

use Symfony\Component\String\Slugger\AsciiSlugger;

class Slugify
{
    public function slugify(string $string): string
    {
        $slugger = new AsciiSlugger();
        return $slugger->slug($string)->lower();
    }
}
