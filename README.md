# Introduction
This module to test Plugin run order in magento 2

- Contain:
    3 plugin classes (sortOrder 10, 20, 30), each plugin class contain 3 methods (before, around, after)

- Result:
    Result 1: (If plugin class contain all 3 methods)

    1. Plugin10::beforeMethod
    2. Plugin10::aroundMethod // first part of the code,that is called before callable
    3. Plugin20::beforeMethod
    4. Plugin20::aroundMethod // before executing callable
    5. Plugin30::beforeMethod
    6. Plugin30::aroundMethod // before executing callable
    7. Class:method // observered method
    8. Plugin30::aroundMethod // after executing callable
    9. Plugin30::afterMethod
    10. Plugin20::aroundMethod // after executing callable
    11. Plugin20::afterMethod
    12. Plugin10::aroundMethod // after executing callable
    13. Plugin10::afterMethod

    Result 2: (If plugin class not contain around method)

    1. Plugin10::beforeMethod
    2. Plugin20::beforeMethod
    3. Plugin30::beforeMethod
    4. Class:method // observered method
    5. Plugin10::afterMethod
    6. Plugin20::afterMethod
    7. Plugin30::afterMethod