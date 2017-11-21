<?php

use App\Task;
use Behat\Behat\Hook\Scope\AfterStepScope;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Driver\Selenium2Driver;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
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
     * Presses button (input[type=submit|image|button|reset], button) with specified locator.
     *
     * @param string $locator button id, value or alt
     *
     * @throws ElementNotFoundException
     */
    private function submitForm($locator)
    {
        $button = $this->find('named', array('button', $locator));


        if (null === $button) {
            throw new ElementNotFoundException($this->getDriver(), 'button', 'id|name|title|alt|value', $locator);
        }

        $button->press();
    }

    /**
     * @Then /^Save the task from filling content with "([^"]*)" and filling is_done with "([^"]*)"$/
     */
    public function saveTheTaskFromFillingContentWithAndFillingIs_doneWith($arg1, $arg2)
    {
        $task = new Task;
        $task->content = $arg1;
        $task->is_done = boolval($arg2);
        $task->save();
    }
}
