<?php
/**
 * Copyright 2017-2019 Milos Jovanovic <phplibs@yomy.work>
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

namespace YomY\ValueObject\Tests;

use YomY\ValueObject\EnumValueObject;

/**
 * @method static ENUM3
 */
class EnumValueObjectExample extends EnumValueObject {
    const ENUM1 = 1;
    const ENUM2 = '2';
    const ENUM3 = 'value3';
    const ENUM4 = '1';
}