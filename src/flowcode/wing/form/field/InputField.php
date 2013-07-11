<?php

use flowcode\wing\form\field\BaseField;

namespace flowcode\wing\form\field;

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
