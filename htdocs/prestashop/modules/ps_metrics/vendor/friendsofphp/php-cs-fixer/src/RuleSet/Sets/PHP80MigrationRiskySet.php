<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace ps_metrics_module_v4_0_6\PhpCsFixer\RuleSet\Sets;

use ps_metrics_module_v4_0_6\PhpCsFixer\RuleSet\AbstractMigrationSetDescription;
/**
 * @internal
 */
final class PHP80MigrationRiskySet extends AbstractMigrationSetDescription
{
    public function getRules() : array
    {
        return [
            '@PHP74Migration:risky' => \true,
            'modernize_strpos' => \true,
            'no_alias_functions' => ['sets' => ['@all']],
            'no_php4_constructor' => \true,
            'no_unneeded_final_method' => \true,
            // final private method (not constructor) are no longer allowed >= PHP8.0
            'no_unreachable_default_argument_value' => \true,
        ];
    }
}
