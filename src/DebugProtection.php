<?php
declare(strict_types=1);
/**
 * Security Traits.
 *
 * @author  Nicholas English <https://github.com/Nenglish7>.
 *
 * @link    <https://github.com/Nenglish7/security-traits> Github Repository.
 * @license <https://github.com/Nenglish7/security-traits/master/LICENSE> MIT License.
 */

namespace Nenglish7\SecurityTraits;

/**
 * DebugProtection.
 */
trait DebugProtection
{
    
    /**
     * This method is called by var_dump() when dumping an object to get the properties that should be shown.
     * If the method isn't defined on an object, then all public, protected and private properties will be shown.
     *
     * @return array
     */
    public function __debugInfo()
    {
        return [];
    }
}
