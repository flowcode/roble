<?php

use flowcode\roble\form\field\BaseField;

namespace flowcode\roble\form\field;

/**
 * Description of SelectField
 *
 * @author juanma
 */
class InputField extends BaseField {

    public function __toString() {
        $html = "<input ";
        $html .= "name='" . $this->name . "' ";
        foreach ($this->attributes as $key => $value) {
            $html .= "$key='$value' ";
        }


        $html .= "value='" . $this->value . "'";

        $html .= "/>";

        return $html;
    }

}

?>
