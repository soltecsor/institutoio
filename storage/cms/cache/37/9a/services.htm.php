<?php 
class Cms5d8621bd9f8da074840625_ecde91464b401bb67f50965b22470728Class extends Cms\Classes\PartialCode
{
public function onStart() {

    $this['service_1_items'] = explode(',',$this->theme->service_1_items);

    $this['service_2_items'] = explode(',',$this->theme->service_2_items);

    $this['service_3_items'] = explode(',',$this->theme->service_3_items);
}
}
