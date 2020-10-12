<?php

interface State
{
  public function proceedToNext(OrderContext $context);
  public function __toString(): string;
}

class OrderContext
{
  private State $state;

  public static function create(): OrderContext
  {
    $order = new self();
    $order->state = new StateCreated();
    return $order;
  }

  public function setState(State $state)
  {
    $this->state = $state;
  }

  public function proceedToNext()
  {
    $this->state->proceedToNext($this);
  }

  public function __toString()
  {
    return $this->state->__toString();
  }
}

class StateCreated implements State
{
  public function proceedToNext(OrderContext $context)
  {
    $context->setState(new StateShipped());
  }

  public function __toString(): string
  {
    return 'created';
  }
}

class StateShipped implements State
{
  public function proceedToNext(OrderContext $context)
  {
    $context->setState(new StateDone());
  }

  public function __toString(): string
  {
    return 'shipped';
  }
}

class StateDone implements State
{
  public function proceedToNext(OrderContext $context)
  {
    // do nothing
  }

  public function __toString(): string
  {
    return 'done';
  }
}
