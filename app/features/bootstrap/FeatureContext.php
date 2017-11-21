<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }

    /**
     * @Given I am on the task page list
     */
    public function anEmptyBasket()
    {
        
    }

    /**
     * @When  I click the Add new task button
     */
    public function aProductCostingIsAddedToTheBasket($arg1)
    {
        $product = Product::withCost($arg1);
        $this->basket->addProduct($product);
    }

    /**
     * @Then Go to the Task Create page
     */
    public function theBasketPriceIs($arg1)
    {
        if($this->basket->price() != $arg1){
            throw new Exception('Le prix ne correspond pas');
        }
    }

}
