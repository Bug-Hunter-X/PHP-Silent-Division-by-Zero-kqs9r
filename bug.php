```php
function foo(int $a, int $b): int {
  return $a / $b;
}

$result = foo(5, 0);
echo $result; // Warning: Division by zero
```