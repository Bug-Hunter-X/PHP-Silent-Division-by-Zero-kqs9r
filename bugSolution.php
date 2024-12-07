```php
function foo(int $a, int $b): ?int {
  if ($b === 0) {
    return null; // Or throw an exception
  }
  return $a / $b;
}

$result = foo(5, 0);
if ($result === null) {
  echo "Division by zero error!";
} else {
  echo $result;
}
```