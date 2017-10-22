<?php
namespace AppBundle\Tests\Controller;

use AppBundle\Services\DataService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DataServiceTest extends WebTestCase
{
    protected $dataService;
    private $input;
    public function __construct()
    {
        $this->dataService = new DataService();
        $input = array(array(1,1),array(1,2));
    }

    public function testOrganizeData()
    {
        $result = $this->dataService->OrganizeData($input);

        $this->assertEquals(array(1,1,2,1),array(1,2,3,0));
    }
}