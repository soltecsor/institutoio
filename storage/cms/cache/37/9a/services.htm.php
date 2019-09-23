<?php 
class Cms5d8920b5a2f95787140358_b9bdc0d4960f8948c4e359ccd746d03eClass extends Cms\Classes\PartialCode
{
public function onStart() {

    $this['service_1_items'] = explode(',',$this->theme->service_1_items);

    $this['service_2_items'] = explode(',',$this->theme->service_2_items);

    $this['service_3_items'] = explode(',',$this->theme->service_3_items);
}
}
