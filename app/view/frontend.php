<?php

namespace View;

class Frontend extends Base {

    public function render() {
        /** @var \Base $f3 */
        $f3 = \Base::instance();
        if($this->data)
            $f3->mset($this->data);
        echo \Template::instance()->render('templates/layout.html');
    }

}