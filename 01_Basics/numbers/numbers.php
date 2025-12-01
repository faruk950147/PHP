=========================================
 PHP ALL NUMBER FUNCTIONS WITH DESCRIPTIONS
=========================================

BASIC MATH
----------
abs(x)           - x এর absolute value রিটার্ন করে
ceil(x)          - সংখ্যা উপরের দিকের পূর্ণসংখ্যায় রাউন্ড করে
floor(x)         - সংখ্যা নিচের দিকের পূর্ণসংখ্যায় রাউন্ড করে
round(x)         - সাধারণভাবে রাউন্ড করে
fmod(x, y)       - x % y (floating modulus)
intdiv(x, y)     - পূর্ণসংখ্যা ভাগফল রিটার্ন করে (integer division)
max(a, b, ...)   - সর্বোচ্চ মান রিটার্ন করে
min(a, b, ...)   - সর্বনিম্ন মান রিটার্ন করে

POWERS & ROOT
-------------
sqrt(x)          - x এর বর্গমূল রিটার্ন করে
pow(a, b)        - a এর b ঘাত রিটার্ন করে
exp(x)           - e^x রিটার্ন করে
expm1(x)         - e^x - 1 রিটার্ন করে (more accurate for small x)
log(x)           - natural logarithm (base e)
log10(x)         - base-10 logarithm
log1p(x)         - log(1 + x) (more accurate for small x)

TRIGONOMETRIC
-------------
sin(x)           - sine রিটার্ন করে (radian)
cos(x)           - cosine রিটার্ন করে (radian)
tan(x)           - tangent রিটার্ন করে (radian)
asin(x)          - arcsine রিটার্ন করে
acos(x)          - arccosine রিটার্ন করে
atan(x)          - arctangent রিটার্ন করে
atan2(y, x)      - quadrant-aware arctangent
hypot(x, y)      - √(x² + y²) রিটার্ন করে

HYPERBOLIC
----------
sinh(x)          - hyperbolic sine
cosh(x)          - hyperbolic cosine
tanh(x)          - hyperbolic tangent
asinh(x)         - inverse hyperbolic sine
acosh(x)         - inverse hyperbolic cosine
atanh(x)         - inverse hyperbolic tangent

CONVERSION
----------
deg2rad(x)       - degree → radian রূপান্তর
rad2deg(x)       - radian → degree রূপান্তর

RANDOM NUMBER FUNCTIONS
-----------------------
rand(min, max)        - সাধারণ random সংখ্যা
srand(seed)           - rand() এর জন্য seed সেট করে
getrandmax()          - rand() এর সর্বোচ্চ রেঞ্জ রিটার্ন করে

mt_rand(min, max)     - দ্রুত random সংখ্যা (Mersenne Twister)
mt_srand(seed)        - mt_rand() এর seed সেট করে
mt_getrandmax()       - mt_rand() এর সর্বোচ্চ রেঞ্জ

random_int(min, max)  - cryptographically secure random integer
random_bytes(len)     - cryptographically secure random bytes

NUMBER FORMAT / VALIDATION
--------------------------
number_format(x)  - সংখ্যা format করে (কমা, decimal)
intval(x)         - integer এ রূপান্তর
floatval(x)       - float এ রূপান্তর
is_numeric(x)     - x সংখ্যা কি না চেক করে

BASE CONVERSIONS
----------------
bindec(x)         - binary → decimal
decbin(x)         - decimal → binary
dechex(x)         - decimal → hex
decoct(x)         - decimal → octal
hexdec(x)         - hex → decimal
octdec(x)         - octal → decimal
base_convert(n, from, to) - যেকোনো base → যেকোনো base

STATISTICAL / SPECIAL
---------------------
lcg_value()       - pseudorandom float (0 থেকে 1)
pi()              - π (3.14159...) রিটার্ন করে

MISC
----
is_finite(x)      - সংখ্যা finite কি না দেখে
is_infinite(x)    - সংখ্যা infinite কি না দেখে
is_nan(x)         - NaN কি না চেক করে

=========================================
 END OF FULL LIST
=========================================
