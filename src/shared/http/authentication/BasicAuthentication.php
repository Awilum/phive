<?php declare(strict_types=1);
/*
 * This file is part of Phive.
 *
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Phive;

use function base64_encode;

class BasicAuthentication extends Authentication {
    public static function fromLoginPassword(string $domain, string $login, string $password): self {
        $credentials = base64_encode($login . ':' . $password);

        return new static($domain, $credentials);
    }

    protected function getType(): string {
        return 'Basic';
    }
}
