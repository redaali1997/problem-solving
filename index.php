<?php

declare(strict_types=1);

enum Priority: int {
    case Low = 1;
    case Medium = 2;
    case High = 3;
    case Urgent = 4;

    public function label(): string {
        return match($this) {
            self::Low => 'منخفض',
            self::Medium => 'متوسط',
            self::High => 'عالي',
            self::Urgent => 'ضروري',
        };
    }

    public function color(): string {
        return match($this) {
            self::Low => 'green',
            self::Medium => 'orange',
            self::High => 'blue',
            self::Urgent => 'red',
            default => throw new \LogicException('Unhandled priority')
        };
    }

    public function isHigherThan(Priority $other): bool {
        return $this->value > $other->value;
    }
}

$task1 = Priority::High;
$task2 = Priority::Low;

echo $task1->label();
echo $task1->color();
var_dump($task1->isHigherThan($task2));
var_dump(Priority::tryFrom(99));