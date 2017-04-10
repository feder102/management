<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="<?php echo $pluralVar; ?> view">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1><?php echo "<?php echo __('{$singularHumanName}'); ?>"; ?></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="actions">
                <div class="panel panel-default">
                    <div class="panel-heading">Acciones</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <?php
                                echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-edit\"></span>&nbsp&nbsp;Editar " . $singularHumanName ."'), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false)); ?> </li>\n";
                                echo "\t\t<li><?php echo \$this->Form->postLink(__('<span class=\"glyphicon glyphicon-remove\"></span>&nbsp;&nbsp;Eliminar " . $singularHumanName . "'), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('escape' => false), __('Está seguro que quiere eliminar # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?> </li>\n";
                                echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-list\"></span>&nbsp&nbsp;Listar " . $pluralHumanName . "'), array('action' => 'index'), array('escape' => false)); ?> </li>\n";
                                echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp&nbsp;Nuevo " . $singularHumanName . "'), array('action' => 'add'), array('escape' => false)); ?> </li>\n";
                                $done = array();
                                foreach ($associations as $type => $data) {
                                    foreach ($data as $alias => $details) {
                                        if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                                            echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-list\"></span>&nbsp&nbsp;Listar " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('escape' => false)); ?> </li>\n";
                                            echo "\t\t<li><?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp&nbsp;Nuevo " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape' => false)); ?> </li>\n";
                                            $done[] = $details['controller'];
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </div><!-- end body -->
                </div><!-- end panel -->
            </div><!-- end actions -->
        </div><!-- end col md 3 -->

        <div class="col-md-9">
            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                    <tbody>
                        <?php
                            foreach ($fields as $field) {
                                echo "<tr>\n";
                                $isKey = false;
                                if (!empty($associations['belongsTo'])) {
                                    foreach ($associations['belongsTo'] as $alias => $details) {
                                        if ($field === $details['foreignKey']) {
                                            $isKey = true;
                                            echo "\t\t<th><?php echo __('" . Inflector::humanize(Inflector::underscore($alias)) . "'); ?></th>\n";
                                            echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
                                            break;
                                        }
                                    }
                                }
                                if ($isKey !== true) {
                                    echo "\t\t<th><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
                                    echo "\t\t<td>\n\t\t\t<?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>\n\t\t\t&nbsp;\n\t\t</td>\n";
                                }
                                echo "</tr>\n";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div><!-- end col md 9 -->
    </div>
</div>

<?php
    if (!empty($associations['hasOne'])) :
	   foreach ($associations['hasOne'] as $alias => $details):
?>
    <div class="row related">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><?php echo "<?php echo __('" . Inflector::humanize($details['controller']) . " Relacionados'); ?>"; ?></h3></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
                                <tr>
                                    <?php
                                    foreach ($details['fields'] as $field) {
                                        echo "\t\t<th style=\"text-align: center\" nowrap><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
                                        echo "\t\t<td style=\"text-align: center\" nowrap>\n\t<?php echo \${$singularVar}['{$alias}']['{$field}']; ?>\n&nbsp;</td>\n";
                                    }
                                    ?>
                                </tr>
                                <?php echo "<?php endif; ?>\n"; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="actions">
                        <?php echo "<?php echo \$this->Html->link(__('Editar " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$singularVar}['{$alias}']['{$details['primaryKey']}']), array('escape' => false, 'class' => 'btn btn-default')); ?>\n"; ?>
                    </div>
                </div>
            </div>
        </div><!-- end col md 12 -->
    </div>
<?php
    endforeach;
    endif;
    if (empty($associations['hasMany'])) {
	   $associations['hasMany'] = array();
    }
    if (empty($associations['hasAndBelongsToMany'])) {
        $associations['hasAndBelongsToMany'] = array();
    }
    $relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);
    foreach ($relations as $alias => $details):
        $otherSingularVar = Inflector::variable($alias);
    $otherPluralHumanName = Inflector::humanize($details['controller']);
?>
<div class="related row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><h3><?php echo "<?php echo __('" . $otherPluralHumanName . " Relacionados'); ?>"; ?></h3></div>
                <div class="panel-body">
                    <?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
                    <div class="table-responsive">
                        <table cellpadding = "0" cellspacing = "0" class="table table-striped">
                            <thead>
                                <tr>
                                    <?php
                                        foreach ($details['fields'] as $field) {
                                            echo "\t\t<th style=\"text-align: center\" nowrap><?php echo __('" . Inflector::humanize($field) . "'); ?></th>\n";
                                        }
                                    ?>
                                    <th style="text-align: center" nowrapclass="actions">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    echo "\t<?php foreach (\${$singularVar}['{$alias}'] as \${$otherSingularVar}): ?>\n";
                                    echo "\t\t<tr>\n";
                                    foreach ($details['fields'] as $field) {
                                        echo "\t\t\t<td style=\"text-align: center\" nowrap><?php echo \${$otherSingularVar}['{$field}']; ?></td>\n";
                                    }
                                        echo "\t\t\t<td style=\"text-align: center\" nowrap class=\"actions\">\n";
                                    echo "\t\t\t\t<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-search\"></span>'), array('controller' => '{$details['controller']}', 'action' => 'view', \${$otherSingularVar}['{$details['primaryKey']}']), array('title' => 'Ver', 'escape' => false)); ?>\n";
                                    echo "\t\t\t\t<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-edit\"></span>'), array('controller' => '{$details['controller']}', 'action' => 'edit', \${$otherSingularVar}['{$details['primaryKey']}']), array('title' => 'Editar', 'escape' => false)); ?>\n";
                                    echo "\t\t\t\t<?php echo \$this->Form->postLink(__('<span class=\"glyphicon glyphicon-remove\"></span>'), array('controller' => '{$details['controller']}', 'action' => 'delete', \${$otherSingularVar}['{$details['primaryKey']}']), array('title' => 'Eliminar', 'escape' => false), __('Está seguro que quiere eliminar # %s?', \${$otherSingularVar}['{$details['primaryKey']}'])); ?>\n";
                                    echo "\t\t\t</td>\n";
                                    echo "\t\t</tr>\n";
                                    echo "\t<?php endforeach; ?>\n";
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo "<?php endif; ?>\n\n"; ?>
                </div>
                <div class="panel-footer">
                    <div class="actions">
                        <?php echo "<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-plus\"></span>&nbsp;&nbsp;Nuevo " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?>"; ?> 
                    </div>
                </div>
        </div>
    </div><!-- end col md 12 -->
</div>
<?php endforeach; ?>
