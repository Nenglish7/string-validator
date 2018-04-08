<?php
declare(strict_types=1);
/**
 * String Validator.
 *
 * @author  Nicholas English <https://github.com/Nenglish7>.
 *
 * @link    <https://github.com/Nenglish7/string-validator> Github Repository.
 * @license <https://github.com/Nenglish7/string-validator/master/LICENSE> MIT License.
 */

namespace NenglishSecurity\StringValidator;

/**
 * ValidatorChain.
 */
class ValidatorChain
{
    use DebugInfoProtection, SerializeProtection, MemoryProtection;

}
