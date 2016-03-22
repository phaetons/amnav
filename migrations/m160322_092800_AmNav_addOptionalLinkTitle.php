<?php
namespace Craft;

class m160322_092800_AmNav_addOptionalLinkTitle extends BaseMigration
{
    public function safeUp()
    {
        // Add column
        $this->addColumnAfter('amnav_nodes', 'linkTitle', array(ColumnType::Varchar, 'default' => null), 'listClass');
    }
}