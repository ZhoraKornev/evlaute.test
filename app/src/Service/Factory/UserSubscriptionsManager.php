<?php


namespace App\Service\Factory;


use App\Entity\SubscriptionType;
use App\Entity\SubscriptionUser;
use App\Entity\User;
use App\Model\Id;

class UserSubscriptionsManager
{
    /**
     * @param User             $user
     * @param SubscriptionType $subscriptionType
     *
     * @return SubscriptionUser
     */
    public function createForUser(User $user, SubscriptionType $subscriptionType):SubscriptionUser {
        return new SubscriptionUser(Id::next(), $subscriptionType, $user);
    }
}
