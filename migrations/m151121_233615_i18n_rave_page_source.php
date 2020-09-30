<?php

use ravesoft\db\SourceMessagesMigration;

class m151121_233615_i18n_rave_page_source extends SourceMessagesMigration
{

    public function getCategory()
    {
        return 'rave/page';
    }

    public function getMessages()
    {
        return [
            'Page' => 1,
            'Pages' => 1,
            'Create Page' => 1,
        ];
    }
}