<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use nkkollaw\Multitenancy\Validators\Subdomain;
use Spatie\Regex\Regex;

class OrganizationAlias implements Rule
{
    protected $message = 'The given alias is invalid.';

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(!Regex::match('/^[a-z](-?[a-z])*$/', $value)->hasMatch()){
            return false;
        }

        if (Subdomain::isReserved($value)) {
            $this->message = 'This alias has already been reserved.';
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}