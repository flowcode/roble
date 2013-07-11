<?php

namespace flowcode\wing\form\field;

/**
 * Description of SelectField
 *
 * @author juanma
 */
class TextField extends BaseField {

    public function __toString() {
        $html = "<textarea ";
        $html .= "name='" . $this->name . "' ";
        foreach ($this->attributes as $key => $value) {
            $html .= "$key='$value' ";
        }
        $html .= "/>";
        $html .= $this->value;
        $html .= "</textarea>";

        return $html;
    }

}

?>
