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
 * SerializationProtection.
 */
trait SerializationProtection
{
    
    /**
     * serialize() checks if your class has a function with the magic name __sleep(). If so, that function
     * is executed prior to any serialization. It can clean up the object and is supposed to return an array with
     * the names of all variables of that object that should be serialized. If the method doesn't return anything
     * then NULL is serialized and E_NOTICE is issued.
     *
     * The intended use of __sleep() is to commit pending data or perform similar cleanup tasks. Also, the function is
     * useful if you have very large objects which do not need to be saved completely.
     *
     * @return null Also triggers an E_NOTICE error.
     */
    public function __sleep()
    {
    }
}
