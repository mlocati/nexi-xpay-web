<?php

declare(strict_types=1);

namespace MLocati\Nexi\XPayWeb\Build\API;

use MLocati\Nexi\XPayWeb\Build\Exception;
use RuntimeException;

class Field
{
    public string $description = '';
    public string $format = '';
    /**
     * @var string[]
     */
    public array $examples = [];
    public bool $isArray = false;
    public string $default = '';
    public ?Entity $entity = null;
    /**
     * @var \MLocati\Nexi\XPayWeb\Build\API\Field\Required[]
     */
    private array $requiredByMethod = [];

    private function __construct(
        public readonly FieldType $type,
        public readonly string $name,
        public readonly string $preferredEntityName = '',
        public ?int $minLength = null,
        public ?int $maxLength = null,
        public ?int $minimum = null,
        public ?int $maximum = null,
        bool $allowEmptyName = false,
    ) {
        if ($this->name === '') {
            if (!$allowEmptyName) {
                throw new RuntimeException('Missing parameter name');
            }
        } elseif (!preg_match('/^\\w+(-\\w+)*$/', $this->name)) {
            throw new RuntimeException("Invalid parameter name: {$this->name}");
        }
    }

    public static function createBoolean(string $name): self
    {
        return new self(type: FieldType::Boolean, name: $name);
    }

    public static function createInteger(string $name, ?int $minimum = null, ?int $maximum = null): self
    {
        return new self(type: FieldType::Integer, name: $name, minimum: $minimum, maximum: $maximum);
    }

    public static function createString(string $name, ?int $minLength = null, ?int $maxLength = null): self
    {
        return new self(type: FieldType::Str, name: $name, minLength: $minLength, maxLength: $maxLength);
    }

    public static function createObject(string $name, string $preferredEntityName, bool $allowEmptyName = false): self
    {
        if (!preg_match('/^\\w+(\\\\w+)*$/', $preferredEntityName)) {
            throw new RuntimeException("Invalid parameter entity name: {$preferredEntityName}");
        }

        return new self(type: FieldType::Obj, name: $name, preferredEntityName: $preferredEntityName, allowEmptyName: $allowEmptyName);
    }

    public function addRequired(Field\Required $required): void
    {
        if (isset($this->requiredByMethod[$required->methodName])) {
            $this->requiredByMethod[$required->methodName]->merge($required);
        } else {
            $this->requiredByMethod[$required->methodName] = $required;
        }
    }

    public function isAlwaysRequired(): bool
    {
        if ($this->requiredByMethod === []) {
            throw new RuntimeException('No requirements specified');
        }
        foreach ($this->requiredByMethod as $required) {
            if (!$required->isAlwaysRequired()) {
                return false;
            }
        }

        return true;
    }

    public function isAlwaysOptional(): bool
    {
        if ($this->requiredByMethod === []) {
            throw new RuntimeException('No requirements specified');
        }
        foreach ($this->requiredByMethod as $required) {
            if (!$required->isAlwaysOptional()) {
                return false;
            }
        }

        return true;
    }

    /**
     * @throws \MLocati\Nexi\XPayWeb\Build\Exception\IncompatibleField
     */
    public function isCompatibleWith(Field $field): bool
    {
        $myClone = clone $this;
        try {
            $myClone->merge($field);
        } catch (Exception\IncompatibleField $_) {
            return false;
        }

        return true;
    }

    /**
     * @throws \MLocati\Nexi\XPayWeb\Build\Exception\IncompatibleField
     */
    public function merge(Field $field): void
    {
        if ($this->type !== $field->type) {
            throw new Exception\IncompatibleField();
        }
        if ($this->name !== $field->name) {
            throw new Exception\IncompatibleField();
        }
        if ($this->isArray !== $field->isArray) {
            throw new Exception\IncompatibleField();
        }
        if ($this->minLength !== $field->minLength && $this->minLength !== null && $field->minLength !== null) {
            throw new Exception\IncompatibleField();
        }
        if ($this->maxLength !== $field->maxLength && $this->maxLength !== null && $field->maxLength !== null) {
            throw new Exception\IncompatibleField();
        }
        if ($this->minimum !== $field->minimum && $this->minimum !== null && $field->minimum !== null) {
            throw new Exception\IncompatibleField();
        }
        if ($this->maximum !== $field->maximum && $this->maximum !== null && $field->maximum !== null) {
            throw new Exception\IncompatibleField();
        }
        if ($this->format !== $field->format) {
            throw new Exception\IncompatibleField();
        }
        if ($this->entity !== $field->entity) {
            throw new Exception\IncompatibleField();
        }
        if ($this->description === '') {
            $this->description = $field->description;
        }
        $this->minLength ??= $field->minLength;
        $this->maxLength ??= $field->maxLength;
        $this->minimum ??= $field->minimum;
        $this->maximum ??= $field->maximum;
        foreach ($field->examples as $example) {
            if (!in_array($example, $this->examples, true)) {
                $this->examples[] = $example;
            }
        }
        foreach ($field->requiredByMethod as $required) {
            $this->addRequired($required);
        }
    }

    /**
     * @return string[]
     */
    public function getRequiredPHPDocLines(): array
    {
        if ($this->isAlwaysRequired()) {
            return ['@required'];
        }
        if ($this->isAlwaysOptional()) {
            return ['@optional'];
        }
        $lines = [];
        foreach ($this->requiredByMethod as $required) {
            $line = $required->getRequiredPHPDocLine();
            if ($line !== '') {
                $lines[] = $line;
            }
        }
        $lines[] = '@optional in other cases';

        return $lines;
    }

    /**
     * @return string[]
     */
    public function getRequiredSpecLines(): array
    {
        if ($this->isAlwaysOptional()) {
            return [];
        }
        if ($this->isAlwaysRequired()) {
            return ["'{$this->name}' => true,"];
        }
        $lines = ["'{$this->name}' => ["];
        foreach ($this->requiredByMethod as $required) {
            $line = $required->getRequiredSpecLine();
            if ($line !== '') {
                $lines[] = "    {$line},";
            }
        }
        $lines[] = '],';

        return $lines;
    }
}
