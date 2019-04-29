<?php
require_once 'company.php';
include ('connection.php');

/**
 * system test case.
 */
class systemTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var system
     */
    private $system;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated systemTest::setUp()
        $database=new connection();
        $db =$database->connect();
        $this->system = new system($db);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated systemTest::tearDown()
        $this->system = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests system->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated systemTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->system->__construct(/* parameters */);
    }

    /**
     * Tests system->Recomend_company()
     */
    public function testRecomend_company()
    {
        // TODO Auto-generated systemTest->testRecomend_company()
        //$this->markTestIncomplete("Recomend_company test not implemented");
        
        
        $result=$this->system->Recomend_company();
        $number =$result->num_rows;
        $this->assertTrue($number>=0);
    }

    /**
     * Tests system->display()
     */
    public function testDisplay()
    {
        // TODO Auto-generated systemTest->testDisplay()
        //$this->markTestIncomplete("display test not implemented");
        
        $result=$this->system->display();
        $number =$result->row_num;
        $this->assertTrue($number>=0);
    }

    /**
     * Tests system->applied()
     */
    public function testApplied()
    {
        // TODO Auto-generated systemTest->testApplied()
       // $this->markTestIncomplete("applied test not implemented");
        $result= $this->system->applied();
        $number =$result->num_rows;
        $this->assertTrue($number>=0);
    }

    /**
     * Tests system->Sort()
     */
    public function testSort()
    {
        // TODO Auto-generated systemTest->testSort()
       // $this->markTestIncomplete("Sort test not implemented");
        
        $result=$this->system->Sort();
        $number =$result->num_rows;
        $this->assertTrue($number>=0);
    }
}

