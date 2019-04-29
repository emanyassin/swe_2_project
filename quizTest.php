<?php
require_once 'quizdata.php';
include ('connection.php');

/**
 * quiz test case.
 */
class quizTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var quiz
     */
    private $quiz;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated quizTest::setUp()
        
        $database=new connection();
        $db =$database->connect();
        $this->quiz = new quiz($db);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated quizTest::tearDown()
        $this->quiz = null;
        
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
     * Tests quiz->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated quizTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->quiz->__construct(/* parameters */);
    }

    /**
     * Tests quiz->Recomend_quiez()
     */
    public function testRecomend_quiez()
    {
        // TODO Auto-generated quizTest->testRecomend_quiez()
        //$this->markTestIncomplete("Recomend_quiez test not implemented");
        
        $result=$this->quiz->Recomend_quiez();
        $number =$result->num_rows;
        $this->assertTrue($number>=0);
    }
}

