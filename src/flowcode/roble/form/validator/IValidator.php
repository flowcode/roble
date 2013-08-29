<?php

namespace flowcode\roble\form\validator;

/**
 *
 * @author juanma
 */
interface IValidator {

    public function isValid();

    public function validate($field);

    public function getMessage();
}

?>
