[?php

/**
 * <?php echo $this->table->getOption('name') ?> filter form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 15966 2015-04-08 08:45:44Z wimulkeman $
 */
class <?php echo $this->table->getOption('name') ?>FormFilter extends Base<?php echo $this->table->getOption('name') ?>FormFilter
{
<?php if ($parent = $this->getParentModel()): ?>
  /**
   * @see <?php echo $parent ?>FormFilter
   */
  public function configure()
  {
    parent::configure();
  }
<?php else: ?>
  public function configure()
  {
  }
<?php endif; ?>
}
