Feature: Tasks manager

  Scenario: Go to the Add new tasks page
    Given I am on the task page list
    When I click the Add new task button
    Then Go to the Task Create page

  Scenario: Create new task
    Given I am on the Task Create page
    When I click the Create button
    And I enter the content of the task
    Then Save the task
    And to the Task list page

  Scenario: Go to the Edit task page
    Given I am on the task page list
    And the task list is not empty
    When I click the Edit button of a task
    Then Go to the Task Edit page

  Scenario: Edit task
    Given I am on the Task Edit page
    When I click the Update button
    And I enter the content of the task
    Then Save the task
    And to the Task list page

  Scenario: Go to the View task page
    Given I am on the task page list
    And the task list is not empty
    When I click the View button of a task
    Then Go to the Task View page

  Scenario: View task
    Given I am on the Task View page
    Then Show the id, the content and if the task is done