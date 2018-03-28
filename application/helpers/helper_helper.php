<?php
    function get_terms() {
        $terms = array(
            '1' => 'เทอม 1',
            '2' => 'เทอม 2',
            '3' => 'ซัมเมอร์',
        );
    return $terms;
    }


    function get_bloods() {
        $bloods = array(
            ' ' => 'ไม่ระบุ',
            'A' => 'A',
            'B' => 'B',
            'O' => 'O',
            'AB' => 'AB',
            'RH+' => 'RH+',
            'RH-' => 'RH-'
        );
    return $bloods;
    }

    function get_status_creator() {
        $status_creator = array(
            'ไม่ระบุ' => 'ไม่ระบุ',
            'มีชีวิต' => 'มีชีวิต',
            'ถึงแก่กรรม' => 'ถึงแก่กรรม'
        );
    return $status_creator;
    }

    function get_status_parent() {
        $status_parent = array(
            'ไม่ระบุ' => 'ไม่ระบุ',
            'มีชีวิต' => 'มีชีวิต',
            'ถึงแก่กรรม' => 'ถึงแก่กรรม',
            'บิดา มารดา' => 'บิดา มารดา',
            'บิดา' => 'บิดา',
            'มารดา' => 'มารดา',
            'ญาติ' => 'ญาติ',
            'ผู้รับอุปการะ' => 'ผู้รับอุปการะ',
            'ตนเอง' => 'ตนเอง',
            'อื่นๆ' => 'อื่นๆ',
            'สามี' => 'สามี',
            'ภรรยา' => 'ภรรยา'
        );
    return $status_parent;
    }

?>
