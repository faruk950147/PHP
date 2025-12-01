=========================================
 PHP ALL STRING FUNCTIONS WITH DESCRIPTIONS
=========================================

BASIC STRING FUNCTIONS
----------------------
strlen(str)                   - স্ট্রিংয়ের ক্যারেক্টার সংখ্যা রিটার্ন করে
str_word_count(str)           - শব্দ সংখ্যা রিটার্ন করে
strrev(str)                   - স্ট্রিং উল্টো করে রিটার্ন করে
str_repeat(str, count)        - স্ট্রিং বহুবার রিপিট করে

SEARCHING & CHECKING
--------------------
strpos(haystack, needle)      - প্রথম মিলের পজিশন রিটার্ন করে
strrpos(haystack, needle)     - শেষ মিলের পজিশন রিটার্ন করে
stripos(haystack, needle)     - case-insensitive প্রথম মিল
strripos(haystack, needle)    - case-insensitive শেষ মিল

str_contains(haystack, needle) - স্ট্রিংয়ের মধ্যে আছে কি না (PHP 8+)
str_starts_with(str, prefix)   - ওই prefix দিয়ে শুরু হয়েছে কি না (PHP 8+)
str_ends_with(str, suffix)     - ওই suffix দিয়ে শেষ হয়েছে কি না (PHP 8+)

MODIFYING STRINGS
-----------------
strtolower(str)               - সব ছোট হাতের অক্ষর করে
strtoupper(str)               - সব বড় হাতের অক্ষর করে
ucfirst(str)                  - প্রথম অক্ষর বড় হাতের করে
lcfirst(str)                  - প্রথম অক্ষর ছোট হাতের করে
ucwords(str)                  - প্রতিটি শব্দের প্রথম অক্ষর বড় করে

trim(str)                     - দুই দিকের whitespace/char মুছে ফেলে
ltrim(str)                    - বাম দিকের whitespace/char মুছে ফেলে
rtrim(str)                    - ডান দিকের whitespace/char মুছে ফেলে

str_replace(find, replace, str)     - স্ট্রিং রিপ্লেস করে
str_ireplace(find, replace, str)    - case-insensitive রিপ্লেস
substr(str, start, length)          - সাবস্ট্রিং রিটার্ন করে

RANDOM / SHUFFLE
-----------------
str_shuffle(str)              - স্ট্রিংয়ের অক্ষরগুলো এলোমেলো করে

SPLIT / JOIN
------------
explode(delimiter, str)       - স্ট্রিংকে array তে ভাগ করে
implode(glue, array)          - array কে স্ট্রিং বানায় (join)

COMPARE
-------
strcmp(str1, str2)            - case-sensitive তুলনা (0 হলে সমান)
strcasecmp(str1, str2)        - case-insensitive তুলনা
strncmp(str1, str2, len)      - নির্দিষ্ট len পর্যন্ত তুলনা

ENCODING / HASHING
------------------
md5(str)                      - md5 হ্যাশ রিটার্ন করে
sha1(str)                     - sha1 হ্যাশ রিটার্ন করে
crypt(str, salt)              - হ্যাশিং করে
base64_encode(str)            - base64 encode
base64_decode(str)            - base64 decode

HTML RELATED
------------
htmlspecialchars(str)         - HTML special chars encode করে
htmlentities(str)             - সব HTML entity encode করে
htmlspecialchars_decode(str)  - encode করা HTML ফেরত আনে
strip_tags(str)               - HTML ট্যাগগুলো সরিয়ে দেয়

FORMAT / PAD / WRAP
-------------------
str_pad(str, length, pad)     - স্ট্রিংকে নির্দিষ্ট দৈর্ঘ্যে প্যাড করে
wordwrap(str, width)          - শব্দগুলো নির্দিষ্ট প্রস্থে wrap করে

POSITION & PARTS
----------------
substr_count(str, substring)  - substring এর সংখ্যা
chunk_split(str, length)      - নির্দিষ্ট দৈর্ঘ্যে ভাগ করে newline যোগ করে

SOUND & SIMILARITY
------------------
soundex(str)                  - শব্দের ধ্বনিগত কোড রিটার্ন করে
metaphone(str)                - শব্দের উচ্চারণ-ভিত্তিক কোড
similar_text(str1, str2, %)   - দুই স্ট্রিং কতটা মিল তা বের করে

MISC
----
addslashes(str)               - \, ', " ইত্যাদির আগে slash যোগ করে
stripslashes(str)             - addslashes() এর slash তুলে দেয়
nl2br(str)                    - newline → <br> রূপান্তর করে
quoted_printable_encode(str)  - quoted-printable encoding
quoted_printable_decode(str)  - decode করে

=========================================
 END OF FULL STRING FUNCTIONS LIST
=========================================
