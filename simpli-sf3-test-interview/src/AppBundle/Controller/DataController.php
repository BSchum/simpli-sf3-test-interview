<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DataController extends Controller
{
    /**
     * @Route("/my-work")
     */
    public function OrganizeInputDataAction()
    {
        $inputData = $this->getParameter('inputData');
        $dataService = $this->container->get("DataService");

        $organizedData = $dataService->OrganizeData($inputData);
        return $this->render('AppBundle:Data:organize_input_data.html.twig', array(
            'datas' => $organizedData
        ));
    }

}
