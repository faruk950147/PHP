=========================================
 PHP OBJECT FUNCTIONS WITH DESCRIPTIONS
=========================================

BASIC OBJECT FUNCTIONS
----------------------
get_class(object)                  
    - অবজেক্টের ক্লাসের নাম রিটার্ন করে

get_parent_class(object/class)      
    - parent class এর নাম রিটার্ন করে

is_a(object, class)                 
    - অবজেক্ট নির্দিষ্ট ক্লাসের instance কি না চেক করে

is_subclass_of(object, class)       
    - অবজেক্ট/ক্লাস parent থেকে extend হয়েছে কি না দেখে

get_class_vars(class)               
    - ক্লাসের public properties এর ডিফল্ট মানগুলো রিটার্ন করে

get_object_vars(object)             
    - অবজেক্টের public properties এবং তাদের মান রিটার্ন করে

get_class_methods(class)            
    - ক্লাসের সব methods এর নাম array তে দেয়

method_exists(object/class, method)  
    - method আছে কি না দেখে

property_exists(object/class, property)
    - property আছে কি না দেখে

class_exists(class)                 
    - ক্লাস লোড/ডিফাইন হয়েছে কি না চেক করে

interface_exists(interface)         
    - ইন্টারফেস আছে কি না চেক করে

trait_exists(trait)                 
    - ট্রেইট ডিফাইন আছে কি না চেক করে

clone (keyword)                     
    - অবজেক্টের কপি তৈরি করে (__clone হ্যান্ডেল করে)

INSTANCE CHECK
--------------
instanceof                            
    - অবজেক্ট কোন ক্লাস/ইন্টারফেসের instance তা চেক করে

OBJECT TYPE & INFO
------------------
gettype(variable)                   
    - ভ্যারিয়েবল object কিনা সহ টাইপ রিটার্ন করে

is_object(variable)                 
    - object কি না true/false রিটার্ন করে

debug_zval_dump(variable)           
    - object এর reference info দেখায়

serialize(object)                   
    - অবজেক্টকে স্ট্রিং আকারে রূপান্তর করে (store/file এর জন্য)

unserialize(string)                 
    - serialize করা string → object এ পরিবর্তন করে

REFLECTION FUNCTIONS (ADVANCED)
-------------------------------
class_implements(class/object)      
    - ক্লাস কোন কোন interface implement করেছে তা রিটার্ন করে

class_parents(class/object)         
    - parent classes এর লিস্ট দেয়

class_uses(class/object)           
    - ক্লাস কোন ট্রেইট use করেছে তা দেয়

get_declared_classes()              
    - সব declared ক্লাসের লিস্ট রিটার্ন করে

get_declared_interfaces()           
    - সব declared interfaces লিস্ট দেয়

get_declared_traits()               
    - সব declared traits লিস্ট দেয়

CALLBACK / INVOKABLE
--------------------
is_callable(value)                  
    - method/function callable কি না দেখে

call_user_func(callable, ...)       
    - callable ফাংশন কল করে (method সহ)

call_user_func_array(callable, array)
    - array parameters দিয়ে callable কল করে

MAGIC METHODS (KEYWORDS)
------------------------
__construct()                       
    - অবজেক্ট তৈরি হলে কল হয়

__destruct()                        
    - অবজেক্ট destroy হলে কল হয়

__clone()                           
    - clone করার সময় কল হয়

__toString()                        
    - অবজেক্ট স্ট্রিং হিসেবে ব্যবহার করলে কল হয়

__get(), __set()                    
    - unavailable property access হ্যান্ডেল করে

__call(), __callStatic()            
    - unavailable method call হ্যান্ডেল করে

__invoke()                          
    - অবজেক্টকে function এর মতো call করা হলে

__sleep(), __wakeup()               
    - serialization প্রক্রিয়া নিয়ন্ত্রণ করে

=========================================
 END OF OBJECT FUNCTIONS LIST
=========================================
