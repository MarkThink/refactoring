<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TuserRepository extends EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username',$username)
            ->setParameter('email',$username)
            ->getQuery()
            ->getOneOrNullResult();
        if(null === $user){
            $message = sprintf('Unable to find an active admin AppBundle:Tuser object identified by "%s".',$username);
            throw new UsernameNotFoundException($message);
        }
        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if(!$this->supportsClass($class)){
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.',$class));
        }
        return $this->find($user->getId());
    }

    public function supportsClass($class)
    {
        return $this->getEntityName() == $class || is_subclass_of($class,$this->getEntityName());
    }
}
