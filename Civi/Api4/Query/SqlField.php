<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

namespace Civi\Api4\Query;

/**
 * Sql column expression
 */
class SqlField extends SqlExpression {

  protected function initialize() {
    $this->fields[] = $this->expr;
  }

  public function render(array $fieldList): string {
    if (empty($fieldList[$this->expr])) {
      throw new \API_Exception("Invalid field '{$this->expr}'");
    }
    return $fieldList[$this->expr]['sql_name'];
  }

}
