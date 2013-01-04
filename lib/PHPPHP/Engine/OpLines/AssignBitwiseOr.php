<?php

namespace PHPPHP\Engine\OpLines;

class AssignBitwiseOr extends BinaryAssign {

    public function execute(\PHPPHP\Engine\ExecuteData $data) {
        $this->setValue($this->getValue() | $this->op2->getValue());
        $data->nextOp();
    }

}
