<?php
/**
 * @Author:      Jan
 * @Description:
 * @Date:        Created in 2022/8/31 12:18 下午
 * @Modifid By:
 */

namespace Tests\Example;

use DataProvider\BaseTestAbstract;

class JsonTest extends BaseTestAbstract
{
    // 去掉命名空间影响，子类必须继续
    protected $testNamespace = __NAMESPACE__;

    /**
     * @dataProvider autoProvider
     * @param $expect
     */
    public function testDemo1($expect)
    {
        $this->assertEquals(["name1"=>"class-json1","name2"=>"class-json2"], $expect);
    }


    /**
     * @dataProvider autoProvider
     * @param $expect
     */
    public function testMethod($expect)
    {
        $this->assertEquals('method-json', $expect);
    }
}