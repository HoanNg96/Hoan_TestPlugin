# Introduction
This module to test Plugin run order in magento 2

- Contain:
    3 plugin classes (sortOrder 10, 20, 30), each plugin class contain 3 methods (before, around, after)

- Result:
    Result 1: (If plugin class contain all 3 methods)

    Plugin10::beforeMethod
    Plugin10::aroundMethod // first part of the code,that is called before callable
    Plugin20::beforeMethod
    Plugin20::aroundMethod // before executing callable
    Plugin30::beforeMethod
    Plugin30::aroundMethod // before executing callable
    Class:method // observered method
    Plugin30::aroundMethod // after executing callable
    Plugin30::afterMethod
    Plugin20::aroundMethod // after executing callable
    Plugin20::afterMethod
    Plugin10::aroundMethod // after executing callable
    Plugin10::afterMethod

    Result 2: (If plugin class not contain around method)

    Plugin10::beforeMethod
    Plugin20::beforeMethod
    Plugin30::beforeMethod
    Class:method // observered method
    Plugin10::afterMethod
    Plugin20::afterMethod
    Plugin30::afterMethod