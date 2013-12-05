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

class Shopix_Externlog_Model_Log extends Mage_Core_Model_Abstract
{
    /**
     * Init Resource Model
     *
     */
    protected function _construct()
    {  
        $this->_init('shopix_externlog/log');
    }
}

