<?php
/**
 * Copyright 2018 Milos Jovanovic <email.yomy@gmail.com>
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *     http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
declare(strict_types=1);

namespace YomY\ValueObject;

/**
 * Interface ValueObjectInterface
 *
 * @package YomY\ValueObject
 */
interface ValueObjectInterface {

    /**
     * Generates an instance of the ValueObject
     *
     * @param mixed $value
     * @return ValueObjectInterface
     */
    public static function instance($value): ValueObjectInterface;

    /**
     * Gets the value of the object
     * @return mixed
     */
    public function getValue();

}