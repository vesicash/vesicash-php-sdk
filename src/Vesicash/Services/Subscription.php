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
        $this->required(['type', 'title', 'amount', 'business_id', 'currency'], $data);

        try {
            return $this->request('subscription/plan/create', $data);
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
            return $this->request('subscription/subscribe', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * Edit Subscription
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function editSubscription($data) {
        $this->required(['subscription_plan_id', 'business_id', 'title', 'amount', 'currency', 'type'], $data);
        try {
            return $this->request('subscription/plan/edit', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * List Subscribers
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function listSubscribers($data) {
        $this->required(['subscription_plan_id'], $data);
        try {
            return $this->request('subscription/plan/subscribers', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    /**
     * List Subscriptions
     * @param $data
     * @return mixed
     * @throws Exception
     */
    public function listSubscription($data) {
        $this->required(['business_id'], $data);
        try {
            return $this->request('subscription/plans/list', $data);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}