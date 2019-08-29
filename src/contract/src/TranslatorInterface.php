<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Contract;

interface TranslatorInterface
{
    /**
     * Get the translation for a given key.
     */
    public function trans(string $key, array $replace = [], ?string $locale = null);

    /**
     * Get a translation according to an integer value.
     *
     * @param array|\Countable|int $number
     */
    public function transChoice(string $key, $number, array $replace = [], ?string $locale = null): string;

    /**
     * Get the default locale being used.
     */
    public function getLocale(): string;

    /**
     * Set the default locale.
     */
    public function setLocale(string $locale);
}
