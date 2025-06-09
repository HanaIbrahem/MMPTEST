<?php

namespace App;
use Illuminate\Support\Facades\App;

trait HasTranslations
{
    //
    public function getTranslatedAttribute(string $key): string
    {
        $locale = App::getLocale();
        $value = $this->{$key};

        return is_array($value) && isset($value[$locale])
            ? $value[$locale]
            : ($value['en'] ?? '');
    }
}
