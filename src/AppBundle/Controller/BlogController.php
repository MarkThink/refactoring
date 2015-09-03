<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;


class BlogController extends Controller
{

    public function addCommentAction()
    {

//        $form = '';
//        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $comment = $em->getRepository('AppBundle:Tuser')->find(8);

            //生成对象标识+获取ACL服务
            $aclProvider = $this->get('security.acl.provider');
            $objectIdentity = ObjectIdentity::fromDomainObject($comment);
            $acl = $aclProvider->createAcl($objectIdentity);

            //获取用户标识
            $tokenStorage = $this->get('security.token_storage');
            $user = $tokenStorage->getToken()->getUser();
            $securityIdentity = UserSecurityIdentity::fromAccount($user);

            //赋予用户实体权限
            $acl->insertObjectAce($securityIdentity,MaskBuilder::MASK_OWNER);
            $aclProvider->updateAcl($acl);

            //组合权限
//            $builder = new MaskBuilder();
//            $builder->add('view')->add('edit')->add('delete')->add('undelete');
//            $mask = $builder->get();
//
//            $identity = new UserSecurityIdentity('test','SharedModel\TrjAdmins');
//            $acl->insertObjectAce($identity,$mask);
//        }

        return new Response('success');
    }

    public function editCommentAction()
    {
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository('AppBundle:Tuser')->find(1);

        $authorizationChecker = $this->get('security.authorization_checker');
        if(false === $authorizationChecker->isGranted('EDIT',$comment)){
            throw new AccessDeniedException();
        }
        return new Response('success');
    }

}