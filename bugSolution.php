function foo(array $arr): array {
  $result = [];
  $stack = [$arr];

  while (!empty($stack)) {
    $current = array_pop($stack);
    foreach ($current as $value) {
      if (is_array($value)) {
        $stack[] = $value; 
      } else {
        $result[] = $value;
      }
    }
  }
  return array_reverse($result);
} 