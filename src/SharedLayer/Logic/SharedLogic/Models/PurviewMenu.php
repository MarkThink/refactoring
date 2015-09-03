<?php

namespace SharedLogic\Models;

class PurviewMenu{

    public function indexAction($name)
    {

        $em = $this->getDoctrine()->getManager();

//        $webcast = new TrjWebcast();
//        $webcast->setWebcastId('SDFA');
//        $webcast->setClassify(0);
//        $webcast->setIndustryId(1);
//        $webcast->setOrganizerJoinUrl('S');
//        $webcast->setPanelistJoinUrl('SD');
//        $webcast->setAttendeeJoinUrl('SDF');
//        $webcast->setWebcastNumber('33');
//        $webcast->setContactName('AF');
//        $webcast->setMobile('sas');
//        $webcast->setFlowNum(22);
//        $webcast->setViewNum(33);
//        $webcast->setViewTotal(444);
//        $webcast->setIntentionNum(33);
//        $webcast->setAddress('test');
//        $webcast->setSubject('title');
//
//        $em->persist($webcast);
//        $em->flush();

        $entities = $em->getRepository('Model:TrjWebcast')->findAll();

        return $this->render('WebBundle:Default:index.html.twig', array('name' => $name));


    }
}
