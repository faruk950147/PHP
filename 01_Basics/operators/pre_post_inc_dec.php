<!-- 1. Pre-Increment / Pre-Decrement (++$x, --$x)

এতে আগে value change হয়, তারপর variable return হয়।

উদাহরণ:
$x = 5;
$y = ++$x;  


এখন:

++$x মানে আগে x = 6 হবে

তারপর y = 6 return হবে

Output:
x = 6
y = 6

2. Post-Increment / Post-Decrement ($x++, $x--)

এতে আগে variable return হয়, তারপর value change হয়।

উদাহরণ:
$x = 5;
$y = $x++; 


এখন:

আগে y = 5 হবে (কারণ প্রথমে return করবে)

তারপর x = 6 হবে (increment শেষে)

Output:
x = 6
y = 5

এক লাইনে মনে রাখার নিয়ম

Type	Symbol	Meaning

Pre Increment	++$x	আগে বাড়বে, পরে return

Post Increment	$x++	আগে return, পরে বাড়বে

Pre Decrement	--$x	আগে কমবে, পরে return

Post Decrement	$x--	আগে return, পরে কমবে

ছোট উদাহরণ আরও
$a = 10;
echo ++$a; // Output: 11
echo $a++; // Output: 11 (but a becomes 12) -->