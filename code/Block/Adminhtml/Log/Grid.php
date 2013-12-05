<?php
/*
    Shopix_Externlog - Store and view external event results in Magento backend
    Copyright (C) 2013 Shopix Pty Ltd (http://www.shopix.com.au)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

class Shopix_Externlog_Block_Adminhtml_Log_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Constructor
     *
     * Set main configuration of grid
     */
    public function __construct()
    {  
        parent::__construct();
        $this->setId('shopixExternlogGrid');
        $this->setUseAjax(true);
        $this->setDefaultSort('created_at', 'desc');
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getResourceSingleton('shopix_externlog/log_collection');

        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('created_at', array(
            'header'    => Mage::helper('shopix_externlog')->__('Date Created'),
            'index'     => 'created_at',
            'type'      => 'datetime',
            'width'     => 200,
        ));

        $this->addColumn('result_code', array(
            'header'    => Mage::helper('shopix_externlog')->__('Result'),
            'index'     => 'result_code',
            'type'      => 'options',
            'options'   => array(
                0 => Mage::helper('shopix_externlog')->__('Success'),
                1 => Mage::helper('shopix_externlog')->__('Failure'),
            ),       
            'width'     => 200,
        ));

        $this->addColumn('message', array(
            'header'    => Mage::helper('shopix_externlog')->__('Message'),
            'index'     => 'message',
            'default'   =>    '----'
        ));

        return parent::_prepareColumns();
    }
}

