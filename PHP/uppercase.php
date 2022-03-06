  
$input = array("what", "A", "WonDerfuL", "is World");
  

print"Array before string conversion:\n";
print_r($input);
  
// Step 1: flip array key => value
$input = array_flip($input);
  
// Step 2: change case of new keys to upper
$input = array_change_key_case($input, CASE_UPPER);
  
// Step 3: reverse the flip process to 
// regain strings as value
$input = array_flip($input);
  
// print array after conversion of string
print"\nArray after string conversion:\n";
print_r($input);
  
?>