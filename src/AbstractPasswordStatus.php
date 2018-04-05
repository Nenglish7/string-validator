<?php
declare(strict_types=1);
/**
 * PasswordExposed.
 *
 * @author  Nicholas English             <https://github.com/Nenglish7>.
 * @author  PasswordExposed Contributors <https://github.com/Nenglish7/PasswordExposed/graphs/contributors>.
 *
 * @link    <https://github.com/Nenglish7/PasswordExposed> Github Repository.
 * @license <https://github.com/Nenglish7/PasswordExposed/master/LICENSE> MIT License.
 */

namespace Nenglish7\PasswordExposed;

/**
 * AbstractPasswordStatus.
 */
abstract class AbstractPasswordStatus
{

    /**
     * @const int PASSWORD_EXPOSED This means the password is exposed.
     */
    const PASSWORD_EXPOSED = 0;
    
    /**
     * @const int PASSWORD_NOT_EXPOSED This means the password is not exposed.
     */
    const PASSWORD_NOT_EXPOSED = 1;
}
