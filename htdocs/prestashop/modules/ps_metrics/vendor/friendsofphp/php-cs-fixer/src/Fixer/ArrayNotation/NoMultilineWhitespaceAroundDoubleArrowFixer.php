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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\ArrayNotation;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Carlos Cirello <carlos.cirello.nl@gmail.com>
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class NoMultilineWhitespaceAroundDoubleArrowFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Operator `=>` should not be surrounded by multi-line whitespaces.', [new CodeSample("<?php\n\$a = array(1\n\n=> 2);\n")]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before BinaryOperatorSpacesFixer, MethodArgumentSpaceFixer, TrailingCommaInMultilineFixer.
     */
    public function getPriority() : int
    {
        return 31;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_DOUBLE_ARROW);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        foreach ($tokens as $index => $token) {
            if (!$token->isGivenKind(\T_DOUBLE_ARROW)) {
                continue;
            }
            $this->fixWhitespace($tokens, $index - 1);
            // do not move anything about if there is a comment following the whitespace
            if (!$tokens[$index + 2]->isComment()) {
                $this->fixWhitespace($tokens, $index + 1);
            }
        }
    }
    private function fixWhitespace(Tokens $tokens, int $index) : void
    {
        $token = $tokens[$index];
        if ($token->isWhitespace() && !$token->isWhitespace(" \t")) {
            $tokens[$index] = new Token([\T_WHITESPACE, \rtrim($token->getContent()) . ' ']);
        }
    }
}