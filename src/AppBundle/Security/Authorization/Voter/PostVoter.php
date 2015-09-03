<?php

namespace AppBundle\Security\Authorization\Voter;

use Symfony\Component\Security\Core\Authorization\Voter\AbstractVoter;
use Symfony\Component\Security\Core\User\UserInterface;


class PostVoter extends AbstractVoter
{
    const VIEW = 'view';
    const EDIT = 'edit';

    protected function getSupportedAttributes()
    {
        return array(self::VIEW,self::EDIT);
    }

    protected function getSupportedClasses()
    {
        return array('AppBundle\Entity\Tuser');
    }

    protected function isGranted($attribute,$post,$user=null)
    {
        if(!$user instanceof UserInterface){
            return false;
        }

        switch($attribute){
            case self::VIEW:
                if($post->getIsActive()){
                    return true;
                }
            break;
            case self::EDIT:
                if($user->getId() == $post->getId()){
                    return true;
                }
            break;
        }
        return false;
    }
}