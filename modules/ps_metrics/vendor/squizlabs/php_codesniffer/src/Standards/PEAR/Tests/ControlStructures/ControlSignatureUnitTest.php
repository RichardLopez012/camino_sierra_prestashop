<?php

/**
 * Unit test class for the ControlSignature sniff.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/PHPCSStandards/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */
namespace ps_metrics_module_v4_0_6\PHP_CodeSniffer\Standards\PEAR\Tests\ControlStructures;

use ps_metrics_module_v4_0_6\PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;
/**
 * Unit test class for the ControlSignature sniff.
 *
 * @covers \PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures\ControlSignatureSniff
 */
final class ControlSignatureUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getErrorList()
    {
        return [9 => 1, 14 => 1, 20 => 1, 22 => 1, 32 => 1, 36 => 1, 44 => 1, 48 => 1, 56 => 1, 60 => 1, 68 => 1, 72 => 1, 84 => 1, 88 => 2, 100 => 1, 104 => 2, 122 => 2, 128 => 1, 132 => 3, 133 => 2, 147 => 1, 157 => 1, 165 => 1];
    }
    //end getErrorList()
    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array<int, int>
     */
    public function getWarningList()
    {
        return [];
    }
    //end getWarningList()
}
//end class