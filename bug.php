function foo(array $arr): array {
  // Check if the array is empty
  if (empty($arr)) {
    return [];
  }

  // Initialize the result array
  $result = [];

  // Iterate over the array
  foreach ($arr as $value) {
    // Check if the value is an array
    if (is_array($value)) {
      // Recursively call the function
      $result = array_merge($result, foo($value));
    } else {
      // Add the value to the result array
      $result[] = $value;
    }
  }

  return $result;
}