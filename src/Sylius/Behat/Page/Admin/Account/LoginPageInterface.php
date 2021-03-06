<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Page\Admin\Account;

use Sylius\Behat\Page\SymfonyPageInterface;

interface LoginPageInterface extends SymfonyPageInterface
{
    /**
     * @param string $message
     *
     * @return bool
     */
    public function hasValidationErrorWith($message);

    public function logIn();

    /**
     * @param string $password
     */
    public function specifyPassword($password);

    /**
     * @param string $username
     */
    public function specifyUsername($username);
}
