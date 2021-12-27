<?php
namespace Hoan\TestPlugin\Plugin;

class testPlugin
{
    /**
     * before method of getDetail
     * 
     * @param \Hoan\TestPlugin\Block\Index $subject
     * @return array|null (null if not change argument)
     */
    public function beforeGetDetail(\Hoan\TestPlugin\Block\Index $subject)
    {
        return ["before 10 name", "before 10 age"];
        // return null;
    }

    /**
     * around method of getDetail
     * 
     * @param \Hoan\TestPlugin\Block\Index $subject
     * @param callable $proceed
     * @param string $name
     * @param string $age
     * @return array|null (null if not change argument)
     */
    public function aroundGetDetail(\Hoan\TestPlugin\Block\Index $subject, callable $proceed, $name, $age)
    {
        $name = "around-before 10 name";
        $age = "around-before 10 age";
        // proceed is the next plugin in sortOrder or observed
        $result = $proceed($name, $age);
        $result = "around-after 10 result";
        return $result;
    }

    /**
     * after method of getDetail
     * 
     * @param \Hoan\TestPlugin\Block\Index $subject
     * @param mixed $result
     * @return mixed $result
     */
    public function afterGetDetail(\Hoan\TestPlugin\Block\Index $subject, $result)
    {   
        $result = "after 10 result";
        return $result;
    }
}
