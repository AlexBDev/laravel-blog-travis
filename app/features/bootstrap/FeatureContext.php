<?php

use App\Task;
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext
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
     * @Then /^Save the task from filling content with ":content" and filling is_done with ":is_done" $/
     */
    public function saveTask($content, $is_done) {
        $task = new Task;
        $task->content = $content;
        $task->is_done = $is_done;
        $task->save();
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
