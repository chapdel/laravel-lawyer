<?php

declare(strict_types=1);

namespace Lawyer\Rules;

use Lawyer\Types\Rule;

class EvenNumber extends Rule
{

    /**
     * Determine if the validation rule passes.
     *
     **/
    public function passes($attribute, $value): bool
    {
        return intval($value) % 2 === 0;
    }



    /**
     * Get the validation error message.
     *
     **/
    public function message(): string
    {
        return $this->getLocalizedErrorMessage(
            'even_number',
            'The :attribute must be an even number'
        );
    }
}
