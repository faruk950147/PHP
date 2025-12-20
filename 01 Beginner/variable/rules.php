/*
================================
PHP Variables - Notes
================================

What is a Variable?
-------------------
A variable is a container used to store data.

Example:
$name = "Faruk";
$age = 20;

-------------------
Variable Naming Rules
-------------------

1. A variable must start with the $ symbol
- $name
- $age

2. After $, it must start with a letter or underscore (_)
- $_name
- $userName

3. A variable cannot start with a number
- $user1 ✔
- $1user ✘

4. A variable may contain only letters, numbers, and underscores
- $total_marks ✔
- $total-marks ✘

5. Variable names are case-sensitive
- $age ≠ $Age ≠ $AGE

6. PHP keywords cannot be used as variable names
- $class ✘
- $function ✘

-------------------
Variable Naming Conventions
-------------------

1. Camel Case
- $myVariableName
- $totalPrice
- $userEmail

2. Snake Case
- $my_variable_name
- $total_price
- $user_email

3. Pascal Case
- $MyVariableName
- Mostly used for class names

-------------------
Best Practices
-------------------
- Use camelCase or snake_case for variables
- Use PascalCase for class names
*/