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

use function hash;
use function preg_match;
use function sprintf;

class Sha256Hash extends BaseHash {
    public static function forContent(string $content): Hash {
        return new static(hash('sha256', $content));
    }

    /**
     * @throws InvalidHashException
     */
    protected function ensureValidHash(string $hash): void {
        if (!preg_match('/^[0-9a-f]{64}$/i', $hash)) {
            throw new InvalidHashException(sprintf('%s is not a valid SHA-256 hash', $hash));
        }
    }
}
