=========================================
 PHP ARRAY FUNCTIONS WITH DESCRIPTIONS
=========================================

ARRAY CREATION / CHECK
----------------------
array()                        - নতুন অ্যারে তৈরি করে
is_array(value)                - value অ্যারে কি না চেক করে
compact(var1, ...)             - ভ্যারিয়েবল → অ্যারে বানায়
range(start, end, step)        - রেঞ্জ ভিত্তিক অ্যারে তৈরি করে

ARRAY SIZE / COUNT
------------------
count(array)                   - অ্যারে আইটেম সংখ্যা রিটার্ন করে
sizeof(array)                  - count() এর সমান
array_count_values(array)      - value কতবার আছে তার হিসাব দেয়

ARRAY ADD / REMOVE / MODIFY
---------------------------
array_push(array, val1, ...)   - অ্যারের শেষে মান যোগ করে
array_pop(array)               - শেষ মান সরিয়ে দেয়
array_shift(array)             - প্রথম মান সরিয়ে দেয়
array_unshift(array, val1...)  - প্রথম দিকে মান যোগ করে
array_splice(array, start, len, replace)
                                - অ্যারে থেকে অংশ কাটে/যোগ করে
array_slice(array, start, len) - অ্যারের অংশ নেয়
array_replace(arr1, arr2...)   - একই key এর মান replace করে
array_fill(start, count, value)- নির্দিষ্ট value দিয়ে অ্যারে ভরে
array_fill_keys(keys, value)   - keys দিয়ে অ্যারে তৈরি করে

ARRAY SORTING
-------------
sort(array)                    - value অনুযায়ী sort (index reset)
rsort(array)                   - উল্টো ভাবে sort
asort(array)                   - associative array values sort (index ঠিক থাকে)
arsort(array)                  - value reverse sort
ksort(array)                   - key অনুযায়ী sort
krsort(array)                  - key reverse sort
natsort(array)                 - natural sorting (file1, file2...)
natcasesort(array)             - case-insensitive natural sort
usort(array, callback)         - custom sort (value ভিত্তিক)
uasort(array, callback)        - custom sort associative array values
uksort(array, callback)        - custom sort associative array keys

SEARCHING IN ARRAY
------------------
in_array(search, array)        - মান আছে কিনা চেক করে
array_search(value, array)     - মানের key রিটার্ন করে
key_exists(key, array)         - key আছে কি না দেখে
array_key_exists(key, array)   - key আছে কি না দেখে (same as above)

ARRAY KEYS / VALUES
--------------------
array_keys(array)              - সব key রিটার্ন করে
array_values(array)            - সব value রিটার্ন করে
array_flip(array)              - key ↔ value অদলবদল করে
array_change_key_case(array)   - keys uppercase/lowercase করে

ARRAY MERGE / COMBINE
---------------------
array_merge(arr1, arr2...)     - অ্যারে merge করে (same key হলে replace)
array_merge_recursive(arr...)  - recursive merge করে
array_combine(keys, values)    - keys এবং values দিয়ে অ্যারে তৈরি
array_intersect(arr1, arr2...) - মিল থাকা values রিটার্ন করে
array_intersect_key(arr1, arr2)- মিল থাকা keys রিটার্ন করে
array_diff(arr1, arr2...)      - ভিন্ন values রিটার্ন করে
array_diff_key(arr1, arr2...)  - ভিন্ন keys রিটার্ন করে
array_unique(array)            - ডুপ্লিকেট মান সরিয়ে দেয়

MAPPING / FILTER / REDUCE
-------------------------
array_map(callback, array)     - callback দিয়ে প্রতিটি মান modify করে
array_filter(array, callback)  - callback true হলে মান রাখে
array_reduce(array, callback)  - অ্যারে reduce করে একটি মান বানায়

POINTER FUNCTIONS
-----------------
current(array)                 - বর্তমান পয়েন্টার মান
next(array)                    - পরের মানে যায়
prev(array)                    - আগের মানে যায়
reset(array)                   - প্রথম মানে পয়েন্টার নেয়
end(array)                     - শেষ মানে পয়েন্টার নেয়
key(array)                     - বর্তমান key রিটার্ন করে

RANDOM / SHUFFLE
----------------
shuffle(array)                 - অ্যারে এলোমেলো করে
array_rand(array, num)         - র্যান্ডম key রিটার্ন করে

STACK / QUEUE SUPPORT
---------------------
array_push()                   - stack push
array_pop()                    - stack pop
array_shift()                  - queue pop (front)
array_unshift()                - queue push (front)

STRING ↔ ARRAY
---------------
explode(delimiter, str)        - স্ট্রিং থেকে অ্যারে বানায়
implode(glue, array)           - অ্যারে থেকে স্ট্রিং বানায়
join(glue, array)              - implode() এর সমান

ARRAY CALCULATIONS
------------------
array_sum(array)               - মানগুলোর যোগফল
array_product(array)           - মানগুলোর গুণফল

ARRAY CALLBACK UTILITIES
------------------------
array_walk(array, callback)    - প্রতিটি item এ callback চালায়
array_walk_recursive(array, callback)
                                - nested array এর ওপরও callback চালায়

MISC ARRAY FUNCTIONS
--------------------
array_reverse(array)           - অ্যারে উল্টে দেয়
array_chunk(array, size)       - অ্যারে টুকরো করে ভাগ করে
array_pad(array, size, value)  - অ্যারে নির্দিষ্ট আকারে বড় করে value দিয়ে
array_column(array, column)    - multi-array থেকে একটি column বের করে
array_multisort(arr1, arr2...) - একাধিক অ্যারে sort করে
array_key_first(array)         - প্রথম key
array_key_last(array)          - শেষ key

=========================================
 END OF ARRAY FUNCTIONS LIST
=========================================
