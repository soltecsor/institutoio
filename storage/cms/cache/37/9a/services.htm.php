<?php 
class Cms5d8d14d2db366180756300_89731079c10c3ff835a3edc790bad353Class extends Cms\Classes\PartialCode
{
public function onStart() {

    $this['service_1_items'] = explode(',',$this->theme->service_1_items);

    $this['service_2_items'] = explode(',',$this->theme->service_2_items);

    $this['service_3_items'] = explode(',',$this->theme->service_3_items);
}
}
