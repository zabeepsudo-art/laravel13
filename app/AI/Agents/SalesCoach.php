<?php

namespace App\Ai\Agents;

use Illuminate\Support\Str;
use Laravel\Ai\Audio;
use Laravel\Ai\Image;
use Laravel\Ai\Text;

class SalesCoach
{
    public static function make()
    {
        return Text::make();
    }

    public static function prompt(string $text)
    {
        return self::make()->prompt($text);
    }

    public function createImage()
    {
        $image = Image::of('A donut sitting on the kitchen counter')->generate();

        $rawContent = (string) $image;

        return $rawContent;
    }

    public function createAudio()
    {
        $audio = Audio::of('I love coding with Laravel.')->generate();

        $rawContent = (string) $audio;

        return $rawContent;
    }
}
