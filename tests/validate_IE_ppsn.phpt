--TEST--
validate_IE_ppsn.phpt: Unit tests for ppsn method 'Validate/IE.php'

--FILE--
<?php
// Validate test script
$noYes = array('NO', 'YES');
require_once 'Validate/IE.php';

echo "Test Validate_IE\n";
echo "****************\n";

echo "\nTest PPSNs\n";
$ppsns = array("1234567C",  //OK
               "1234567CW", //OK
               "1234567CT", //OK
               "1234567CX", //OK
               "0234567CX", //OK
               "1234567CB", //NOK - unrecognised suffix
               "1234567"  //NOK - no letter present
               );
foreach ($ppsns as $ppsn) {
    echo "{$ppsn}: ".$noYes[Validate_IE::ppsn($ppsn)]."\n";
}
exit(0);
?>

--EXPECT--
Test Validate_IE
****************

Test PPSNs
1234567C: YES
1234567CW: YES
1234567CT: YES
1234567CX: YES
0234567CX: YES
1234567CB: NO
1234567: NO