<?php
namespace Vesicash\Vesicash\Services;
use Exception;
use Vesicash\Request;

class Subscription extends Request
{
    /**
     * Create Subscription Plan
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function createSubscriptionPlan($data) {
        $this->required(['type', 'title', 'amount', 'business_id'], $data);

        try {
            return $this->request('/subscription/plan/create', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Subscribe User To A Plan
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function subscribeUserToPlan($data) {
        $this->required(['subscription_plan_id', 'account_id', 'trial_period'], $data);

        try {
            return $this->request('/subscription/subscribe', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}