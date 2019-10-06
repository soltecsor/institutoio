<?php 
class Cms5d99f3d13fdab802037498_4dd4993f2ece4aedc654d35335f4b3ccClass extends Cms\Classes\PartialCode
{
public function onStart() {

    $this['service_1_items'] = explode(',',$this->theme->service_1_items);

    $this['service_2_items'] = explode(',',$this->theme->service_2_items);

    $this['service_3_items'] = explode(',',$this->theme->service_3_items);
}
}
